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
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif
      <!-- End Content Row -->


      <div class="card shadow">
        <div class="card-body">
          <form action="{{ route('transaction.update', $item->id) }}" method="post">
            <!-- @method('PUT') -->
            {{ method_field('PUT') }}
            @csrf
            <div class="form-group">
              <label for="transaction_tatus">Satus</label>
              <select require class="form-control" name="transaction_tatus"> 
                <option value="{{ $item->transaction_tatus }}">current status({{ $item->transaction_tatus }})</option>
                <option value="IN_CART">In Chart</option>
                <option value="PENDING">Pending</option>
                <option value="SUCCESS">Success</option>
                <option value="Cancel">Cancel</option>
                <option value="FAILED">Failed</option>
              </select>
            </div>
            <button type="submit" class="btn btn-primary btn-block">
              Update
            </button>
          </form>
        </div>
      </div>
  </div>
@endsection