<?php

namespace App\Modules\Syncer\Model;

class SyncObjectMasterType
{
    public int $syncStatusDateTime;
    public string $objID;
    public ?string $masterTypeDescription;
    public string $masterTypeName;

    /**
     * @param int $syncStatusDateTime
     * @param string $objID
     * @param string|null $masterTypeDescription
     * @param string $masterTypeName
     */
    public function __construct(int $syncStatusDateTime, string $objID, ?string $masterTypeDescription, string $masterTypeName)
    {
        $this->syncStatusDateTime = $syncStatusDateTime;
        $this->objID = $objID;
        $this->masterTypeDescription = $masterTypeDescription;
        $this->masterTypeName = $masterTypeName;
    }


}