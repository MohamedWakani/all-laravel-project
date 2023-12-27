<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Teacher;

class Institution extends Model
{
    use HasFactory;
    public function teachers()
{
    return $this->hasMany(Teacher::class);
}

}
