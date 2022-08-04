<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TenantProfile extends Model
{
    use HasFactory;
    protected $table = 'tenant_profiles';
    protected $fillables =[
        'name',
        'email',
        'phone',
        'id_number',
        'image',
        'address',
        'occupation_status',
        'occupation_place',
        'emergency_contact_person',
        'emergency_conact_number',
    ];
}
