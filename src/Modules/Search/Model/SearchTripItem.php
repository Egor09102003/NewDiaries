<?php

namespace App\Modules\Search\Model;

class SearchTripItem
{
    public string $objID;
    public string $ownerID;
    public int $startDate;
    public int $endDate;
    public ?string $tags;
    public ?string $mainImage;
    public ?int $reviewsNumber;
    public array $shortMilestones;
    public string $name;

    //visibility

    //array of short milestones: location name, date, objID
    /**
     * @param string $objID
     * @param string $ownerID
     * @param int $startDate
     * @param int $endDate
     * @param string|null $tags
     * @param string|null $mainImage
     * @param int|null $reviewsNumber
     * @param array $shortMilestones
     * @param string $name
     */
    public function __construct(string $objID, string $ownerID, int $startDate, int $endDate, ?string $tags, ?string $mainImage, ?int $reviewsNumber, array $shortMilestones, string $name)
    {
        $this->objID = $objID;
        $this->ownerID = $ownerID;
        $this->startDate = $startDate;
        $this->endDate = $endDate;
        $this->tags = $tags;
        $this->mainImage = $mainImage;
        $this->reviewsNumber = $reviewsNumber;
        $this->shortMilestones = $shortMilestones;
        $this->name = $name;
    }


}