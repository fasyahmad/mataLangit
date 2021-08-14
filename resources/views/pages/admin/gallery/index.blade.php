@extends('layouts.admin')

@section('content')
  <div class="container-fluid">

      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
          <h1 class="h3 mb-0 text-gray-800">Gallery Travel</h1>
          <a href="{{ route('gallery.create') }}" class="btn btn-sm btn-primary shadow-sm">
            <i class="fas fa-plus fa-sm text-white-50">
              Tambah Gallery
            </i>          
          </a>
      </div>

      <!-- Content Row -->
        <div class="row">
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-boldered" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Travel</th>
                    <th>Image</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @forelse ($items as $item)
                    <tr>
                      <td>{{ $item->id }}</td>
                      <td>{{ $item->travel_package->title }}</td>
                      <td>
                        <img src="{{ Storage::url($item->image) }}" alt="" style="width:150px" class="img-thumbnail" srcset="">
                      </td>
                      <td>
                        <a href="{{ route('gallery.edit', $item->id) }}" class="btn btn-info">
                          <i class="fa fa-pencil-alt"></i>
                        </a>
                        <form action="{{ route('gallery.destroy', 1) }}" method="POST" class="d-inline" onSubmit="return confirm('Are You Sure To Delete This Item ?')">
                          @csrf
                          @method('delete')
                          <buttom class="btn btn-danger">
                            <i class="fa fa-trash"></i>
                          </buttom>
                        </form>
                      </td>
                    </tr>
                  @empty
                    <tr>
                      <td colspan="7" class="text-center">
                        data kosong
                      </td>
                    </tr>
                  @endforelse
                </tbody>
              </table>
            </div>
          </div>
        </div>
      <!-- End Content Row -->
      

  </div>
@endsection