<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\portopolio;

class PortopolioController extends Controller
{
    //
    function show(){
        $data['portopolio'] = portopolio::all();
        return view('portopolio',$data);
    }

    function add(){
        $data=[
            'action'=>url('portopolio/create'),
            'tombol'=>'Simpan',
            'portopolio'=>(object)[
                'nama'=>'',
                'kategori'=>'',
                'deskripsi'=>'',
                'foto'=>'',
            ]
            ];
        return view('formportopolio',$data);
    }
    function create(Request $req){

        // $namafile = $req->nis.".".$req->file('foto')->getClientOriginalExtension();

        // $this->validate($req, [
        //     'nis' => 'required|min:5|numeric',
        //     'nama' => 'required|string|max:10',
        //     'foto' => 'mimes:jpg,png'
        // ]);

        portopolio::create([
            'nama' => $req->nama,
            'kategori' => $req->kategori,
            'deskripsi' => $req->deskripsi,
            'foto' => $req->file('foto')->store('foto')
        ]);

        return redirect('portopolio');

    }
      function hapus($id){
          $portopolio = portopolio::where('id', $id)->delete();
        //   $portopolio->delete();
        //   Storage::delete($siswa->foto );
          return redirect('portopolio');
      }

      function edit($id){
        $data['portopolio'] = portopolio::find($id);
        $data['action'] = url('portopolio/update'). '/' .$data['portopolio']->id;
        $data['tombol'] = 'Update';

        // $data['portopolio'] = portopolio::where('id','$id')->get();
        return view('formportopolio', $data);
    }

      function update(Request $req){
        portopolio::where('id',$req->id)->update([
            'nama' => $req->nama,
            'kategori' => $req->kategori,
            'deskripsi' => $req->deskripsi,
            'foto' => $req->file('foto')->store('foto')

        ]);
        return redirect('portopolio');
       }

    //    function cari(Request $req){

    //     $data['portopolio'] = portopolio::where('nama','like',$req->cari. "%")
    //     ->orwhere('kategori','like',$req->cari. "%")
    //     ->orwhere('deskripsi','like',$req->cari. "%")
    //     ->paginate();

    //     $data['cari'] = $req->cari;
    //     return view('portopolio',$data);
    //   }
}
