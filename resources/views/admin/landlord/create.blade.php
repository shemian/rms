@extends('layouts.master')

@section('content')

<h6>Create Landlord</h6>
<section>
    <div class="card mt-4">
        <div class="card-header ">
            <h5>Landlord Details</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('landlord-store') }}" method="post" enctype="multipart/form-data">
                @csrf
                
                <div class="row mt-4">
                    <div class="col-md-4">
                        <label for="name">Full Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Landlord Full name">
                        @error('name')
                        <div class="mt-1 alert-danger">{{ $message}}</div>
                        @enderror
                    </div>
                    <div class="col-md-4">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Enter Email" >
                        @error('email')
                        <div class="mt-1 alert-danger">{{ $message}}</div>
                        @enderror
                    </div>
                    <div class="col-md-4">
                        <label for="phone">Phone Number</label>
                        <input type="text" name="phone" class="form-control" placeholder="Enter Phone Number" >
                        @error('phone')
                        <div class="mt-1 alert-danger">{{ $message}}</div>
                        @enderror
                    </div>
                </div>
                <div class="row mt-4">
                   
                    <div class="col-md-6 mt-4">
                        <label for="id_number">Id Number/ Passport Number</label>
                        <input type="text" name="id_number" class="form-control" placeholder="Id Number/Passport No" >
                        @error('id_number')
                        <div class="mt-1 alert-danger">{{ $message}}</div>
                        @enderror
                    </div>

                    <div class="col-md-6 mt-4">
                        <label for="image_identity">Identity document</label>
                        <input type="file" name="image_identity" class="form-control" placeholder="Upload Id/Passport Image" >
                    </div>

                </div>
                <div class="row mt-4">

                    <div class="col-md-4 mt-4">
                        <label for="address">Address</label>
                        <input type="text" name="address" class="form-control">
                        @error('address')
                        <div class="mt-1 alert-danger">{{ $message}}</div>
                        @enderror
                    </div>

                    <div class="col-md-4 mt-4">
                        <label for="bank_associated">Bank Associated</label>
                        <input type="text" name="bank_associated" class="form-control">
                    </div>

                    <div class="col-md-4 mt-4">
                        <label for="bank_account">Bank Account Number</label>
                        <input type="text" name="bank_account" class="form-control">
                    </div>
                </div>

                <div class="row mt-2">
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-primary" >Save Landlord</button>
                    </div>
                </div>
                
            </form>
        </div>
    </div>
</section>
@endsection()

