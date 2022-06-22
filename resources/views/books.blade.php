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
    @foreach ($posts as $post)
        <div class='col'>
          <div class='book'>
                <!-- {{$posts}} -->
                <img src='/image/{{$post->image}}'  class='figure-img img-fluid rounded-lg' alt='' style = "height: 179px;
                width: 122px; border-radius: 10%; padding: 3px; background: #F4B536;">
                <h2>{{$post->title}} </h2>
                <a href="/booksDetail/{{$post->id}}">
                  <!-- <form action="">
                      <input type="submit" value="more">
                  </form> -->
                  <button type="button">More</button>
                </a>
          </div>
            
        </div>
     @endforeach
    </div>
</div>
@endsection