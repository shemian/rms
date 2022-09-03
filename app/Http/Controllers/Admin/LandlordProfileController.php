<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Log;
use Datatables;
use App\Models\Admin\LandlordProfile;
use App\Http\Requests\Admin\LandlordProfileRequest;


class LandlordProfileController extends Controller
{
    public function index(){
        return view ('admin.landlord.index');
    }

    public function create(){
        return view ('admin.landlord.create');
    }

    public function store(LandlordProfileRequest $request){
    
       
        $data = $request->validated();
     
        $landlordProfile = new LandlordProfile();
        $landlordProfile->name =$data['name'];
        $landlordProfile->email =$data['email'];
        $landlordProfile->phone =$data['phone'];
        $landlordProfile->id_number =$data['id_number'];

        if($request->hasfile('image_identity')){
            $fileimg = $request->file('image_identity');
            $filenames = time().'.'.$fileimg->getClientOriginalExtension();
            $fileimg->move('upload/landlordImg/', $filenames);
            $landlordProfile->image_identity = $filenames;
        }
        $landlordProfile->address =$data['address'];
        $landlordProfile->bank_associated =$data['bank_associated'];
        $landlordProfile->bank_account =$data['bank_account'];
        $landlordProfile->save();

        Log::info($request);

        return redirect()->route('landlord-index');

    }
}
