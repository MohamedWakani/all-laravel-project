<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Teacher;

class Formation extends Model
{
    use HasFactory;
    public function teachers()
{
    return $this->belongsToMany(Teacher::class, 'formation_teacher', 'formation_id', 'teacher_id');
}

}
