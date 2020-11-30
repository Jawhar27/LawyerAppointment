<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

use App\Notifications\LawyerResetPasswordNotification;


class Lawyer extends Authenticatable
{
    use Notifiable;

    protected $guard='lawyer';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
       
        'name',
          'email',
          'lawyer_id',
          'description',
          'gender',
          'specialInterest',
         'district',
          'town',
          'profile_image',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'specialInterest'=>'array',
        'email_verified_at' => 'datetime',
    ];

    public function sendPasswordResetNotification($token){
        $this->notify(new LawyerResetPasswordNotification($token));
    }

   

    
}