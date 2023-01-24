<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\LandlordProfile;
use App\Models\Admin\Property;
use App\Http\Requests\Admin\PropertyRequest;

class PropertyController extends Controller
{
    //



    public function index(){
        return view('admin.property.index');
    }


    public function create(){
        return view('admin.property.create');
    }
}
