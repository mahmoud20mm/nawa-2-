@extends('layouts.app')
@section('content')


@if (session()->has('message') )

<div class="alert alert-primary text-center" role="alert">
 {{ session()->get('message')  }}
  </div>
@endif


 <div class="m-2 " >
<div class="container rounded " style="border: 3px black solid">

    <div class="row m-2">
        <div class="col-lg-6 col-sm-12 py-1 ">
            <img class="img-fluid" src="/pics/{{ $post->img_path }}" alt=""
                style=" display: block; margin-left: auto; margin-right: auto; width: 100%;">
        </div>

        <div class="col-lg-6 col-sm-12 text-center">
            <h2 class="fw-bold py-3 ">{{ $post->titel }}</h2>
             By :<span class="fw-bold">
                {{ $post->user->name; }}
            </span>
            <p> {{ $post->description }}</p>
            @if ((Auth::user())&& Auth::user()->id==$post->user_id)

            <li  class="btn btn-outline-secondary" > <a href="/blog/{{ $post->slug }}/edit" class="btn btn-dark">Edit Post</a> </li>
        <form action="/blog/{{ $post->slug }}" method="POST" style="display: inline">
            @csrf
            @method('delete')
            <li  class="btn btn-outline-secondary" > <button  class="btn btn-dark">Delete Post</button> </li>
           </form> @endif
        </div>

</div>
    </div>
</div>







@endsection
