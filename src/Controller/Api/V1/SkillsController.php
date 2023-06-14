<?php

namespace App\Controller\Api\V1;

use App\Controller\JsonResponseTrait;
use App\Modules\SkillsList\SkillsListService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class SkillsController extends AbstractController
{
    use JsonResponseTrait;
    #[Route('/skills/list', name: 'app_skills')]
    public function index(SkillsListService $skillsListService, NormalizerInterface $normalizer): JsonResponse
    {
        //$response['items'] = $skillsListService->getSkillsList();
        //$response = $normalizer->normalize($response, 'json');

        return $this->successResponse($skillsListService->getSkillsList());
    }
}
