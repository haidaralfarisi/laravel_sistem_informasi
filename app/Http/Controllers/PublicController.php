<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Kategori;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index()
    {
        $produk = Produk::first();
        // kategori minuman
        $kategori_minuman = Kategori::where('nama_kategori', 'Minuman')->first();
        $produk_minuman = Produk::whereHas('kategori', function ($query) use ($kategori_minuman) {
            $query->where('id', $kategori_minuman->id);
        })->get();

        // kategori bakso
        $kategori_bakso = Kategori::where('nama_kategori', 'Bakso')->first();
        $produk_bakso = Produk::whereHas('kategori', function ($query) use ($kategori_bakso) {
            $query->where('id', $kategori_bakso->id);
        })->get();

        // kategori mieayam
        $kategori_mieayam = Kategori::where('nama_kategori', 'Mie ayam')->first();
        $produk_mieayam = Produk::whereHas('kategori', function ($query) use ($kategori_mieayam) {
            $query->where('id', $kategori_mieayam->id);
        })->get();

        return View('publik.index_publik', compact(
            'produk_minuman',
            'kategori_minuman',
            'kategori_bakso',
            'produk_bakso',
            'kategori_mieayam',
            'produk_mieayam',
            'produk'
        ));
    }
}
