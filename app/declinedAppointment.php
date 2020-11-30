<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class declinedAppointment extends Model
{
    protected $fillable = [
       
        'client_name',
          'client_email',
          'lawyer_id',
          'lawyer_name',
          'description',
          'current_status',
          'type_of_legal_issues',
         'district',
          'date',
          'time',
    ];
    protected $casts = [
        'type_of_legal_issues'=>'array',
      
    ];
}
