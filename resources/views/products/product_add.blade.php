@extends('master')
@section('title', 'Tambah Produk')
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">tambah Produk</h1>
    </div>

    <form action="{{ route('product.add') }}" method="POST" class="card card-body">
        @csrf
        <div class="form-group mb-3`">
            <label>Kategori Produk <span class="text-danger">*</span></label>
            <select class="form-select" aria-label="Default select example">
                <option selected>Open this select menu</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
        </div>
        <div class="form-group mb-3`">
            <label>Nama Produk <span class="text-danger">*</span></label>
            <input type="text" class="form-control" required placeholder="ex: Servis" name="name" value="">
        </div>
        <button class="btn btn-primary mt-3 w-100">Edit</button>
    </form>
@endsection