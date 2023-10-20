<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class KategoriController extends Controller
{
    //



    public function index() {
        $kategoris = Kategori::all();

        //$students = Kategori::paginate(3);
        return view('index', ['kategoris' => $kategoris,]);
    }

    public function show($id) {
        $kategori = Kategori::find($id);
        return view('show', ['kategori' => $kategori]);
    }

    public function create() {
        return view('create');
    }

    public function store(Request $request) {
        $validate = $request->validate([
            'kodeKategori' => 'required',
            'namaKategori' => 'required',
            'deskripsi' => 'required',
        ]);

        Kategori::create([
            'kodeKategori' => $request->kodeKategori,
            'namaKategori' => $request->namaKategori,
            'deskripsi' => $request->deskripsi
        ]);

        return Redirect::route('index');
    }

    public function edit(Kategori $kategori) {
        return view('edit', compact('kategori'));
    }

    public function update(Request $request, Kategori $kategori) {
        $kategori->update([
            'kodeKategori' => $request->kodeKategori,
            'namaKategori' =>$request->namaKategori,
            'deskripsi' =>$request->deskripsi,
        ]);
            return Redirect::route('index');
    }

    public function delete(Kategori $kategori) {
        $kategori->courses()->delete();
        $kategori->delete();
        return Redirect::route('index');
    }

    public function __construct()
{
    $this->middleware('auth');
}

}