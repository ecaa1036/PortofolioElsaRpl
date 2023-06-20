<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kontak;

class KontakController extends Controller
{
    //
    function show(){
        $data['kontak'] = Kontak::all();
        return view('kontak',$data);
    }

    function add(){
        $data=[
            'action'=>url('kontak/create'),
            'tombol'=>'Simpan',
            'kontak'=>(object)[
                'nama_lengkap'=>'',
                'email'=>'',
                'pesan'=>'',
                'nohp'=>'',
            ]
            ];
        return view('home',$data);
    }
    function create(Request $req){

        // $namafile = $req->nis.".".$req->file('foto')->getClientOriginalExtension();

        // $this->validate($req, [
        //     'nis' => 'required|min:5|numeric',
        //     'nama' => 'required|string|max:10',
        //     'foto' => 'mimes:jpg,png'
        // ]);

        Kontak::create([
            'nama_lengkap' => $req->nama_lengkap,
            'email' => $req->email,
            'pesan' => $req->pesan,
            'nohp' => $req->nohp,
            
        ]);

        return redirect('kontak');

    }
      function hapus($id){
          $kontak = Kontak::where('id', $id)->delete();
        //   $portopolio->delete();
        //   Storage::delete($siswa->foto );
          return redirect('kontak');
      }

    //   function edit($id){
    //     $data['kontak'] = Kontak::find($id);
    //     $data['action'] = url('kontak/update'). '/' .$data['kontak']->id;
    //     $data['tombol'] = 'Update';

    //     // $data['kontak'] = Kontak::where('id','$id')->get();
    //     return view('formkontak', $data);
    // }

    //   function update(Request $req){
    //     Kontak::where('id',$req->id)->update([
    //         'nama_lengkap' => $req->nama_lengkap,
    //         'email' => $req->email,
    //         'pesan' => $req->pesan,
    //         'nohp' => $req->nohp,
            

    //     ]);
    //     return redirect('kontak');
    //    }
}
