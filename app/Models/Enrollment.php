<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model
{
    use HasFactory;
    protected $table = 'enrollments';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function getCourse(){
        return $this->belongsTo(Course::class, 'course_id', 'id');
    }
    public function getBatch(){
        return $this->belongsTo(Batch::class, 'batch_id', 'id');
    }
    public function getStudent(){
        return $this->belongsTo(Student::class, 'student_id', 'id');
    }
}
