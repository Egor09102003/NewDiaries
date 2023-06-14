<?php

namespace App\Modules\Search\Model;

class SearchUsersListResponse
{
    /**
     * @var SearchUserItem[]
     */

    public ?array $items;

    /**
     * @param SearchUserItem[] $items
     */
    public function __construct(?array $items)
    {
        $this->items = $items;
    }

    /**
     * @return SearchUserItem[]
     */
    public function getItems(): array
    {
        return $this->items;
    }

    /**
     * @param SearchUserItem[] $items
     */
    public function setItems(array $items): void
    {
        $this->items = $items;
    }
}