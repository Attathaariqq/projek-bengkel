@extends('master')
@section('title', 'Tambah Order Baru ')
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Tambah Order</h1>
    </div>

    <form action="{{ route('order.add') }}" method="POST" class="card card-body">
        @csrf
        <div class="form-group mb-3`">
            <label>Nama Customer<span class="text-danger">*</span></label>
            <select name="customer_id" class="form-control" required>
                <option value="">--- Pilih Nama Customer ---</option>
                @foreach($customers as $customer)
                    <option value="{{ $customer->id }}">{{ $customer->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group mb-3`">
            <label>Nama Produk <span class="text-danger">*</span></label>
            <select name="product_id" class="form-control" required>
                <option value="">---- Pilih Produk -----</option>
                @foreach($products as $product)
                    <option value="{{ $product->id }}">{{ $product->name }}</option>
                @endforeach
            </select>
        </div>

        <button class="btn btn-primary mt-3 w-100">Tambah</button>
    </form>
@endsection
