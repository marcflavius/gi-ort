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
