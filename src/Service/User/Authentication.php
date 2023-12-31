<?php

declare(strict_types=1);

namespace App\Service\User;

use App\Entity\User;
use App\Repository\UserRepository;
use App\Security\PasswordEncoder;
use DateTimeImmutable;
use Doctrine\ORM\EntityManagerInterface;
use Lcobucci\JWT\Encoding\ChainedFormatter;
use Lcobucci\JWT\Encoding\JoseEncoder;
use Lcobucci\JWT\Signer\Hmac\Sha256;
use Lcobucci\JWT\Signer\Key\InMemory;
use Lcobucci\JWT\Token\Builder;

class Authentication
{

    public function __construct(
        private EntityManagerInterface $entityManager,
        private UserRepository $userRepository,
        private PasswordEncoder $passwordEncoder
    ) {}

    public function register(): ?User
    {
        $qb = $this->
        userRepository->
        createQueryBuilder('u');

        $nextId = $this->getNextId($qb);

        $login = $this->getNextLogin($qb);

        $user = new User();
        $user
            ->setId($nextId)
            ->setUsername($login)
            ->setPassword($this->generatePassword())
            ->setApiToken($this->generateApiToken($login))
            ->setApiTokenExpiresAt($this->getApiTokenExpirationDatetime())
        ;
        $this->entityManager->persist($user);
        $this->entityManager->flush();

        return $user;
    }

    public function getJwt(string $username): ?String
    {
        $tokenBuilder = (new Builder(new JoseEncoder(), ChainedFormatter::default()));
        $algorithm    = new Sha256();

        $signingKey   = InMemory::plainText(
            'ffb0e788-e18e-4bf2-93c7-1a21eadc58e6'
        );

        $now   = new DateTimeImmutable();
        $token = $tokenBuilder
            //->issuedAt($now)
            //->expiresAt($now->modify('+1 hour'))
            ->relatedTo($username)
            ->getToken($algorithm, $signingKey);
        return $token -> toString();
    }

    public function login(string $username, string $hashedPassword): ?array
    {
        $user = $this->userRepository->findOneBy(['username' => $username]);
        if ($user === null) {
            return null;
        }

        if ($hashedPassword !== $this->passwordEncoder->hash($user->getPassword())) {
            return null;
        }

        if ($user->isTokenExpired()) {
            $user
                ->setApiToken($this->generateApiToken($username))
                ->setApiTokenExpiresAt($this->getApiTokenExpirationDatetime())
            ;
            $this->entityManager->flush();
        }

        return [
            'apiToken' => $user->getApiToken()
        ];
    }

    private function generateApiToken(string $id): string
    {
        return $this -> getJwt($id);
    }

    private function generatePassword(): string
    {
        return bin2hex(random_bytes(8));
    }

    private function getApiTokenExpirationDatetime(): \DateTimeImmutable
    {
        return (new \DateTimeImmutable())->modify('+1 month');
    }

    public function getNextId(\Doctrine\ORM\QueryBuilder $qb): int
    {
        return (int)$qb
            ->select('MAX(u.id)')
            ->getQuery()
            ->getResult() + 1;
    }

    public function getNextLogin(\Doctrine\ORM\QueryBuilder $qb): string
    {
        $current_max_length_array = $qb
            -> select('u.username')
        ->orderBy('LENGTH(u.username)', 'DESC')
        ->setMaxResults(1)
        ->getQuery()
        ->getResult();
        if (count($current_max_length_array) == 0)
            return 'blinker1';
        $current_max_length = strval(strlen($current_max_length_array[0]['username']));
        $current_last_username = $qb
            ->select('u.username')
            ->where('LENGTH(u.username)=:length')
            ->setParameter('length', $current_max_length)
            ->orderBy('u.username'  , 'DESC')
            ->setMaxResults(1)
            ->getQuery()
            ->getResult();

        $current_number = (int)substr($current_last_username[0]['username'], 7);
        return 'blinker' . ($current_number + 1);
    }
}
