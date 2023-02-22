<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Student;
class Kelas extends Model
{
    use HasFactory;
    protected $table = 'class';

    public function students()
    {
      return $this->hasMany(Student::class, 'class_id', 'id');
    }
    public function homeroomTeacher()
    {
      return $this->belongsTo(Teacher::class, 'teacher_id', 'id');
    }
}
