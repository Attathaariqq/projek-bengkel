@extends('master')
@section('title', 'List User')
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Kelola User</h1>
    </div>

    <a href="{{ route('auth.add.view') }}" class="btn btn-primary mb-3">Tambah User Baru</a>

    <div class="table-responsive">
        <table class="table table-striped" id="category">
            <thead>
            <tr>
                <th>Nama</th>
                <th>Email</th>
                <th>Aksi</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        @if($user->name != "Admin")
                            <a href="{{ route('auth.edit.view', $user->id) }}" class="btn btn-warning">Edit</a>
                            ||
                            <form action="{{ route("auth.delete", $user->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger">Hapus</button>
                            </form>
                        @endif
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
