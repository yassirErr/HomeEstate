<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = ['property_id','photo','created_at','updated_at'];

    public function getPhotoAttribute($val){

        return $val ? asset('assets/admin/images/properties/'.$val): '';
        
    }
}
