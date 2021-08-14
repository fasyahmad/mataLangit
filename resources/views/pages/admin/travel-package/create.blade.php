@extends('layouts.admin')

@section('content')
  <div class="container-fluid">

      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
          <h1 class="h3 mb-0 text-gray-800">Tambah Paket Travel</h1>       
          </a>
      </div>

      <!-- Content Row -->
      @if ($errors->any())
        <div class="alert alert-danger">
          <ul>
            @forearch ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforearch
          </ul>
        </div>
      @endif
      <!-- End Content Row -->


      <div class="card shadow">
        <div class="card-body">
          <form action="{{ route('travel-package.store') }}" method="post">
            @csrf
            <div class="form-group">
              <label for="title">Title</label>
              <input type="text" class="form-control" name="title" placehoder="Title" value="{{ old('title') }}"> 
            </div>
            <div class="form-group">
              <label for="lcoation">Location</label>
              <input type="text" class="form-control" name="location" placehoder="Location" value="{{ old('lcoation') }}"> 
            </div>
            <div class="form-group">
              <label for="about">About</label>
              <textarea name="about" class="d-block form-control w-100" rows="10">{{ old('about') }}</textarea>
            </div>
            <div class="form-group">
              <label for="featured_event">Featured Event</label>
              <input type="text" class="form-control" name="featured_event" placehoder="Featured Event" value="{{ old('featured_event') }}"> 
            </div>
            <div class="form-group">
              <label for="language">Language</label>
              <input type="text" class="form-control" name="language" placehoder="Language" value="{{ old('language') }}"> 
            </div>
            <div class="form-group">
              <label for="foods">Foods</label>
              <input type="text" class="form-control" name="foods" placehoder="Foods" value="{{ old('foods') }}"> 
            </div>
            <div class="form-group">
              <label for="depature_date">Departure Date</label>
              <input type="date" class="form-control" name="depature_date" placehoder="Depature_date Date" value="{{ old('depature_date') }}"> 
            </div>
            <div class="form-group">
              <label for="duration">Duration</label>
              <input type="text" class="form-control" name="duration" placehoder="Duration" value="{{ old('duration') }}"> 
            </div>
            <div class="form-group">
              <label for="type">Type</label>
              <input type="text" class="form-control" name="type" placehoder="Type" value="{{ old('type') }}"> 
            </div>
            <div class="form-group">
              <label for="price">Price</label>
              <input type="number" class="form-control" name="price" placehoder="Price" value="{{ old('price') }}"> 
            </div>
            <button type="submit" class="btn btn-primary btn-block">
              Create
            </button>
          </form>
        </div>
      </div>
  </div>
@endsection