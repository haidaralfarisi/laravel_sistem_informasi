<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ProdukController extends Controller
{
    public function index()
    {
        $produk = Produk::orderBy('id', 'desc')
            ->paginate(3)
            ->onEachSide(2)->fragment('produk');
        return view('admin.produk.index', compact('produk'));
    }

    public function create()
    {
        $data_kategori = Kategori::all();
        return view('admin.produk.tambah_produk', compact('data_kategori'));
        // menampilkan halaman view tambah_produk
    }
    public function save(Request $request)
    {
        // dd($request->all());
        $validator = Validator::make(
            $request->all(),
            [
                'nama_produk' => 'required|string|max:100',
                'gambar' => 'required|image|mimes:jpeg,png|max:500',
                'deskripsi' => 'required|string|max:500',
                'harga' => 'required|numeric',
                'kategori_id' => 'required|exists:kategoris,id',
                'link' => 'required',
            ],
            [
                'nama_produk.required' => 'Input nama produk tidak boleh kosong.',
                'gambar' => 'Input nama produk tidak boleh kosong.',
                'deskripsi' => 'Input nama produk tidak boleh kosong.',
                'harga' => 'Input nama produk tidak boleh kosong.',
                'kategori_id' => 'Input nama produk tidak boleh kosong.',
                'link' => 'Input nama produk tidak boleh kosong.'
            ]

        );


        // untuk menampilkan errornya
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $path = $file->storeAs('public/image/produk', $fileName);
            $fileImage = basename($path);
        }

        $produk = new Produk();
        $produk->nama_produk = $request->nama_produk;
        $produk->harga = $request->harga;
        $produk->deskripsi = $request->deskripsi;
        $produk->link = $request->link;
        $produk->kategori_id = $request->kategori_id;
        $produk->gambar = $fileImage;

        $produk->save();

        return redirect()->route('index.produk')->with("success", 'Data Berhasil Di Tambahkan');
        // query simpan 
    }
    public function edit($id)
    {
        $data = Produk::find($id);
        // dd($data);
        return view('admin.produk.edit_produk', compact('data'));
        // menampilkan halaman edit produk berdasarkan id

    }
    public function update(Request $request, $id)
    {
        $data = Produk::find($id);
        $data->update($request->all());
        return redirect()->route('index.produk')->with("success", 'Data Berhasil Di Update');
        // query update produk
    }
    public function delete($id)
    {
        $data = Produk::find($id);
        // dd($data);
        $data->delete();
        return redirect()->route('index.produk')->with("success", 'Data Berhasil Di Hapus');
        // delet produk
    }
}
