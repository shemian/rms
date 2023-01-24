@extends('layouts.master')

@section('content')

@section('styles')

<link rel="stylesheet" href="{{ asset('css/demo1/style.min.css') }}">

@endsection

<div class="page-content">


<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <form action="{{ route ('property-store') }}" method="post" enctype="multipart/form-data">
              <h4 class="card-title">Create New Property</h4>
              <div id="wizard">
                <h2>Basic Details</h2>
                <section>
                  <h4>First Step</h4>
                  <div class="row mt-4">

                    <div class="col-md-4">
                      <label for="property_name">Property Name</label>
                      <input type="text" name="property_name" class="form-control" placeholder="Property name">
                      @error('property_name')
                      <div class="mt-1 alert-danger">{{ $message}}</div>
                      @enderror
                    </div>
                    
                    <div class="col-md-4">
                      <label for="property_rent">Rent </label>
                      <input type="text" name="property_rent" class="form-control" placeholder="Property Rent">
                      @error('property_rent')
                      <div class="mt-1 alert-danger">{{ $message}}</div>
                      @enderror
                    </div>

                    <div class="col-md-4">
                      <label for="property_type">Property Type</label>
                      <select class="form-select" class="property_type" aria-label="Default select example">
                        <option value="Mansion">Mansion</option>
                        <option value="Apartment">Apartment</option>
                        <option value="Bungalow">Bungalow</option>
                      </select>
                      @error('property_type')
                      <div class="mt-1 alert-danger">{{ $message}}</div>
                      @enderror
                      
                    </div>

                  </div>
                  <div class="row mt-4">

                    <div class="col-md-4">
                      <label for="property_landlord">Select Landlord</label>
                      <select class="form-select" class="property_landlord" aria-label="Default select example">
                        <option value="Mansion">Mansion</option>
                        <option value="Apartment">Apartment</option>
                        <option value="Bungalow">Bungalow</option>
                      </select>
                      @error('property_landlord')
                      <div class="mt-1 alert-danger">{{ $message}}</div>
                      @enderror
                      
                    </div>

                    <div class="col-md-4">
                      <label for="property_sqmt">Area</label>
                      <input type="text" name="property_sqmt" class="form-control" placeholder="sqmt">
                      @error('property_sqmt')
                      <div class="mt-1 alert-danger">{{ $message}}</div>
                      @enderror
                    </div>

                    <div class="col-md-4">
                      <label for="property_agency_commission">Agency Commission</label>
                      <input type="text" name="property_agency_commission" class="form-control" placeholder="2%">
                      @error('property_agency_commission')
                      <div class="mt-1 alert-danger">{{ $message}}</div>
                      @enderror
                    </div>

                  </div>
                  <div class="row mt-4">

                    <div class="col-md-6">
                      <label for="property_deposit">Deposit</label>
                      <input type="text" name="property_deposit" class="form-control">
                      @error('property_sqmt')
                      <div class="mt-1 alert-danger">{{ $message}}</div>
                      @enderror
                    </div>

                    <div class="col-md-6">
                      <label for="property_prefix">Property Prefix</label>
                      <input type="text" name="property_prefix" class="form-control" placeholder="FA-KS">
                      @error('property_prefix')
                      <div class="mt-1 alert-danger">{{ $message}}</div>
                      @enderror
                    </div>
                    
                  </div>
                  
                  <div class="row-mt-4">
                    <div class="col-md-12">
                    <label for="property_description">Property Description</label>
                    <textarea class="form-control" class ="property_description"id="exampleFormControlTextarea1" rows="3"></textarea>

                    </div>
                  </div>
                  <br>
                </section>
                <!-- loaction step -->
                  <h2>Location</h2>
                  <section>
                  <div class="row">

                    <div class="col-md-12">
                      <label for="property_location">Search Location</label>
                      <input type="text" name="property_location" class="form-control" placeholder="Type Location">
                      @error('property_location')
                      <div class="mt-1 alert-danger">{{ $message}}</div>
                      @enderror
                    </div>

                    <div class="col-md-12 mt-4">
                      <label for="property_address">Address</label>
                      <input type="text" name="property_address" class="form-control" placeholder="Type Address">
                      @error('property_address')
                      <div class="mt-1 alert-danger">{{ $message}}</div>
                      @enderror
                    </div>

                    <div class="col-md-4 mt-4">
                      <label for="property_city">City</label>
                      <input type="text" name="property_city" class="form-control" placeholder="Type City">
                      @error('property_city')
                      <div class="mt-1 alert-danger">{{ $message}}</div>
                      @enderror
                    </div>
                    <div class="col-md-4 mt-4">
                      <label for="property_state">State</label>
                      <input type="text" name="property_state" class="form-control" placeholder="Type State">
                      @error('property_state')
                      <div class="mt-1 alert-danger">{{ $message}}</div>
                      @enderror
                    </div>
                    <div class="col-md-4 mt-4">
                      <label for="property_postal">Postal Code </label>
                      <input type="text" name="property_postal" class="form-control" placeholder="Property Postal Code ">
                      @error('property_postal')
                      <div class="mt-1 alert-danger">{{ $message}}</div>
                      @enderror
                    </div>

                    
                  </div>
               
                  </section>

                  <!-- feature and Amenities -->

                  <h2>Features&Amenities</h2>
                  <section>
                  <div class="row-mt-4">
                    <div class="col-md-12">
                    <label for="property_notes">Property Notes</label>
                    <textarea class="form-control" class ="property_notes"id="exampleFormControlTextarea1" rows="3"></textarea>

                    </div>
                  </div>

                  <div class="row mt-4">

                  <div class="col-md-3">
                    <label for="property_age">Property Age</label><span> (optional)</span>
                    <select class="form-select" class="property_age" aria-label="Default select example">
                      <option value="">Select One</option>
                      <option value="0-5 Years">0-5 Years</option>
                      <option value="5-10 Years">5-10 Years</option>
                      <option value="10-15 Years">10-15 Years</option>
                      <option value="20+ Years">20+ Years</option>
                    </select>

                    @error('property_age')
                    <div class="mt-1 alert-danger">{{ $message}}</div>
                    @enderror
                  </div>

                  <div class="col-md-3">
                    <label for="property_rooms">Rooms</label><span> (optional)</span>
                    <select class="form-select" class="property_rooms" aria-label="Default select example">
                      <option value="">Select One</option>
                      <option value="1-2 Rooms">1-2 Rooms</option>
                      <option value="3-4 Rooms">3-4 Rooms</option>
                      <option value="5-6 Rooms">4-6 Rooms</option>
                      <option value="7+ Rooms">7+ Rooms</option>
                    </select>

                    @error('property_rooms')
                    <div class="mt-1 alert-danger">{{ $message}}</div>
                    @enderror
                  </div>

                  <div class="col-md-3">
                    <label for="property_bedrooms">BedRooms</label><span> (optional)</span>
                    <select class="form-select" class="property_rooms" aria-label="Default select example">
                      <option value="">Select One</option>
                      <option value="1-2 BedRooms">1-2 BedRooms</option>
                      <option value="3-4 BedRooms">3-4 BedRooms</option>
                      <option value="5-6 BedRooms">4-6 BedRooms</option>
                      <option value="7+ BedRooms">7+ BedRooms</option>
                    </select>

                    @error('property_bedrooms')
                    <div class="mt-1 alert-danger">{{ $message}}</div>
                    @enderror
                  </div>

                  <div class="col-md-3">
                    <label for="property_bathrooms">BathRooms</label><span> (optional)</span>
                    <select class="form-select" class="property_rooms" aria-label="Default select example">
                      <option value="">Select One</option>
                      <option value="1-2 BathRooms">1-2 BathRooms</option>
                      <option value="3-4 BathRooms">3-4 BathRooms</option>
                      <option value="5-6 BathRooms">4-6 BathRooms</option>
                      <option value="7+ BathRooms">7+ BathRooms</option>
                    </select>

                    @error('property_bathrooms')
                    <div class="mt-1 alert-danger">{{ $message}}</div>
                    @enderror
                  </div>

                  <!-- select property features -->
                  <div class="row mt-4">
                    <div class="col-md-3">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="property_airconditioner">
                        <label class="form-check-label" for="property_airconditioner">Air Conditioner</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="property_carparking">
                        <label class="form-check-label" for="property_carparking">Car parking</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="property_laundryroom">
                        <label class="form-check-label" for="property_laundryroom">Laundry Room</label>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="property_heating">
                        <label class="form-check-label" for="property_heating">Heating</label>
                      </div>

                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="property_balcony">
                        <label class="form-check-label" for="property_balcony">Balcony</label>
                      </div>

                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="property_gym">
                        <label class="form-check-label" for="property_gym">Gym</label>
                      </div>

                    </div>

                    <div class="col-md-3">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="property_internet">
                        <label class="form-check-label" for="property_internet">Internet</label>
                      </div>

                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="property_garden">
                        <label class="form-check-label" for="property_garden">Garden</label>
                      </div>

                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="property_alarm">
                        <label class="form-check-label" for="property_alarm">Alarm</label>
                      </div>

                    </div>
                    <div class="col-md-3">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="property_pool">
                        <label class="form-check-label" for="property_pool">swimmming Pool</label>
                      </div>

                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="property_petsallow">
                        <label class="form-check-label" for="property_petsallow">Pets allowed</label>
                      </div>

                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="property_rooftop">
                        <label class="form-check-label" for="property_rooftop">Roof Top</label>
                      </div>

                    </div>

                  </div>


                  </div>
                    
                  </section>

                  <h2>Property Image</h2>
                  <section>
                    
                    <div class="alert alert-success" role="alert">
                     
                      <li>Max File size allowed 5MB</li>
                      <li>Upload Only images of type jpg,gif or png</li>
                     
                    </div>

                    <div class="row mt-t">
                      <div class="col-md-12">
                          <label for="property_images">Property Images</label>
                          <input type="file" name="property_images" class="form-control" placeholder="Upload Property Images" >
                      </div>
                    </div>
                
                  </section>

                
                
                </div>
                </form>
            </div>

        </div>
    </div>
</div>


</div>

@endsection()

@section('scripts')





@endsection

