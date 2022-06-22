@extends('admin.admin')

@section('page_name', 'Review Status')
@section('content')
    <div class="row">
        <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title"></h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form method="post" action="{{action('App\Http\Controllers\PeminjamanController@updatestatus', [$data->id])}}">
                  @csrf
                  <div class="card-body">
                    
                    <div class="form-group">
                      <lable>Approval</lable>
                      <select class="form-control"  name="approve">
                        
                        
                        <option value="1" @if($data->status==1)selected @endif>Approve</option>
                        <option value="2" @if($data->status==2)selected @endif>Reject</option>
                        
                      </select>
                    </div>
                  </div>
                  <!-- /.card-body -->
  
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Update</button>
                  </div>
                </form>
              </div>
              <!-- /.card -->
        </div>
    </div>
@endsection