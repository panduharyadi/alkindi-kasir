@extends('layout.layouts')

@section('title', 'Halaman Produk')

@section('content')\
    <div class="container mt-4">
        <table id="myTable" class="display mt-3">
            <thead>
                <tr>
                    <th>Kode Barang</th>
                    <th>Satuan</th>
                    <th>Tanggal Masuk</th>
                    <th>Nama Produk / Barang</th>
                    <th>Stock</th>
                    <th>Harga</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Row 1 Data 1</td>
                    <td>Row 1 Data 2</td>
                    <td>Row 1 Data 1</td>
                    <td>Row 1 Data 2</td>
                    <td>Row 1 Data 1</td>
                    <td>Row 1 Data 2</td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection