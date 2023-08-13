@extends('layouts.app')
@section('content')

    <div>
        <h1 class="w-50 rounded-pill bg-secondary text-center text-white" style="margin: 10px auto" > Ubdate Post</h1>
    </div>

    <div class="container p-1 ">

            <form action="/blog/{{ $post->slug }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                    <div class="w-50 " style="margin: 0 auto" >
                <div class="my-1">
                    <label class="form-label" for="">New Titel</label>
                    <input class="form-control" value="{{ $post->titel }}" type="text" name="titel" id="">
                </div>

                 <div class="my-1" >
                    <label class="form-label" for="">New Description</label>
                  <textarea class="form-control"  name="description" id="" cols="30" rows="5">{{ $post->description}}</textarea>
                </div>
  <div class="my-1" >
                    <label class="form-label btn btn-dark "  for="2">Pick an Image</label>
                    <input class="form-control btn btn-dark"   style="display: none" type="file" name="image" id="2">
                </div>
                <div class="my-3 text-center">
                   <input type="submit" value="Update" class="btn btn-info ">
                </div>

            </div>

            </form>

    </div>





@endsection
