<?php

namespace App\Repositories;

use App\Models\Beneficiaire;
use App\Repositories\BaseRepository;

class BeneficiaireRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'ppr',
        'name',
        'emqil',
        'formation_id'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Beneficiaire::class;
    }
}
