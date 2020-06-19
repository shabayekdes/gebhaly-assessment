<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * The services that belong to the order.
     */
    public function services()
    {
        return $this->belongsToMany('App\Models\Service');
    }
}
