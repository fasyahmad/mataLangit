@extends('layouts.admin')

@section('content')
  <div class="container-fluid">

      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
          <h1 class="h3 mb-0 text-gray-800">Update Gallery</h1>       
          </a>
      </div>

      <!-- Content Row -->
      @if ($errors->any())
        <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif
      <!-- End Content Row -->


      <div class="card shadow">
        <div class="card-body">
          <form action="{{ route('gallery.update', $item->id) }}" method="post" enctype="multipart/form-data">
            <!-- @method('PUT') -->
            {{ method_field('PUT') }}
            @csrf
            <div class="form-group">
              <label for="travel_packages_id">Paket Travel</label>
              <select name="travel_packages_id" id="">
                <option value="{{ $item->travel_packages_id }}">Pilih Paket Travel</option>
                @foreach( $travel_packages as $travel_package)
                <option value="{{ $travel_package->id }}">{{ $travel_package->title }}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label for="image">Image</label>
              <input type="file" class="form-control" name="image" placehoder="Image" id="image">  
            </div>
            <button type="submit" class="btn btn-primary btn-block">
              Update
            </button>
          </form>
        </div>
      </div>
  </div>
@endsection