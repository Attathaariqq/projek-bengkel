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
                    <th>Harga</th>
                    <th>Jumlah</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
            @foreach($products as $product)
                    <tr>
                        <td>{{ $product->name }}</td>
                        <td>Rp.{{ number_format($product->price, 0) }}</td>
                        <td>{{ $product->qty }}</td>
                        <td>
                            <a href="{{ route('product.edit.view', $product->id) }}" class="btn btn-warning">Edit</a>
                            ||
                            <form action="{{ route("product.delete", $product->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
@section('custom-js')
    <script>
        $("#category").DataTable();
    </script>
@endsection