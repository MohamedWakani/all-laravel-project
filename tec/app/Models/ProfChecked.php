<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfChecked extends Model
{
    protected $fillable = [
        'name',
        'formation_id',
    ];
    use HasFactory;
}
