@extends('master')
@section('title', 'List Produk')
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Kelola Produk</h1>
    </div>

    <a href="{{ route('product.add.view') }}" class="btn btn-primary mb-3">Tambah Produk Baru</a>

    <div class="table-responsive">
        <table class="table table-striped" id="category">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                
            </tbody>
        </table>
    </div>
@endsection
@section('custom-js')
    <script>
        $("#category").DataTable();
    </script>
@endsection