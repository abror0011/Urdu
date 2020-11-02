<?php

namespace App\Models;
use App\User;
use App\Models\Student;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public $table = 'students';
    public $fillable = [
        'user_id',
        'first_name',
        'last_name',
        'course',
        'group',
        'address',
        'user_name',
        'password',
        'reyting'
    ]; 
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id','id');   
    }  
}
