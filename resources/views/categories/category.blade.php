@extends('master')
@section('title', 'List Kategori')
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Kelola Kategori</h1>
    </div>

    <a href="{{ route('category.add.view') }}" class="btn btn-primary mb-3">Tambah Kategori Baru</a>

    <div class="table-responsive">
        <table class="table table-striped" id="category">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($categories as $category)
                    <tr>
                        <td>{{ $category->name }}</td>
                        <td>
                            <a href="{{ route('category.edit.view', $category->id) }}" class="btn btn-warning">Edit</a>
                            ||
                            <form action="{{ route("category.delete", $category->id) }}" method="POST">
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
