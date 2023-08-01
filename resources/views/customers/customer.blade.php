@extends('master')
@section('title', 'List Customer')
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Kelola Customer</h1>
    </div>

    <a href="{{ route('customer.add.view') }}" class="btn btn-primary mb-3">Tambah Customer Baru</a>

    <div class="table-responsive">
        <table class="table table-striped" id="category">
            <thead>
            <tr>
                <th>Nama</th>
                <th>Nomor Hp</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
            </thead>
            <tbody>
            @foreach($customers as $customer)
                <tr>
                    <td>{{ $customer->name }}</td>
                    <td>{{ $customer->phone }}</td>
                    <td>{{ $customer->address }}</td>
                    <td>
                        <a href="{{ route('customer.edit.view', $customer->id) }}" class="btn btn-warning">Edit</a>
                        ||
                        <form action="{{ route("customer.delete", $customer->id) }}" method="POST">
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
