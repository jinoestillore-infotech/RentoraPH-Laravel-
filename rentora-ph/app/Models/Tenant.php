<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Tenant extends Authenticatable
{
    use Notifiable;

    protected $table = 'tenants';

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
        'emergency_contact_name',
        'emergency_contact_number',
        'emergency_contact_id_path',
    ];

    protected $hidden = [
        'password',
    ];
}