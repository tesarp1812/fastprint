<?php

namespace App\Http\Controllers;

///models
use App\Models\produk;
use App\Models\kategori;
use App\Models\status;

use Illuminate\Http\Request;


class ProdukController extends Controller
{

    //menampilkan database 
    public function index()
    {
       $produk = Produk::orderBy('id_produk', 'asc')
        ->join('kategoris', 'produks.kategori_id', '=', 'kategoris.id_kategori')
        ->join('statuses', 'produks.status_id', '=', 'statuses.id_status')
        //->where('statuses.nama_status', '=', 'bisa dijual')
        ->get();
        //$produk = Produk::all();
        //dd($produk);
        return view('index', compact('produk'));
    }

    //route ke halaman tambah
    public function create()
    {
        return view('tambah_data');
    }

    //menambahkan data dari form tambah ke dalam database
    public function store(Request $request)
    {
        //dd($request->all());
        produk::create([
            'nama_produk' => $request->inputnamaproduk,
            'harga' => $request->inputharga,
            'kategori_id' => $request->inputketegori,
            'status_id' => $request->inputstatus
        ]);
        return redirect('/index')->with(['success' => 'Data Berhasil Disimpan']);
    }

    //route ke halaman edit berdasarkan id
    public function edit($id)
    {
        //ambil data
        $produk = Produk::where('id_produk', $id)->first();
        //dd($produk);
        return view('/edit', ['produk' => $produk]);
    }

    public function update(Request $request, $id)
    {
        $produk = Produk::find($id);
        $produk->nama_produk = $request->inputproduk;
        $produk->harga = $request->inputharga;
        $produk->kategori_id = $request->inputkategori;
        $produk->status_id = $request->inputstatus;
        $produk->save();
        return redirect('/index');
    }

    public function destroy($id)
    {
        $produk = Produk::findOrFail($id);
        $produk->delete();

        return redirect('/index')->with(['delete' => 'Data Telah Di Hapus']);
    }
}
