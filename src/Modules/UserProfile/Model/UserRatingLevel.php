<?php

namespace App\Modules\UserProfile\Model;

class UserRatingLevel
{
    public UserRatingType $type;
    public int $points;
    public int $scale;
    public string $name;

    /**
     * @param UserRatingType $type
     * @param int $points
     * @param int $scale
     * @param string $name
     */
    public function __construct(UserRatingType $type, int $points, int $scale, string $name)
    {
        $this->type = $type;
        $this->points = $points;
        $this->scale = $scale;
        $this->name = $name;
    }


}