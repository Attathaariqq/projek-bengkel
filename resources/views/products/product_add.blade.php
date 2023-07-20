`@extends('master')
@section('title', 'Tambah Produk')
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">tambah Produk</h1>
    </div>

    <form action="{{ route('product.add') }}" method="POST" class="card card-body">
        @csrf
        <div class="form-group mb-3`">
            <label>Kategori Produk <span class="text-danger">*</span></label>
            <select class="form-select" name="categories_id" required>
                <option selected>Pilih Kategori Produk</option>
                @foreach($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group mb-3`">
            <label>Nama Produk <span class="text-danger">*</span></label>
            <input type="text" class="form-control" required placeholder="ex: Servis" name="name" value="">
            <label>Harga <span class="text-danger">*</span></label>
            <input type="text" class="form-control" required placeholder="ex: 10000" name="price" value="">
            <label>Jumlah <span class="text-danger">*</span></label>
            <input type="text" class="form-control" required placeholder="ex: 5" name="qty" value="">
        </div>
        <button class="btn btn-primary mt-3 w-100">Edit</button>
    </form>
@endsection`