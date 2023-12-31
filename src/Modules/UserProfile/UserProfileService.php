<?php

namespace App\Modules\UserProfile;

use App\Entity\User;
use App\Helpers\FileManager\ImagesManager;
use App\Modules\UserProfile\Model\UserCheckResult;
use App\Modules\UserProfile\Model\UserProfile;
use App\Modules\UserProfile\Model\UserProfileResponse;
use App\Modules\UserProfile\Model\UserRating;
use App\Modules\UserProfile\Model\UserRatingLevel;
use App\Modules\UserProfile\Model\UserRatingType;
use App\Modules\UserProfile\Model\UserRecoverItem;
use App\Repository\CommentRepository;
use App\Repository\UserRepository;
use Symfony\Component\HttpFoundation\UrlHelper;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\AbstractNormalizer;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

class UserProfileService
{
    public function __construct(private readonly UserRepository $userRepository,
                                private readonly UrlHelper      $urlHelper,
                                //private FileManagerService $fm,
                                private readonly ImagesManager  $imagesManager,
                                private readonly CommentRepository $commentRepository
    )
    {
        /*$this->client = HttpClient::create([
            'base_uri' => 'https://proc.minegoat.ru/',
        ]);*/
    }


    /**
     * @param string $username
     * @param int|null $id
     * @return UserProfile
     */
    public function getUserProfile(string $username, ?int $id = null):array
    {
        if (isset($id) && $id > 0) {
            $profile = $this->userRepository->findOneBy(['id' => $id]);
        } else {
            $profile = $this->userRepository->findOneBy(['username'=>$username]);
        }

        //$users = $this->userRepository->findAll();
        /*do {
            $profile = array_pop($users);//TODO: get user by id
        } while ($profile->getName() == null);*/
        $items = [];
        if (isset($profile)) {
            $items[] = $this->mapToUserProfile($profile); /*new UserProfile(
                (string)$profile->getId(),
                $profile->getName(),
                $profile->getPhone(),
                $profile->getDescription(),
                $profile->getIsGuide(),
                $profile->getAvatar() != null ? $this->urlHelper->getAbsoluteUrl('/api/v1/image/'.$profile->getAvatar()) : null, //TODO: move images directory path to global
                $profile->getHomeLocationID(),
                $profile->getSex()
            );*/

        }
        return $items;
    }

    public function updateUserProfile(string $data, string $username = null):array
    {
        //serialize data from request
        $serializer = new Serializer([new ObjectNormalizer()], [new JsonEncoder()]);
        $requestData = new UserProfileResponse(null);
        $serializer->deserialize(
            $data,
            UserProfileResponse::class,
            'json',
            [AbstractNormalizer::OBJECT_TO_POPULATE=>$requestData]
        );
        //Get single user from items array
        if (count($requestData->items) > 0){
            $userItem = array_pop($requestData->items);
        }
        //Get user from DB and update properties according to user requestData
        $profile = $this->userRepository->findOneBy(['username'=>$username]);
        if (isset($userItem) && $profile != null){
            $profile->setName($userItem['name'] ?? null);
            $profile->setIsGuide($userItem['isGuide']);
            $profile->setDescription($userItem['userDescription'] ?? null);
            $profile->setPhone($userItem['phone'] ?? null);
            $profile->setSex($userItem['sex'] ?? null);
            $profile->setHomeLocationID($userItem['homeLocationID'] ?? null);
            if (isset($userItem['avatar']) && $userItem['avatar'] != null){
                $filename = $this->imagesManager->saveImage(base64_decode($userItem['avatar']), $userItem['avatarFileName']);
                if ($filename != null){
                    $profile->setAvatar($filename);
                }
            }
            $profile->setIsMaster($userItem['isMaster'] ?? false);
            $profile->setSocialNetworks($userItem['socialNetworks'] ?? null);
            $profile->setMasterTypesIDs($userItem['masterTypesIDs'] ?? null);
            $profile->setMasterStory($userItem['masterStory'] ?? null);
            $profile->setSkills($userItem['skills'] ?? null);
            $this->userRepository->updateUser($profile);
        } else {
            print 'User trouble';
        }
        $profile = $this->userRepository->findOneBy(['username'=>$username]);
        //return $this->getUserProfile($profile);
        return [$this->mapToUserProfile($profile)];
    }

    public function recoverUser (string $phone): array {
        $profile = $this->userRepository->findOneBy(['phone'=>$phone]);
        if (isset($profile)) {
            return [new UserRecoverItem($profile->getUserIdentifier(),$profile->getPassword(),$profile->getApiToken(), null)];
        } else {
            return [new UserRecoverItem(null,null,null, "UserNotExisted")];
        }

    }

    public function checkPhone (string $phone): array {
        $profile = $this->userRepository->findOneBy(['phone'=>$phone]);
        if (isset($profile)){
            return [new UserCheckResult('UserExisted')];
        } else {
            return [new UserCheckResult('UserNotExisted')];
        }
    }

    private function mapToUserProfile(User $profile): UserProfile {
        $feedbacksNumbers = $this->commentRepository->getFeedbacksNumbers((string)$profile->getId());
        return new UserProfile(
            (string)$profile->getId(),
            $profile->getName(),
            $profile->getPhone(),
            $profile->getDescription(),
            $profile->getIsGuide(),
            $profile->getAvatar() != null ? str_replace("http","https", $this->urlHelper->getAbsoluteUrl('/api/v1/image/'.$profile->getAvatar())) : null, //TODO: move images directory path to global
            $profile->getHomeLocationID(),
            $profile->getSex(),
            $this->getUserRating($profile),
            null,
            $profile->getIsMaster(),
            $profile->getSocialNetworks(),
            $profile->getMasterTypesIDs(),
            $profile->getMasterStory(),
            $profile->getSkills(),
            $feedbacksNumbers['users'] ?? 0,
            $feedbacksNumbers['masters'] ?? 0
        );
    }

    private function getUserRating(User $profile):UserRating {
        $userRatingLevels = [];
        $userRatingLevels[] = new UserRatingLevel(
            UserRatingType::Trips,
            10,
            30,
            "Осознанный"
        );
        $userRatingLevels[] = new UserRatingLevel(
            UserRatingType::Masters,
            1,
            3,
            "Новичок"
        );
        $userRatingLevels[] = new UserRatingLevel(
            UserRatingType::Skills,
            4,
            4,
            "Ученик"
        );
        $userRating = new UserRating();
        $userRating->ratingLevels = $userRatingLevels;
        return $userRating;
    }
}