<?php

namespace App\Http\Controllers;

use App\Models\ProdukModel;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Pages.Produk.Produk');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Pages.Produk.AddProduk');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_barang'    => 'required|string',
            'satuan'         => 'required|string',
            'tgl_masuk'      => 'required',
            'stok_dus'       => 'required',
            'stok_strip'     => 'required',
            'total_isi'      => 'required',
            'total_stock'    => 'required',
            'tgl_kadaluarsa' => 'required',
            'keterangan'     => 'required',
            'info'           => 'required',     
            'harga'          => 'required'
        ]);
    
        // Buat pengguna baru dengan data dari form
        // $produk = new ProdukModel();
        // $produk->nama_barang = $request->nama_barang;
        // $produk->kode_barang = $request->kode_barang;
        // $produk->satuan = $request->satuan;
        // $produk->tgl_masuk = $request->tgl_masuk;
        // $produk->stok_dus = $request->stok_dus;
        // $produk->stok_strip = $request->stok_strip;
        // $produk->total_isi = $request->total_isi;
        // $produk->total_stok = $request->total_stock;
        // $produk->tgl_kadaluarsa = $request->tgl_kadaluarsa;
        // $produk->keterangan = $request->keterangan;
        // $produk->info = $request->info;
        // $produk->harga = $request->harga;
        // $produk->save();

        ProdukModel::create([
            'nama_barang'    => $request->nama_barang,
            'kode_barang'    => $request->kode_barang,
            'satuan'         => $request->satuan,
            'tgl_masuk'      => $request->tgl_masuk,
            'stok_dus'       => $request->stok_dus,
            'stok_strip'     => $request->stok_strip,
            'total_isi'      => $request->total_isi,
            'total_stok'     => $request->total_stok,
            'tgl_kadaluarsa' => $request->tgl_kadaluarsa,
            'keterangan'     => $request->keterangan,
            'info'           => $request->info,
            'harga'          => $request->harga
        ]);
        
        ProdukModel::save();
    
        // Redirect ke halaman lain dengan pesan sukses
        return redirect('/produk')->route('produk')->with('success', 'Produk has been created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
