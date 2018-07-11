<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $timestamps = false;
    
    protected $fillable = ['description','name'];
    
    public function user()
    {
        return $this->belongsTo(User::class);

    }
    public function tickets()
    {
        return $this->hasMany(Category::class);

    }

    public function scopeList($query)
    {
        return     $query->pluck('name','id');
    }

}
