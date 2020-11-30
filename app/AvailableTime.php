<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AvailableTime extends Model
{
    public $table = "availableTimes";
    protected $fillable = [
       
        
          'lawyer_id',
          'date',
          'availableTime',
          'currentStatus',
       
    ];
    // protected $attributes = [
    //     'currentStatus' => "Active",
    //  ];
}
