@extends('master')
@section('title', 'dashboard')
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
    </div>

    <div class="row gap-4">

        <div class="col-lg-3 bg-primary card card-body">
            <h5 class="card-title text-white">Pemasukan</h5>
            <h4 class="text-white fw-bold">Rp.0</h4>
        </div>

        <div class="col-lg-3 bg-success card card-body">
            <h5 class="card-title text-white">Total Order</h5>
            <h4 class="text-white fw-bold">0 Order</h4>
        </div>

    </div>
@endsection
