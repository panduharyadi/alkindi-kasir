@extends('layout.layouts')

@section('title', 'Tambah Produk')

@section('content')
    <div class="card container mt-4">
        <div class="card-header">
            Tambah Produk
        </div>
        <div class="card-body">
            <form action="{{ route('store') }}" method="post">
                @csrf
                <div class="form-group">             
                    <input type="text" class="form-control" id="nama_barang" name="nama_barang" placeholder="Nama Produk">
                </div>
                <div class="input-group mb-3">
                    <select class="custom-select" id="satuan" name="satuan">
                      <option selected>Pilih Satuan</option>
                      <option value="1">One</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                    </select>
                </div>
                <div class="form-group">
                    <input type="date" class="form-control" id="tgl_masuk" name="tgl_masuk" placeholder="tanggal masuk">
                </div>
                <div class="form-group">
                    <input type="number" class="form-control" id="stok_dus" name="stok_dus" placeholder="stock dus">
                </div>
                <div class="form-group">
                    <input type="number" class="form-control" id="stok_strip" name="stok_strip" placeholder="stock strip">
                </div>
                <div class="form-group">
                    <input type="number" class="form-control" id="total_isi" name="total_isi" placeholder="total isi">
                </div>
                <div class="form-group">
                    <input type="number" class="form-control" id="total_stock" name="total_stok" placeholder="total stock">
                </div>
                <div class="form-group">
                    <input type="date" class="form-control" id="tgl_kadaluarsa" name="tgl_kadaluarsa" placeholder="tanggal kadaluarsa">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="harga" name="harga" placeholder="harga">
                </div>
                
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection