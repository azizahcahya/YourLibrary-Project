@extends('layouts.header')

@section('styling')
<link rel="stylesheet" href="<?php echo asset('css/style-formPeminjaman.css')?>" type="text/css">
@endsection

@section('Container')
<div class="container p-4">

    <form action="/formpeminjaman/{{$posts->id}}" method="POST" enctype="multipart/form-data">
    {{-- @method('PUT') --}}
    {{ csrf_field() }}  

    <h4><b>FORM</b></h4>
    <div class="form-group">
        <div class="mb-3 row">
            <label for="" class="col-md-4 col-form-label">Title</label>
            <div class="col-sm-7">
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title', $posts->title) }}" readonly>
                @error('title')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
    </div>
    <div class="form-group">
    <div class="mb-3 row">
        <label for="DateBorrowed" class="col-md-4 col-form-label">Date Borrowed</label>
        <div class="col-sm-7">
            <input type="date" class="form-control @error('DateBorrowed') is-invalid @enderror" id="DateBorrowed" name="DateBorrowed" value="{{ old('DateBorrowed') }}">
            @error('DateBorrowed')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
            @enderror
        </div>
    </div>
    </div>
    <div class="form-group">
    <div class="mb-3 row">
        <label for="DueDate" class="col-md-4 col-form-label">Due Date</label>
        <div class="col-sm-7">
            <input type="date" class="form-control @error('DueDate') is-invalid @enderror" id="DueDate" name="DueDate" value="{{ old('DueDate') }}">
            @error('DueDate')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
            @enderror
        </div>
    </div>
    </div>
    <div class="button">
        <button type="submit" class="btn btn-outline-light"><b>SUBMIT</b></button>
    </div>
    </form>
</div>
<script>
    var today = new Date().toISOString().split('T')[0];
    document.getElementsByName("DateBorrowed")[0].setAttribute('min', today);

    var today = new Date().toISOString().split('T')[0];
    document.getElementsByName("DueDate")[0].setAttribute('min', today);
</script>
@endsection
