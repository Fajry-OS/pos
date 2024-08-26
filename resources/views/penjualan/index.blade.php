@extends('layouts.app')
@section('title', 'Transaksi Penjualan')

@section('content')
    <form action="" method="post">
        <div class="row">
            <div class="col-sm-6">
                <div class="mb-3">
                    <label for="">Kode Transaksi</label>
                    <input type="text" class="form-control" name="kode_transaksi" value="" readonly>
                </div>
                <div class="mb-3">
                    <label for="">Kategori Produk</label>
                    <select class="form-control" name="category_id" id="category_id">
                        <option value="">Pilih Kategori Produk</option>
                        @foreach ($categories as $cat)
                            <option value="{{ $cat->id }}">{{ $cat->category_name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="">Qty Produk</label>
                    <input type="number" class="form-control" placeholder="Qty Produk" id="product_qty">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="mb-3">
                    <label for="">Tanggal Transaksi</label>
                    <input type="text" class="form-control" name="tgl_transaksi" value="<?= date('d/M/Y') ?>" readonly>
                </div>
                <div class="mb-3">
                    <label for="">Nama Produk</label>
                    <select class="form-control" name="" id="product_id">
                        <option value="">Pilih Produk</option>
                    </select>
                </div>
            </div>
        </div>
        <input type="hidden" id="product_price">
        <input type="hidden" id="product_name">
        <div class="table-transaction mt-5">
            <div class="mb-3" align="right">
                <button type="button" class="btn btn-primary tambah-produk">Tambah Produk</button>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nama Produk</th>
                        <th>Harga</th>
                        <th>Qty</th>
                        <th>Sub Total</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
        </div>
    </form>
@endsection
