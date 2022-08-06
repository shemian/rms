@extends('layouts.master')

@section('content')

@section('styles')
<h1>jhfhjh</h1>

@endsection()
<div class="container mt-5">
    <div class="card mt-4">
        <div class="card-header">
            <div class="row">
                <div class="col-md-9">
                    <h6 class="mb-2">View Tenants</h6>
                </div>
                <div class="col-md-3">
                   <a class="mb-2 btn btn-primary" href="{{route('tenant-create')}}" role="button">Add Tenant</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-bordered yajra-datatable">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Id Number</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
    
   
</div>



@endsection()


@section('scripts')

<script >
    alert('this')
</script>
@endsection()

