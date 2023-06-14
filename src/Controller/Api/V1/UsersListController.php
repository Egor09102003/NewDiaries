<?php

namespace App\Controller\Api\V1;

use App\Controller\JsonResponseTrait;
use App\Modules\UsersList\UsersListService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class UsersListController extends AbstractController
{
    use JsonResponseTrait;

    public function __construct(private readonly UsersListService $usersListService)
    {

    }

    #[Route('/users/list', name: 'api_v1_users_list')]
    public function index(NormalizerInterface $normalizer, Request $request): Response
    {
        $masters = $request->query->get('masters');

        if (isset($masters)){
            $data = $normalizer->normalize($this->usersListService->getMastersList(), 'json');
        } else {
            $data = $normalizer->normalize($this->usersListService->getUsersList(), 'json');
        }

        return $this->successResponse($data);
    }
}
