@extends('master')
@section('title', 'Edit User Baru ')
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit User</h1>
    </div>

    <form action="{{ route('auth.edit', $user->id) }}" method="POST" class="card card-body">
        @csrf
        @method("PATCH")
        <div class="form-group mb-3`">
            <label>Nama <span class="text-danger">*</span></label>
            <input type="text" class="form-control" required placeholder="ex: Servis" name="name" value="{{ $user->name }}">
        </div>
        <div class="form-group mb-3`">
            <label>Email <span class="text-danger">*</span></label>
            <input type="email" class="form-control" required placeholder="ex: Servis" name="email" value="{{ $user->email }}">
        </div>

        <div class="form-group mb-3`">
            <label>Password <span class="text-danger">*</span></label>
            <input type="password" class="form-control" placeholder="ex: 123s" name="password">
        </div>
        <button class="btn btn-primary mt-3 w-100">Edit</button>
    </form>
@endsection
