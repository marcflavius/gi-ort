<?php

namespace App;


use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;


/**
 * @property mixed $categories
 * @property mixed $roles
 * @property mixed $tickets
 * @property \Carbon\Carbon $created_at
 */
class Admin extends User {

    protected $table = 'users';

    protected $with = ['tickets', 'categories'];

    protected $fillable = ['name'];


    /**
     * The "booting" method of the model.
     *
     * @return void
     */
    protected static function boot()
    {
        parent::boot();
        static::addGlobalScope('admin', function (Builder $builder) {
            $builder
                ->join('role_user', 'users.id', '=', 'role_user.user_id')
                ->join('roles', 'roles.id', '=', 'role_user.role_id')
                ->where("role_id", 1);
        });
    }

    

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function roles()
    {
        return $this->belongsToMany(Role::class, 'role_user', 'user_id');
    }


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo|\Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tickets()
    {
        return $this->hasMany(Ticket::class, 'user_id');
    }


    public function categories()
    {
        return $this->hasMany(Category::class,'user_id');
    }
}


