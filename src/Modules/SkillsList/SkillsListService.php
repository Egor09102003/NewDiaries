<?php

namespace App\Modules\SkillsList;

use App\Entity\Skill;
use App\Modules\SkillsList\Model\SkillsListItem;
use App\Repository\SkillRepository;

class SkillsListService
{

    public function __construct(private SkillRepository $skillRepository)
    {
    }

    public function getSkillsList(): array {
        $skills = $this->skillRepository->findAll();

        return array_map(
            fn (Skill $skill) => new SkillsListItem(
                    $skill->getObjID(),
                    $skill->getOwnerID(),
                    $skill->getTags(),
                    $skill->getName(),
                    $skill->getSkillDescription(),
                    $skill->getInternationalDescription(),
                    $skill->getInternationalName()
                ),
            $skills
        );
    }
}