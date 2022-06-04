@extends('layouts.header')
@section('styling')
<link rel="stylesheet" href="<?php echo asset('css/style-yourBooks.css')?>" type="text/css">
@endsection
@section('Container')
<br><br><br><br><br><br>
<div class="container">
    <div class="d-grid gap-3">
        <a href="">
        <div class="p-4 bg-light border">Borrowing From</div></a>
        <a href="">
        <div class="p-4 bg-light border">Book Borrowing Extension</div></a>
    </div>
</div>
<div class="borrowed">
    
</div>
@endsection