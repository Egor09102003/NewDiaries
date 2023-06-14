<?php

namespace App\Modules\Search\Model;

use App\Modules\TripsList\Model\TripsListItem;

class TripsListResponse
{
    /**
     * @var TripsListItem[]
     */
    public array $items;

    /**
     * @param TripsListItem[] $items
     */
    public function __construct(array $items)
    {
        $this->items = $items;
    }


}