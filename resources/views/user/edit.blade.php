@extends('layouts.app')
@section('title', 'Edit User')

@section('content')
    <form action="{{ route('user.update', $edit->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-3 row">
            <div class="col-sm-2">
                <label for="" class="form-label">Nama Lengkap *</label>
            </div>
            <div class="col-sm-5">
                <input type="text" required class="form-control" name="name" placeholder="Nama Lengkap"
                    value="{{ $edit->name }}">
            </div>
        </div>
        <div class="mb-3 row">
            <div class="col-sm-2">
                <label for="" class="form-label">Email *</label>
            </div>
            <div class="col-sm-5">
                <input type="email" required class="form-control" name="email" placeholder="Email"
                    value="{{ $edit->email }}">
            </div>
        </div>
        <div class="mb-3 row">
            <div class="col-sm-2">
                <label for="" class="form-label">Password *</label>
            </div>
            <div class="col-sm-5">
                <input type="password" class="form-control" name="password" placeholder="Password">
            </div>
        </div>
        <div class="mb-3 row">
            <div class="col-sm-10">
                <button class="btn btn-primary" type="submit">Simpan</button>
            </div>
        </div>
    </form>
@endsection
