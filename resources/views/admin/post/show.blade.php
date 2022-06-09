@extends('admin.admin')

@section('page_name', 'Manage Books')
@section('content')
  <div class="row mt-3">
    <script src="https://kit.fontawesome.com/5444c5652c.js" crossorigin="anonymous"></script>
    <div class="col-lg-8 ml-3">
      <h1 class="font-weight-bold mb-3">{{ $post->title }}</h1>
      <i class="fa fa-user"></i> &nbsp; {{ $post->pengarang }}
      <br>
      <i class="fa fa-caret-square-o-right" aria-hidden="true"></i> &nbsp; {{ $post->genre }}
      <br>
      <br>
      <a href="/admin/posts" class="btn btn-success"><i class="fa fa-arrow-left"></i> Back to all</a>
      <a href="/admin/posts/{{ $post->slug }}/edit" class="btn btn-warning">Edit</a>
      <form action="/admin/posts/{{ $post->slug }}" method="POST" class="d-inline">
        @method('DELETE')
        @csrf
        <button class="btn btn-danger" onclick="return confirm('Are you sure ?');">Delete</button>
      </form>

     
        <img src="/image/{{ $post->image }}" alt="" class="img-fluid mt-3" style=" display: block; max-width:730px; max-height:400px; width: auto; height: auto;">
     

      <h1 class="font-weight-bold mb-3">Preview</h1>
      <article class="my-3 fs-5 text-justify">
        {!! $post->body !!}
      </article>
    
    </div>
  </div>
    

@endsection
