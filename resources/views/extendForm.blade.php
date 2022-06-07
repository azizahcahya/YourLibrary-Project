@extends('layouts.header')

@section('styling')
<link rel="stylesheet" href="<?php echo asset('css/style-extendForm.css')?>" type="text/css">
@endsection

@section('Container')
<div class="container p-4">
    <h4><b>EXTEND</b></h4>
    <form action="">
        {{csrf_field()}}
    <div class="mb-3 row">
        <label for="staticEmail" class="col-md-4 col-form-label">Email</label>
        <div class="col-sm-7" >
            <input class="form-control" id="disabledInput" type="text" value="email@email" placeholder="" disabled>
        </div>
    </div>
    <div class="mb-3 row">
        <label for="staticEmail" class="col-md-4 col-form-label">Name</label>
        <div class="col-sm-7">
            <input class="form-control" id="disabledInput" type="text" value="nama" placeholder="" disabled>
        </div>
    </div>
    <div class="mb-3 row">
        <label for="staticEmail" class="col-md-4 col-form-label">Title</label>
        <div class="col-sm-7">
            <input class="form-control" id="disabledInput" type="text" value="judulbuku" placeholder="" disabled>
        </div>
    </div>
    <div class="mb-3 row">
        <label for="staticEmail" class="col-md-4 col-form-label">Date Borrowed</label>
        <div class="col-sm-7">
            <input type="date" class="form-control" id="inputPassword" disabled>
        </div>
    </div>
    <div class="mb-3 row">
        <label for="staticEmail" class="col-md-4 col-form-label">Due Date</label>
        <div class="col-sm-7">
            <input type="date" class="form-control" id="inputPassword">
        </div>
    </div>
    <div class="button">
        <button type="button" class="btn btn-outline-light"><b>SUBMIT</b></button></div>
    </div>
    </form>
</div>
@endsection