<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\TenantProfile;

class TenantProfileController extends Controller
{
    public function index(){
        return view('admin.tenant.index');
    }

    public function create(){
        return view('admin.tenant.create');
    }

    public function store(TenantProfileRequest $request){

        $data = $request->validated();

        $tenantProfile = new TenantProfile();
        $tenantProfile->name =$data['name'];
        $tenantProfile->email =$data['email'];
        $tenantProfile->id_number =$data['id_number'];
        $tenantProfile->image =$data['image'];
        $tenantProfile->image_identity =$data['image_identity'];
        $tenantProfile->address =$data['address'];
        $tenantProfile->occupation_status =$data['occupation_status'];
        $tenantProfile->occupation_place =$data['occupation_place'];
        $tenantProfile->emergency_contact_person =$data['emergency_contact_person'];
        $tenantProfile->emergency_contact_number =$data['emergency_contact_number'];

    }
}
