@extends('admin.admin')

@section('page_name', 'Manage Request')
@section('content')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" ></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css"  />
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
    <div class="row mb-3">
        {{-- @if(session()->has('success'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        @endif --}}
        
    </div>
    <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-body">
                <table id="example1" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Tanggal Pinjam</th>
                    <th>Tanggal Dikembalikan</th>
                    <th>Status</th>
                    <th>Action</th>
                    
                  </tr>
                  </thead>
                @foreach ($data as $index => $dt)
                  
                    <tbody>
                      
                    <tr>
                        <td>{{ $index+1 }}</td>
                        <td>{{ $dt->title }}</td>
                        <td>{{ $dt->DateBorrowed }}</td>
                        <td>{{ $dt->DueDate }}</td>
                        <td>
        @if($dt->status == 0)
        <span class="label label-primary">Pending</span>
        @elseif($dt->status == 1)
        <span class="label label-success">Approved</span>
        @elseif($dt->status == 2)
        <span class="label label-danger">Rejected</span>
        
       @endif
        </td>
                        <td>
                            <a href="{{action('App\Http\Controllers\PeminjamanController@editstatus', [$dt->id])}}" class="btn btn-warning">Review</a>
                        </td>   
                        
                    
                    </tr>
                  
                    </tbody>
                    
                
                @endforeach
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
<!-- <script>
  $(function() {
    $('.toggle-class').change(function() {
        var isApprove = $(this).prop('checked') == true ? 1 : 0; 
        var data_id = $(this).data('id'); 
         
        $.ajax({
            type: "GET",
            dataType: "json",
            url: '/admin/booking',
            data: {'isApprove': isApprove, 'id': data_id},
            success: function(data){
              console.log(data.success)
            }
        });
    })
  })
</script> -->

@endsection
