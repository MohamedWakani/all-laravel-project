<?php

namespace App\Repositories;

use App\Models\Fonctionnaire;
use App\Repositories\BaseRepository;

class FonctionnaireRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'ppr',
        'name',
        'email'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Fonctionnaire::class;
    }
}
