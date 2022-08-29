<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LandlordProfileController extends Controller
{
    public function index(){
        return view ('admin.landlord.index');
    }

    public function create(){
        return view ('admin.landlord.create');
    }
}
