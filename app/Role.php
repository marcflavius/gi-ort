<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public $timestamps = false;
    public const USER_ADMIN = 'admin';
    public const USER_TECHNICIAN = 'technician';
    public const USER_EMPLOYEE = 'employee';


    public function users()
    {
        return $this->belongsToMany(User::class,'user_role');
    }

}
