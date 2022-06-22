@extends('layouts.header')

@section('bootstrap')
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
@endsection
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

@section('styling')
    <link rel="stylesheet" href="/css/books.css">
@endsection

@section('Container')
<br><br><br><br><br><br><br>
<div class="container list">
  
    <div class = "row">
        <div class='col'>
          <div class='book'>
                
                <img src='/image/{{$posts->image}}'  class='figure-img img-fluid rounded-lg' alt='' style = "height: 179px;
                width: 122px; border-radius: 10%; padding: 3px; background: #F4B536;">
                <h2>{{$posts->title}} </h2>
                <h5>Author : {{$posts->pengarang}} </h5>
                <h5>Genre : {{$posts->genre}} </h5>
                <h5>Synopsis : {{$posts->body}} </h5>
                <form action="/formpeminjaman/{{$posts->id}}">
                    <input type="submit" value="Borrow">
                </form>
          </div>
        </div>
    </div>
</div>
@endsection