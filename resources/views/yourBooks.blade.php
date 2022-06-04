@extends('layouts.header')
@section('styling')
<link rel="stylesheet" href="<?php echo asset('css/style-yourBooks.css')?>" type="text/css">
@endsection
@section('Container')
<div class="container">
    <div class="d-grid gap-3">
        <a href="">
        <div class="p-4 border">Borrowing From</div></a>
        <a href="">
        <div class="p-4 border">Book Borrowing Extension</div></a>
    </div>
</div>
<div class="borrowed">
    <div class="container mt-5">
        <h3>Books on Borrowed</h3>
    </div>
</div>
@endsection