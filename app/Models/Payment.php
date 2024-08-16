<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $table = 'payments';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function getEnrollment()
    {
        return $this->belongsTo(Enrollment::class, 'enrollment_id', 'id');
    }
}
