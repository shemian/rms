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
                    <h6 class="mb-2">View Landlord</h6>
                </div>
                <div class="col-md-3">
                   <a class="mb-2 btn btn-primary" href="{{route('landlord-create')}}" role="button">Add Landlord</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped" id="landlord-table">
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

    var table = $('#landlord-table').DataTable({
        processing: true,
        serverSide: true,
        // scrollX: true,
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ], //not working
        
        ajax: {
            "url" : "/admin/getlandlord",
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

