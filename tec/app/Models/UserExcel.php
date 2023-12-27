<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserExcel extends Model
{
    protected $fillable = [
        'name',
        'email',
        'formation_id',
    ];
    use HasFactory;
}
