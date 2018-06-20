<?php

namespace App;


use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


/**
 * @property mixed $categories
 * @property mixed $roles
 * @property mixed $tickets
 * @property \Carbon\Carbon $created_at
 */
class Admin extends User {

    public const ROLE_ID = 1;

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
            $builder;

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
        return $this->hasMany(Category::class, 'user_id');
    }





}


