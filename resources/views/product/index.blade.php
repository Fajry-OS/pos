@extends('layouts.app')
@section('title', 'Data Produk')


@section('content')
    <div class="table-responsive">
        <div align="right" class="mb-3">
            <a href="{{ route('product.create') }}" class="btn btn-primary">Tambah</a>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Kategori</th>
                    <th>Nama Produk</th>
                    <th>QTY</th>
                    <th>Harga</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <th>{{ $loop->iteration }}</th>
                        <th>{{ $product->category->category_name }}</th>
                        <th>{{ $product->product_name }}</th>
                        <th>{{ $product->product_qty }}</th>
                        <th>{{ $product->product_price }}</th>
                        <th>
                            <a href="{{ route('product.edit', $product->id) }}" class="btn btn-success btn-xs">Edit</a>
                            <form action="{{ route('product.destroy', $product->id) }}" class="d-inline" method="POST">
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
