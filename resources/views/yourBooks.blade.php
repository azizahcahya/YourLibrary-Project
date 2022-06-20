@extends('layouts.header')
@section('styling')
<link rel="stylesheet" href="<?php echo asset('css/style-yourBooks.css')?>" type="text/css">
@endsection
@section('Container')
<div class="container">
    <div class="d-grid gap-3">
        <a href="/extenddate">
        <div class="p-4 border">Book Borrowing Extension</div></a>
    </div>
</div>
<div class="borrowed">
    <div class="container mt-5">
        <h3>Books on Borrowed</h3>
    </div>
    <div class="p-4 mx-5">
        <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action" id="list-item">{{$posts->title}}</a>
          </div>
    </div>
</div>
@endsection