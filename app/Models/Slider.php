<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $fillable = ['photo','created_at','updated_at'];

    public function getPhotoAttribute($val){

        return $val ? asset('assets/admin/images/sliders/'.$val): '';
        
    }
}
