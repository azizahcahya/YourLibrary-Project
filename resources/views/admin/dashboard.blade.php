@extends('admin.admin')

@section('page_name', 'Dashboard')
@section('content')
    <!-- Small boxes (Stat box) -->
    <h3>Hallo, {{ auth()->user()->name }} ! Anda telah login sebagai {{ auth()->user()->role }}<h3>
      <br>
      
    <div class="row">
     @if (auth()->user()->role === 'administrator')
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-info">
            <div class="inner">
              <h3>{{ $dataUser }}</h3>

              <p>User Registrations</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="admin/users" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
      @endif
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-success">
            <div class="inner">
              <h3>{{ $dataPost }}</h3>

              <p>Books</p>
            </div>
            <div class="icon">
              <i class="ion ion-document-text"></i>
            </div>
            <a href="admin/posts" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
    

@endsection
