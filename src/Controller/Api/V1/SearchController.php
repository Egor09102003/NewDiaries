<?php

namespace App\Controller\Api\V1;

use App\Controller\JsonResponseTrait;
use App\Modules\Search\SearchService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class SearchController extends AbstractController
{
    use JsonResponseTrait;
    #[Route('/search/trips', name: 'trips_search')]
    public function searchTrip(Request $request, SearchService $searchService, NormalizerInterface $normalizer): JsonResponse
    {
        $response = $searchService->getUserTripsList ("7");
        //dump (json_decode($request->getContent(),true));
        $response = $normalizer->normalize($response, 'json');
        return $this->successResponse($response);
    }

    #[Route('/search/users', name: 'app_search')]
    public function search(Request $request, SearchService $searchService, NormalizerInterface $normalizer): Response
    {
        $masters = $request->query->get('masters');

        if (isset($masters)){
            $data = $normalizer->normalize($searchService->getMastersUnfiltered(), 'json');
        } else {
            $data = $normalizer->normalize($searchService->getMastersUnfiltered(),'json');
        }

        return $this->successResponse($data);
        //return $this->successResponse();
    }


}
