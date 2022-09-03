<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
