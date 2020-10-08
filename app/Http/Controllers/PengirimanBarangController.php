<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PengirimanBarang;

class PengirimanBarangController extends Controller
{
    public function index(){

    	$datas = \App\Models\PengirimanBarang::all();
    	return view ('admin.index', ['datas' => $datas]);
    }

    public function create(Request $Request){

    	\App\Models\PengirimanBarang::create($Request->all());
    	return redirect('/PengirimanBarang')->with('berhasil','Data berhasil disimpan!');
    }

    public function update($id){
    	$data = \App\Models\PengirimanBarang::find($id);
    	return view('admin/update',['data' => $data]);
    }

    public function ProcessUpdate(Request $Request,$id){
        $data = \App\Models\PengirimanBarang::find($id);
        $data -> update($Request->all());
        return redirect('/PengirimanBarang')->with('berhasil','Data berhasil diupdate!');
    }
    public function delete($id){
        $data = \App\Models\PengirimanBarang::find($id);
        $data->delete();
        return redirect('/PengirimanBarang')->with('berhasil','Data berhasil dihapus!');
    }
}
