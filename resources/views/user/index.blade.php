@extends('layouts.app')
@section('title', 'Data User')


@section('content')
    <div class="table-responsive">
        <div align="right" class="mb-3">
            <a href="{{ route('user.create') }}" class="btn btn-primary">Tambah</a>
        </div>
        <table class="table table-bordered" id="example1">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <th>{{ $loop->iteration }}</th>
                        <th>{{ $user->name }}</th>
                        <th>{{ $user->email }}</th>
                        <th>
                            <a href="{{ route('user.edit', $user->id) }}" class="btn btn-success btn-xs">Edit</a>
                            <form action="{{ route('user.destroy', $user->id) }}" class="d-inline" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-xs btn-danger" type="submit">
                                    Delete
                                </button>
                            </form>

                        </th>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
