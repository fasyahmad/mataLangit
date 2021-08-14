@extends('layouts.checkout')

@section('title','Checkout')

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
                            <li class="breadcrumb-item active">
                                <a href="">Checkout</a>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 pl-lg-0">
                    <card class="card card-details">
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
                        <h1>
                            Who is going ?
                        </h1>
                        <p>
                            Trip to, {{ $item->travel_package->title }}, {{ $item->travel_package->location }}
                        </p>
                        <div class="attende">
                            <table class="table teble-responsive-sm text-center">
                                <thead>
                                    <tr>
                                        <th>
                                            Pictuce
                                        </th>
                                        <th>
                                            Name
                                        </th>
                                        <th>
                                            Nationality
                                        </th>
                                        <th>
                                            VISA
                                        </th>
                                        <th>
                                            Passport
                                        </th>
                                        <th>
                                            
                                        </th>
                                    </tr>
                                <thead>
                                <tbody>
                                    @forelse ($item->details ad $detail)
                                    <tr>
                                        <td>
                                            <img src="https://ui-avatars.com/api/?name={{ $detail->username }}" height="60" width="60" class="rounded-circle" alt="">
                                        </td>
                                        <td class="align-middle">
                                            {{ $detail->username }}
                                        </td>
                                        <td class="align-middle">
                                            {{ $detail->nationality }}
                                        </td>
                                        <td class="align-middle">
                                            {{ $detail->is_visa ? '30 Days' : 'N/A' }}
                                        </td>
                                        <td class="align-middle">
                                             {{ \Carbon\Carbon::createFromDate($detail->doe_date) > \Carbon\Carbon::now() ? 'Active' : 'Inactive' }}
                                        </td>
                                        <td class="align-middle">
                                            <a href="{{ route('checkout-remove', $detail->id) }}">
                                                <img src="{{ url('frontend/images/deleteIc.png') }}" height="20" width="20" alt="">
                                            </a>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan-"5" class="text-center">
                                            No Visitor
                                        </td>
                                    </tr>
                                    @endforelse
                                
                                </tbody>
                            </table>
                        </div>
                        <div class="member mt-3">
                            <h2>Add Member</h2>
                            <form  action="{{ route('pages.success', $items->id) }}" class="form-inline" method="post">
                                @csrf
                                {{ method_field('PUT') }}
                                <label for="imputUsername" class="sr-only sr-only-focusable">Name</label>
                                <input type="text" class="form-control mb-2 mr-sm-2" id="imputUsername" placeholder="username">
                                
                                <label for="inputVisa" class="mt-3 sr-only">Visa</label>
                                <select name="inputVisa" id="inputVisa" class="cutom-select form-control mb-2 mr-sm-2">
                                    <option value="VISA" selected>VISA</option>
                                    <option value="30 Days">30 Days</option>
                                    <option value="N/A">N/A</option>
                                </select>
                                <label for="doePassword" class="mt-3 sr-only">DOE Password</label>
                                <!-- <div class="input-group mb-2 mr-sm-2"> -->
                                    <input type="text" name="" id="doePassword" placeholder="DOE Password" class="form-control datepicker">
                                <!-- </div> -->

                                <button type="submit" class=" mt-3 btn btn-primary btn-add-now mb-2 px-4">
                                    Add Now
                                </button>
                            </form>
                        </div>

                        <h3>
                            Note
                        </h3>
                        <p>
                            you are only able to invite member than has registered in Nomands.
                        </p>
                    </card>
                </div>
                <div class="col-lg-4">
                    <div class="card card-details card-right">
                        
                        <h2>
                            Trip Informations
                        </h2>
                        <table>
                            <tr>
                                <th>Date of Departure</th>
                                <td>22 Aug, 2019</td>
                            </tr>
                            <tr>
                                <th>Duration </th>
                                <td>4D 3N</td>
                            </tr>
                            <tr>
                                <th>Type</th>
                                <td>Open Trip</td>
                            </tr>
                            <tr>
                                <th>Price</th>
                                <td>$80,00 / Person</td>
                            </tr>
                        </table>
                        <hr>

                        <h2>Payment Instructions</h2>
                        <p>
                            Please complete your payment before to continue the wonderful trip
                        </p>
                        <div class="bank mt-3" >
                            <div class="bank-account pb-3" style="display: flex;">
                                <div class="mr-3">
                                    <img width="50" src="{{ url('frontend/images/ic_bank.png') }}"> 
                                </div>
                                <div class="description">
                                    <h3>PT Nomads ID</h3>
                                    <p>
                                        0881 8829 8800
                                        <br>
                                        Bank Central Asian
                                    </p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="bank-account pb-3" style="display: flex;">
                                <img width="50" src="{{ url('frontend/images/ic_bank.png') }}"> 
                                <div class="description">
                                    <h3>PT Nomads ID</h3>
                                    <p>
                                        0881 8829 8800
                                        <br>
                                        Bank Central Asian
                                    </p>
    
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="join-container text-center">
                        <a  href="{{ route('checkout_success', $item->id) }}" class="btn btn-block btn-join-now mt-3 py-2 mb-3">
                            I have made payment
                        </a>
                        <a class="" href="{{ route('detail', $item->tranvel_package->slug) }}">cancel booking</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
  </main>
@endsection

@push('prepend-style')
  <link rel="stylesheet" href="frontend/liblary/xzoom/xzoom.css"> 
  <link rel="stylesheet" href="{{ 'frontend/liblary/gijgo/css/gijgo.min.css' }}"> 
@endpush

@push('addon-script')
    <script src="frontend/liblary/xzoom/xzoom.min.js"></script>
    <script src="frontend/liblary/gijgo/js/gijgo.min.js"></script>
    <script>
        $(document).ready(function(){
            $(".xzoom, .xzoom-gallery").xzoom({
                zoomwidth: 500,
                title: false,
                tint: '#333',
                Xoffset: 15 
            });
            $('.datepicker').datepicker({
                uilibrary: 'bootstrap4',
                icons:{
                    // rightIcon: '<img width="15px" src="frontend/images/date.png" alt="">'
                }
            }); 
        });
    </script>
@endpush