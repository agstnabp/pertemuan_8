<?php

namespace App\Http\Controllers;
use App\Models\Buku;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BukuController extends Controller
{
    //fungsi index
    public function index(){
        $data_buku = Buku::all();
        $no = 0;
        $banyak_data = Buku::all()->count();
        $total_harga = DB::table('buku')->sum('harga');
        return view ('buku.index', compact ('data_buku','banyak_data','total_harga','no'));
    }

    public function create(){
        return view('buku.create');
    }

    public function store(Request $request){
        $buku = new Buku;
        $buku->judul = $request->judul;
        $buku->penulis = $request->penulis;
        $buku->harga = $request->harga;
        $buku->tgl_terbit = $request->tgl_terbit;
        $buku->save();
        return redirect('/buku');

    }

    public function destroy($id){
        $buku = Buku::find($id);
        $buku->delete();
        return redirect('/buku');
    }

    public function edit($id){
        $buku = Buku::find($id);
        return view('buku.edit', compact('buku'));
    }

    public function update(Request $request, $id){
        $buku = Buku::find($id);
        $buku->judul = $request->judul;
        $buku->penulis = $request->penulis;
        $buku->harga = $request->harga;
        $buku->tgl_terbit = $request->tgl_terbit;
        $buku->save();
        return redirect('/buku');
    }
}