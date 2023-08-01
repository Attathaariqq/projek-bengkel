@extends('master')
@section('title', 'List Order')
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Kelola Customer</h1>
    </div>

    <a href="{{ route('order.add.view') }}" class="btn btn-primary mb-3">Tambah Customer Baru</a>

    <div class="table-responsive">
        <table class="table table-striped" id="category">
            <thead>
            <tr>
                <th>Nama</th>
                <th>Produk</th>
                <th>Total</th>
                <th>Aksi</th>
            </tr>
            </thead>
            <tbody>
            @foreach($orders as $order)
                <tr>
                    <td>{{ $order->customers->name }}</td>
                    <td>{{ $order->products->name }}</td>
                    <td>Rp.{{ number_format($order->total, 0) }}</td>
                    <td>
                        <form action="{{ route("order.delete", $order->id) }}" method="POST">
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
