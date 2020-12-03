<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Amaliyot;

class Images extends Model
{
    public $table = 'images';
    public $fillable = [
        'amaliyot_id',
        'image',
        'thumb'
    ];
    public function amaliyot(){
        return $this->belongsTo(Amaliyot::class, 'amaliyot_id','id');
    }
}
