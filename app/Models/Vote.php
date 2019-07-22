<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    protected $fillable = [ 'guest_id', 'option_id', ];

    public function option()
    {
        return $this->belongsTo(Option::class);
    }
}
