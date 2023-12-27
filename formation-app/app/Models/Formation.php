<?php

namespace App\Models;
use App\Models\Fonctionnaire;
use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    public $table = 'formations';

    public $fillable = [
        'formation_name',
        'fonc_id'
    ];

    protected $casts = [
        'formation_name' => 'string',
        'fonc_id' => 'integer'
    ];

    public static array $rules = [
        'formation_name' => 'required',
        'fonc_id' => 'required'
    ];

    public function fonctionnaire()
    {
        return $this->belongsTo(Fonctionnaire::class, 'fonc_id', 'id');
    }
}
