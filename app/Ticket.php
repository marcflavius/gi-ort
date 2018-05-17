<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


/**
 * @property mixed $user
 */
class Ticket extends Model
{

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
