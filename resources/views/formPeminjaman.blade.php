@extends('layouts.header')

@section('styling')
<link rel="stylesheet" href="<?php echo asset('css/style-formPeminjaman.css')?>" type="text/css">
@endsection

@section('Container')
<div class="container p-4">
    <form action="">
        {{csrf_field()}}
    <h4><b>FORM</b></h4>
    <div class="mb-3 row">
        <label for="staticEmail" class="col-md-4 col-form-label">Email</label>
        <div class="col-sm-7" >
            <input type="text" class="form-control" id="inputPassword">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="staticEmail" class="col-md-4 col-form-label">Name</label>
        <div class="col-sm-7">
            <input type="text" class="form-control" id="inputPassword">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="staticEmail" class="col-md-4 col-form-label">Title</label>
        <div class="col-sm-7">
            <input type="text" class="form-control" id="inputPassword">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="staticEmail" class="col-md-4 col-form-label">Date Borrowed</label>
        <div class="col-sm-7">
            <input type="date" class="form-control" id="inputPassword">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="staticEmail" class="col-md-4 col-form-label">Due Date</label>
        <div class="col-sm-7">
            <input type="date" class="form-control" id="inputPassword" disabled>
        </div>
    </div>
    <div class="button">
        <button type="button" class="btn btn-outline-light"><b>SUBMIT</b></button></div>
    </form>
</div>
@endsection