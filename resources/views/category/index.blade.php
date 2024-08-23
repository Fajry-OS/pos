@extends('layouts.app')
@section('title', 'Data Kategori')


@section('content')
    <div class="table-responsive">
        <div align="right" class="mb-3">
            <a href="{{ route('category.create') }}" class="btn btn-primary">Tambah</a>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr>
                        <th>{{ $loop->iteration }}</th>
                        <th>{{ $category->category_name }}</th>
                        <th>
                            <a href="{{ route('category.edit', $category->id) }}" class="btn btn-success btn-xs">Edit</a>
                            <form action="{{ route('category.destroy', $category->id) }}" class="d-inline" method="POST">
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
