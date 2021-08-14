@extends('layouts.app')

@section('title','Detail Travel')

@push('addon-style')

@endpush

@section('content')
  <main>
      <section class="section-detail-header" id="detail-header">
      </section>
      <section class="section-detail-content">
          <div class="container">
              <div class="row">
                  <div class="col p-0">
                      <nav>
                          <ol class="breadcrumb">
                              <li class="breadcrumb-item">
                                  <a href="">paket Travel</a>
                              </li>
                              <li class="breadcrumb-item active">
                                  <a href="">Detail</a>
                              </li>
                          </ol>
                      </nav>
                  </div>
              </div>
              <div class="row">
                  <div class="col-lg-8 pl-lg-0">
                      <card class="card card-details">
                          <h1>
                              {{ $items->title }}
                          </h1>
                          <p>
                            {{ $items->location }}
                          </p>
                          @if($items->galleries->count())
                            <div class="gallery mt-3">
                                <div class="xzoom-container">
                                    <img src="{{ Storage::url($items->galleries->first()->image ) }}" alt="" class="xzoom" 
                                    xoriginal="{{ Storage::url($items->galleries->first()->image ) }}">
                                </div>
                                <div class="xzoom-thumbs">
                                    @foreach( $items->galleries as $gallery )
                                        <a href="{{ Storage::url($gallery->image) }}">
                                            <img class="xzoom-gallery" 
                                                 width="120" 
                                                 src="{{ Storage::url($gallery->image) }}" 
                                                 xpreview="{{ Storage::url($gallery->image) }}">
                                        </a>
                                    @endforeach
                                </div>
                            </div>
                          @endif
                          <h2 style="mt-3">Tentang Wisata</h2>
                          <p>
                              {!! $items->about !!}
                          </p> 
                          <div class="row features">
                              <div class="col-md-4">
                                  <img width="25%" src=" {{ url('frontend/images/pyth.png') }}" class="features-image" alt="">
                                  <div class="description">
                                      <h3>Featured Event</h3>
                                      <p>{{ $items->featured_event }}</p>
                                  </div>
                              </div>
                              <div class="col-md-4 border-left">
                                  <img width="25%" src=" {{ url('frontend/images/pyth.png') }}" class="features-image" alt="">
                                  <div class="description">
                                      <h3>Language</h3>
                                      <p>{{ $items->language }}</p>
                                  </div> 
                              </div>
                              <div class="col-md-4 border-left">
                                  <img width="25%" src=" {{ url('frontend/images/pyth.png') }}" class="features-image" alt="">
                                  <div class="description">
                                      <h3>Foods</h3>
                                      <p>{{ $items->foods }}</p>
                                  </div>
                              </div>
                          </div>
                      </card>
                  </div>
                  <div class="col-lg-4">
                      <div class="card card-details card-right">
                          <h1>
                              Members are going
                          </h1>
                          <div class="members">
                              <img src=" {{ url('frontend/images/04.png') }}" class="member-image rounded-circle" alt="">
                              <img src=" {{ url('frontend/images/04.png') }}" class="member-image rounded-circle" alt="">
                              <img src=" {{ url('frontend/images/04.png') }}" class="member-image rounded-circle" alt="">
                              <img src=" {{ url('frontend/images/04.png') }}" class="member-image rounded-circle" alt="">
                              <img src=" {{ url('frontend/images/04.png') }}" class="member-image rounded-circle" alt="">
                          </div>
                          <hr>
                          <h2>
                              Trip Informations
                          </h2>
                          <table>
                              <tr>
                                  <th>Date of Departure</th>
                                  <td>{{ \Carbon\Carbon::create($items->date_of_departure)->format('F n, Y') }}</td>
                              </tr>
                              <tr>
                                  <th>Duration </th>
                                  <td>{{ $items->duration }}</td>
                              </tr>
                              <tr>
                                  <th>Type</th>
                                  <td>{{ $items->type }}</td>
                              </tr>
                              <tr>
                                  <th>Price</th>
                                  <td>${{ $items->price }}/ Person</td>
                              </tr>
                          </table>
                      </div>
                      <div class="join-container text-center">
                          @auth
                            <form action="{{ route('checkout-process', $items->id) }}" method="POST">
                                @csrf
                                <button class="btn btn-block btn-join-now mt-3 py-2" type="submit">
                                    Join Now
                                </button>
                            </form>
                          @endauth
                          @guest
                            <a href="{{ route('login') }}" class="btn btn-block btn-join-now mt-3 py-2">
                                Login or Register
                            </a>
                          @endguest
                      </div>
                  </div>
              </div>
          </div>
      </section>
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