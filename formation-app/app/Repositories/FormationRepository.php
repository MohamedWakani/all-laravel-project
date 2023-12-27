<?php

namespace App\Repositories;

use App\Models\Formation;
use App\Repositories\BaseRepository;

class FormationRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'formation_name',
        'fonc_id'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Formation::class;
    }
}
