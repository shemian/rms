@extends('layouts.master')

@section('content')

<h6>Create Tenant</h6>
<section>
    <div class="card mt-4">
        <div class="card-header ">
            <h5>Tenant Details</h5>
        </div>
        <div class="card-body">
            
            <form action="{{ route('tenant-store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row mt-4">
                    <div class="col-md-6">
                        <label for="name">Full Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Tenant Full name">
                        <div class="mt-1 alert-danger">{{ $errors->first('name') }}</div>
                    </div>
                    <div class="col-md-6">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Enter Email" >
                        <div class="mt-1 alert-danger">{{ $errors->first('email') }}</div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-6">
                        <label for="phone">Phone Number</label>
                        <input type="text" name="phone" class="form-control" placeholder="Enter Email" >
                        <div class="mt-1 alert-danger">{{ $errors->first('phone') }}</div>
                    </div>
                    <div class="col-md-6">
                        <label for="id_number">Id Number/ Passport Number</label>
                        <input type="text" name="id_number" class="form-control" placeholder="Id Number/Passport No" >
                        <div class="mt-1 alert-danger">{{ $errors->first('id_number') }}</div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-6">
                        <label for="image">tenant Image</label>
                        <input type="file" name="image" class="form-control" placeholder="upload Your Image">
                    </div>
                    <div class="col-md-6">
                        <label for="image_identity">Identity document</label>
                        <input type="file" name="image_identity" class="form-control" placeholder="Upload Id/Passport Image" >
                    </div>
                    <div class="col-md-6 mt-4">
                        <label for="address">Address</label>
                        <input type="text" name="address" class="form-control">
                        <div class="mt-1 alert-danger">{{ $errors->first('address') }}</div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-6">
                        <label for="occupation_status">Occupation Status</label>
                        <input type="text" name="occupation_status" class="form-control">
                        
                    </div>
                    
                    <div class="col-md-6">
                        <label for="occupation_place">Occupation Place</label>
                        <input type="text" name="occupation_place" class="form-control">
                    </div>
                </div>
                
                <div class="row mt-4">
                    <div class="col-md-6">
                        <label for="emergency_contact_person">Emergency Person Name</label>
                        <input type="text" name="emergency_contact_person" class="form-control">
                        <div class="mt-1 alert-danger">{{ $errors->first('emergency_contact_person') }}</div>
                    </div>
                    <div class="col-md-6">
                        <label for="emergency_contact_number">Emergency Person Number</label>
                        <input type="text" name="emergency_contact_number" class="form-control">
                        <div class="mt-1 alert-danger">{{ $errors->first('emergency_contact_number') }}</div>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-primary" >Save Tenant</button>
                    </div>
                </div>
               
        
                
            </form>
        </div>
    </div>
</section>
@endsection()