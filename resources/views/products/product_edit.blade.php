@extends('master')
@section('title', 'List Produk')
@section('content')
    <p>Kita di halaman list produk</p>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Produk</h1>
    </div>

    <form action="{{ route('product.edit', $product->id) }}" method="POST" class="card card-body">
        @csrf
        @method('PATCH')
        <div class="form-group mb-3`">
            <label>Nama Produk <span class="text-danger">*</span></label>
            <input type="text" class="form-control" required placeholder="ex: Servis" name="name" value="{{ $product->name }}">
            <label>Harga <span class="text-danger">*</span></label>
            <input type="text" class="form-control" required placeholder="ex: 10000" name="price" value="{{ $product->price }}">
            <label>Jumlah <span class="text-danger">*</span></label>
            <input type="text" class="form-control" required placeholder="ex: 5" name="qty" value="{{ $product->qty }}">
        </div>
        <button class="btn btn-primary mt-3 w-100">Edit</button>
    </form>
@endsection