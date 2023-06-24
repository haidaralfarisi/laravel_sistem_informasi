<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use SebastianBergmann\CodeCoverage\Report\Xml\Project;


class KategoriController extends Controller
{
    public function index()
    {
        $kategori = Kategori::orderBy('id', 'desc')
            ->paginate(3)
            ->onEachSide(2)->fragment('kategori');
        // dd($kategori);
        return view('admin.kategori.index', compact('kategori'));
    }

    public function tambahdata()
    {
        return view('admin.kategori.tambah_kategori');
    }

    public function insertdata(Request $request)
    {
        // validasi datanya
        $validator = Validator::make(
            $request->all(),
            [
                'nama_kategori' => 'required|string|max:255',
            ],
            [
                'nama_kategori.required' => 'Input nama kategori tidak boleh kosong.',
                'nama_kategori.max' => 'Maksimal input nama kategori 255 karakter.',
            ]
        );

        // untuk menampilkan errornya
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        Kategori::create($request->all());
        return redirect()->route('index.kategori')->with("success", 'Data Berhasil Di Tambahkan');
    }

    public function tampilkandata($id)
    {
        $data = Kategori::find($id);
        // dd($data);
        return view('admin.kategori.edit_kategori', compact('data'));
    }

    public function updatedata(Request $request, $id)
    {
        $data = Kategori::find($id);
        $data->update($request->all());
        return redirect()->route('index.kategori')->with("success", 'Data Berhasil Di Update');
    }

    public function deletedata($id)
    {
        $data = Kategori::find($id);
        // dd($data);
        $data->delete();
        return redirect()->route('index.kategori')->with("success", 'Data Berhasil Di Hapus');
    }
}
