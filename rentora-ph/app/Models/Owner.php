<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Owner extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'owners';

    /**
     * The attributes that are mass assignable.
     * Guarding against form-injection exploits.
     *
     * @var array
     */
    protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'age',
        'address',
        'email',
        'contact_number',
        'password',
        'valid_id_path',
        'business_permit_path',
        'boarding_house_name',
        'boarding_house_address',
        'status',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
    ];
}