@extends('master')
@section('title', 'Edit Customer')
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">edit Customer</h1>
    </div>

    <form action="{{ route('customer.edit', $customer->id) }}" method="POST" class="card card-body">
        @csrf
        @method("PATCH")
        <div class="form-group mb-3`">
            <label>Nama <span class="text-danger">*</span></label>
            <input type="text" class="form-control" required placeholder="ex: Servis" name="name" value="{{ $customer->name }}">
        </div>
        <div class="form-group mb-3`">
            <label>Alamat <span class="text-danger">*</span></label>
            <input type="text" class="form-control" required placeholder="ex: Servis" name="address" value="{{ $customer->address }}">
        </div>

        <div class="form-group mb-3`">
            <label>No Hp <span class="text-danger">*</span></label>
            <input type="text" class="form-control" required placeholder="ex: 123s" name="phone" value="{{ $customer->phone }}">
        </div>
        <button class="btn btn-primary mt-3 w-100">Tambah</button>
    </form>
@endsection
