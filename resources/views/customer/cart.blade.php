@extends('layouts.app')

@section('navbar')
@php
    $page = "Carts";
@endphp
    @include('layouts.nav.customer')
@endsection

@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-9 col-sm-12 mb-2">
            @foreach($carts as $cart)

            <!-- Modal edit-->
            <div class="modal fade" id="edit-{{ $cart->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Edit Produk</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form method="POST" action="{{ route('customer.cart.update' , $cart->id ) }}">
                        @method('put')
                        @csrf
                    <div class="modal-body">
                        <div class="text-center">
                            <img src="{{ asset('/img/'.$cart->product->thumbnail) }}" alt="{{ $cart->product->thumbnail }}" width="290px;">
                        </div>
                        <h5> <strong>{{ $cart->product->name }}</strong></h5>
                        Description :{{ $cart->product->desc }}<br>
                        Harga : {{ $cart->product->price }}
                        Jumlah : <input type="number" min="1" name="quantity" value="{{ $cart->quantity }}">
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
                  </div>
                </div>
              </div>

          <div class="card mb-3 p-3" style="max-width: 50rem;">
            <div class="row no-gutters">
              <div class="col-md-4">
                <img src="{{ asset('/img/'. $cart->product->thumbnail) }}" class="card-img" alt="..." width="100px;">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title"><strong>{{ $cart->product->name }}</strong>
                  </h5>
                  <p class="card-text">{{  $cart->product->price }}</p>
                  <p class="card-text"><small class="text-muted">jumlah Produk : {{ $cart->quantity }}</small></p>
                  <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#edit-{{ $cart->id }}">
                   Edit
                  </button>
                  {{-- <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete-{{ $cart->id }}">
                    Delete
                   </button>                   --}}
                   <a href="{{route('customer.cart.delete' , $cart->id)}}" class="btn btn-danger" role="button">Delete</a>

                </div>
              </div>
            </div>
          </div>
        @endforeach
    </div>  

    <div class="col-md-3 col-sm-12">
     <div class="card border-0 shadow-lg">
            <div class="card-header" style="background-color: white">Transaksi</div>
            <div class="card-body">
                @foreach ($carts as $c)
                <div class="row ">
                    <div class="col-8">
                        <p class="card-text"> {{ $c->product->name }} x {{ $c->quantity }} </p>
                    </div>
                    <div class="col-4">
                        <p class="card-text">{{ $c->product->price }}</p>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="card-footer" style="background-color: white">
                <div class="row">
                    <div class="col-7">
                        Total Harga
                    </div>
                    <div class="col-5">
                        <p style="color: green">{{ $total_harga }}</p>
                    </div>
                    <Button class="btn btn-success mt-2">Bayar Sekarang</Button>
                </div>
            </div>
    </div>  

@endsection
