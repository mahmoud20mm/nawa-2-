@extends('layouts.app')
@section('content')
    @if (session()->has('message'))
        <div class="alert alert-danger text-center" role="alert">
            {{ session()->get('message') }}
        </div>
    @endif

    <div class="container text-center pt-3 pb-2">
        <h1 class="display-1">All Posts</h1>
    </div>

    @if (Auth::check())
        <div class="container">
            <a href="/blog/create" class="btn btn-dark text-white m-1">Create a new Post</a>
        </div>
    @endif



    @foreach ($posts as $post)
    <div class="m-4">
        <div class="container  rounded " style="border: 3px black solid">
            <div class="row m-4">
                <div class="col-lg-6 col-sm-12 py-1 ">
                    <img class="img-fluid" src="/pics/{{ $post->img_path }}" alt=""
                        style=" display: block; margin-left: auto; margin-right: auto; width: 100%;">
                </div>

                <div class="col-lg-6 col-sm-12 text-center">
                    <h2 class="fw-bold py-3 ">{{ $post->titel }}</h2>
                    By :<span class="fw-bold">
                        {{ $post->user->name }}
                    </span>
                    <p> {{ $post->description }}</p>
                    <li class="btn btn-outline-secondary"> <a href="/blog/{{ $post->slug }}" class="btn btn-dark">READ
                            MORE</a> </li>
                </div>


            </div>
        </div>
    </div>
    @endforeach
@endsection
