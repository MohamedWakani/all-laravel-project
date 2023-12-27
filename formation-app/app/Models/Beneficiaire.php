<?php

namespace App\Models;
use App\Models\Formation;
use Illuminate\Database\Eloquent\Model;

class Beneficiaire extends Model
{
    public $table = 'beneficiaires';

    public $fillable = [
        'ppr',
        'name',
        'emqil',
        'formation_id'
    ];

    protected $casts = [
        'ppr' => 'string',
        'name' => 'string',
        'emqil' => 'string',
        'formation_id' => 'integer'
    ];

    public static array $rules = [
        'ppr' => 'required',
        'name' => 'required',
        'emqil' => 'required',
        'formation_id' => 'required'
    ];

    public function formation()
    {
        return $this->belongsTo(Formation::class, 'formation_id', 'id');
    }
}
