@extends('layouts.app')
@section('content')
<style>
    @-webkit-keyframes honeycomb {
  0%,
  20%,
  80%,
  100% {
    opacity: 0;
    -webkit-transform: scale(0);
    transform: scale(0);
  }

  30%,
  70% {
    opacity: 1;
    -webkit-transform: scale(1);
    transform: scale(1);
  }
}

@keyframes honeycomb {
  0%,
  20%,
  80%,
  100% {
    opacity: 0;
    -webkit-transform: scale(0);
    transform: scale(0);
  }

  30%,
  70% {
    opacity: 1;
    -webkit-transform: scale(1);
    transform: scale(1);
  }
}

.honeycomb {
  height: 24px;
  position: relative;
  width: 24px;
}

.honeycomb div {
  -webkit-animation: honeycomb 2.1s infinite backwards;
  animation: honeycomb 2.1s infinite backwards;
  background: black;
  height: 12px;
  margin-top: 6px;
  position: absolute;
  width: 24px;
}

.honeycomb div:after, .honeycomb div:before {
  content: '';
  border-left: 12px solid transparent;
  border-right: 12px solid transparent;
  position: absolute;
  left: 0;
  right: 0;
}

.honeycomb div:after {
  top: -6px;
  border-bottom: 6px solid #1d1818;
}

.honeycomb div:before {
  bottom: -6px;
  border-top: 6px solid #1d1818;
}

.honeycomb div:nth-child(1) {
  -webkit-animation-delay: 0s;
  animation-delay: 0s;
  left: -28px;
  top: 0;
}

.honeycomb div:nth-child(2) {
  -webkit-animation-delay: 0.1s;
  animation-delay: 0.1s;
  left: -14px;
  top: 22px;
}

.honeycomb div:nth-child(3) {
  -webkit-animation-delay: 0.2s;
  animation-delay: 0.2s;
  left: 14px;
  top: 22px;
}

.honeycomb div:nth-child(4) {
  -webkit-animation-delay: 0.3s;
  animation-delay: 0.3s;
  left: 28px;
  top: 0;
}

.honeycomb div:nth-child(5) {
  -webkit-animation-delay: 0.4s;
  animation-delay: 0.4s;
  left: 14px;
  top: -22px;
}

.honeycomb div:nth-child(6) {
  -webkit-animation-delay: 0.5s;
  animation-delay: 0.5s;
  left: -14px;
  top: -22px;
}

.honeycomb div:nth-child(7) {
  -webkit-animation-delay: 0.6s;
  animation-delay: 0.6s;
  left: 0;
  top: 0;
}

</style>
    <div>
        <h1 class="w-50 rounded-pill bg-secondary text-center text-white" style="margin: 10px auto" > Create a new Blog</h1>
    </div>

    <div class="container p-1 ">

            <form action="/blog" method="POST" enctype="multipart/form-data">
                @csrf
                    <div class="w-50 " style="margin: 0 auto" >
                <div class="my-1">
                    <label class="form-label" for="">Titel</label>
                    <input class="form-control" type="text" name="titel" id="">
                </div>

                 <div class="my-1" >
                    <label class="form-label" for="">Description</label>
                  <textarea class="form-control" name="description" id="" cols="30" rows="5"></textarea>
                </div>

                <div class="my-1" >
                    <label class="form-label btn btn-dark "  for="2">Pick an Image</label>
                    <input class="form-control btn btn-dark"   style="display: none" type="file" name="image" id="2">
                </div>
                <div class="my-3 text-center">
                   <input type="submit" value="Create" class="btn btn-info ">
                </div>
            </div>

            </form>
            <div class="honeycomb " style="margin: 30px auto">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
              </div>
    </div>





@endsection
