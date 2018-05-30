<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Technician extends User
{

    protected $table = 'users';

    /**
     * The "booting" method of the model.
     *
     * @return void
     */
    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope('technician', function (Builder $builder) {
            $builder->join('role_user','users.id','=','role_user.user_id')
                    ->join('roles','roles.id','=','role_user.role_id')
                    ->where("role_id",2);
        });
    }

//
//    public function ()
//    {
//
//    }
    
}
