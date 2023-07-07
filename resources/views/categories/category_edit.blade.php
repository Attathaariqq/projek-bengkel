@extends('master')
@section('title', 'Edit Kategori')
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Kategori</h1>
    </div>

    <form action="{{ route('category.edit', $category->id) }}" method="POST" class="card card-body">
        @csrf
        @method('PATCH')
        <div class="form-group mb-3`">
            <label>Nama Kategori <span class="text-danger">*</span></label>
            <input type="text" class="form-control" required placeholder="ex: Servis" name="name" value="{{ $category->name }}">
        </div>
        <button class="btn btn-primary mt-3 w-100">Edit</button>
    </form>
@endsection
