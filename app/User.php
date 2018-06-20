<?php

namespace App;


use Illuminate\Database\Eloquent\Builder;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\DB;


class User extends Authenticatable {

    use Notifiable;
    /**
     * @var array
     */
    protected $with = ['tickets', 'roles'];


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }


    /**
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }


    public function rr()
    {
        //       return  $id = $this->id;
        //       return  DB::select('select * from `users` inner join `role_user` on `users`.`id` = `role_user`.`user_id` inner join `roles` on `roles`.`id` = `role_user`.`role_id` where `users`.`id` = ?', ['id' => $id,]);
        return User::findOrFail(31)->roles()->first()->id;
    }


    public static function admins()
    {
        return User::join("role_user", "users.id", "=", "role_user.user_id")
                   ->join("roles", "role_user.role_id", "=", "roles.id")
                   ->where("role_user.role_id", 1)->get();
    }


    public static function technicians()
    {
        return User::join("role_user", "users.id", "=", "role_user.user_id")
                   ->join("roles", "role_user.role_id", "=", "roles.id")
                   ->where("role_user.role_id", 2)
                   ->get();
    }


    public static function employees()
    {
        return User::join("role_user", "users.id", "=", "role_user.user_id")
                   ->join("roles", "role_user.role_id", "=", "roles.id")
                   ->where("role_user.role_id", 3)->get();
    }


    public function isAdmin()
    {
       return $this->roles()->first()->id === 1;
    }

    public function isTech()
    {
       return $this->roles()->first()->id === 2;
    }

    public function isEmp()
    {
       return $this->roles()->first()->id === 3;
    }

}
