<?php

namespace App\Modules\Search;

use App\Entity\Trip;
use App\Entity\User;
use App\Helpers\FileManager\ImagesManager;
use App\Modules\Search\Model\SearchTripItem;
use App\Modules\Search\Model\SearchUserItem;
use App\Modules\Search\Model\ShortMilestone;
use App\Repository\CommentRepository;
use App\Repository\UserRepository;
use App\Repository\MilestoneRepository;
use App\Repository\TripRepository;
use Symfony\Component\HttpFoundation\UrlHelper;

class SearchService
{
    public function __construct(private readonly TripRepository      $tripRepository,
                                private readonly MilestoneRepository $milestoneRepository,
                                private readonly ImagesManager       $imagesManager,
                                private readonly UserRepository      $userRepository,
                                private readonly CommentRepository  $commentRepository,
                                private readonly UrlHelper           $urlHelper)
    {
    }
    /**
     * @param Trip[]|null $trips
     * @return SearchTripItem[]
     */
    private function mapTripsToResponse (?array $trips): array {
        $items = [];
        if (isset($trips)) {
            $shortMilestones = [];
            foreach ($trips as $trip) {
                $shortMilestones[$trip->getObjId()] = $this->milestoneRepository->getShortMilestonesForSearch($trip->getMilestonesIDs());
            }
            $items = array_map(
                fn (Trip $trip) => new SearchTripItem(
                    $trip->getObjId(),
                    $trip->getOwner()->getId(),
                    $trip->getStartDate()->getTimestamp(),
                    $trip->getEndDate()->getTimestamp(),
                    $trip->getTags(),
                    $trip->getMainImage() ? base64_encode($this->imagesManager->getThumbnailDataForImage($trip->getMainImage())) : null,
                    array_reduce($shortMilestones[$trip->getObjId()], fn (?int $carry, ShortMilestone $milestone) => $carry + $milestone->getReviewsNumber()),
                    //array_values(array_filter($shortMilestones[$trip->getObjId()], fn (ShortMilestone $milestone) => $milestone->getType() == 'Город')),
                    array_values($shortMilestones[$trip->getObjId()]),
                    $trip->getName()
                ),
                $trips);
            //dump($items);

        }
        return $items;
    }


    /**
     * @param string $locationID
     * @return SearchTripItem[]
    */
    public function getTripsListWithLocation (string $locationID): array
    {
        $trips = $this->tripRepository->getTripsWithLocation($locationID);
        //dump($trips);
        return $this->mapTripsToResponse($trips);
    }

    /**
     * @param string $userID
     * @return SearchTripItem[]
    */
    public function getUserTripsList (string $userID): array {
        $userID = (int)$userID;
        $trips = [];
        if ($userID > 0) {
            $trips = $this->tripRepository->getUserTrips($userID);
        }
        return $this->mapTripsToResponse($trips);
    }

    /**
     * @return SearchUserItem[]
     */
    public function getMastersUnfiltered (): array {
        //$masters = $this->userRepository->getMastersForSearch();
        $mastersFeedbacksNumbers = $this->commentRepository->getFeedbacksNumbersForUsers(true, 7);
        $masters = $this->userRepository->getMastersAccountsWithFeedbacksNumbers($mastersFeedbacksNumbers);
        return array_map(
            fn (array $commentedUser) => new SearchUserItem(
                $commentedUser['user']->getId(),
                $commentedUser['user']->getName() ?? $commentedUser['user']->getUserIdentifier(),
                $commentedUser['user']->getAvatar() != null ? str_replace("http","https",$this->urlHelper->getAbsoluteUrl('/api/v1/image/'.$commentedUser['user']->getAvatar())) : null,
                $commentedUser['user']->getIsMaster(),
                $commentedUser['user']->getMasterTypesIDs(),
                $commentedUser['user']->getSkills(),
                $commentedUser['feedbacksNumber']
            ),
            $masters
        );
    }
}


