<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


/**
 * @property mixed $user
 */
class Ticket extends Model
{
    
    protected $with = ['category'];

    protected $fillable = ['objet', 'description', 'category_id', 'status', 'priority'];


    /**
     * @param $builder
     * @param QueryFilter $queryFilters
     *
     * @return QueryFilter[]|\Illuminate\Database\Eloquent\Collection
     */
    public function scopeSelect($builder, QueryFilter $queryFilters)
    {
        $queryFilters->apply($builder);
//         Loop throw the query functions, adding their querys to the builder
        return $builder;
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    
}
