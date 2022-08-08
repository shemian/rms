@extends('layouts.master')

@section('content')

@section('styles')
<link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">

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
            <table class="table table-bordered" id="tenant-table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Id Number</th>
                        <th>Address</th>
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
<script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
  $(function () {

    var table = $('#tenant-table').DataTable({
        processing: true,
        serverSide: true,
       

        ajax: {
            "url" : "/admin/gettenant",
            "type" : "GET",
            error: function(thrownError){
            console.log(thrownError);// to debug error on dataTables 
        }
        },
        columns: [
            {data: 'id', name: 'id'},
            {data: 'name', name: 'name'},
            {data: 'email', name: 'email'},
            {data: 'phone', name: 'phone'},
            {data: 'id_number', name: 'id_number'},
            {data: 'address', name: 'address'},
            {
                data: 'action', 
                name: 'action', 
                orderable: true, 
                searchable: true,
            }, 
        ]

       
    });

  });
</script>

@endsection()

