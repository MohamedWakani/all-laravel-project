<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Formation;

class Teacher extends Model
{
    use HasFactory;
    public function institution()
{
    return $this->belongsTo(Institution::class);
}

public function formations()
{
    return $this->belongsToMany(Formation::class, 'formation_teacher', 'teacher_id', 'formation_id');
}

}
