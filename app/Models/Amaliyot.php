<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Images;
use App\Models\Student;

class Amaliyot extends Model
{   
    public $table = 'amaliyot';
    public $fillable = [
        'student_id',
        // 'image',
        'title',
        'content',
        'rayting'
    ];
    public function images()
    {
        return $this->hasOne(Images::class,'amaliyot_id','id');
    }
    public function student()
    {
        return $this->belongsTo(Student::class, 'student_id','id');   
    } 
}
