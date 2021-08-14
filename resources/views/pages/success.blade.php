@extends('layouts.success')

@section('title','Success')

@push('addon-style')

@endpush

@section('content')
  <main>
        <div class="section-success ">
            <div class="container">
                <div class="row d-flex align-items-center">
                    <div class="col text-center">
                        <img src="{{ url('frontend/images/mail.png') }}" alt="">
                        <h1 class="successAlert">Yay! Success</h1>
                        <p class="successSugest">We've sent you email for trip instruction <br> please read it as well</p>
                        <a href=" {{ route('home') }}" class="btn btn-back-home px-5 mt-4">Home Page</a>
                    </div>
                </div> 
            </div>
        </div>
    </main>
@endsection


@push('prepend-style')
  <link rel="stylesheet" href="{{ 'frontend/liblary/xzoom/xzoom.css' }}"> 
@endpush

@push('addon-script')
  <script src="{{ url('frontend/liblary/xzoom/xzoom.min.js') }}"></script>
  <script>
      $(document).ready(function(){
          $(".xzoom, .xzoom-gallery").xzoom({
              zoomwidth: 500,
              title: false,
              tint: '#333',
              Xoffset: 15 
          });
      });
  </script>
@endpush