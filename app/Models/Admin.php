<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User As Authenticatable;
use Illuminate\Notifications\Notifiable;
class Admin extends Authenticatable
{
    protected $table ="admins";
    protected $guarded=[];
    public $timestamps=true;
}
