<?php

namespace App\Models;
use App\Models\Formation;
use Illuminate\Database\Eloquent\Model;

class Fonctionnaire extends Model
{
    public $table = 'fonctionnaires';

    public $fillable = [
        'ppr',
        'name',
        'email'
    ];

    protected $casts = [
        'ppr' => 'string',
        'name' => 'string',
        'email' => 'string'
    ];

    public static array $rules = [
        'ppr' => 'required',
        'name' => 'required',
        'email' => 'required'
    ];

    public function formation()
    {
        return $this->hasMany(Formation::class, 'fonc_id', 'id');
    }
}
