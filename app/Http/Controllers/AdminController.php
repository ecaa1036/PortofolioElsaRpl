<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;

class AdminController extends Controller
{
    //
    function show(){
        $data['admin'] = Admin::all();
        return view('admin',$data);
    }
    function add(){
          $admin = Admin::first();
          if($admin){
                $data = [
                    'nis' => $admin->nis,
                    'nama' => $admin->nama,
                    'nohp' => $admin->nohp,
                    'email' => $admin->email,
                    'jk' => $admin->jk,
                    'deskripsi' => $admin->deskripsi,
                    'alamat' => $admin->alamat,
                    'foto' => $admin->foto,
                    'action' => '/admin/update/'.$admin->nis

                ];
                return view('admin',$data);
            
         }else{
            $data = [
                'nis'=>'',
                'nama'=>'',
                'nohp'=>'',
                'email'=>'',
                'jk'=>'',
                'deskripsi'=>'',
                'alamat'=>'',
                'foto'=>'',
                'action' => '/admin/create/',
            ];
            return view('admin',$data);
        }
    }
    function create(Request $req){
        Admin::create([
                 'nis' => $req->nis,
                 'nama' => $req->nama,
                 'nohp' => $req->nohp,
                 'email' => $req->email,
                 'jk' => $req->jk,
                 'deskripsi' => $req->deskripsi,
                'alamat' => $req->alamat,
                'foto' => $req->file('foto')->store('foto')
              
        ]);
        return redirect('admin');
    }

    // function create(Request $req){
    //     Admin::create([
    //     // if($req->nis('nis')){
    //     // Admin::create([
    //         'nis' => $req->nis,
    //         'nama' => $req->nama,
    //         'nohp' => $req->nohp,
    //         'email' => $req->email,
    //         'jk' => $req->jk,
    //         'deskripsi' => $req->deskripsi,
    //         'alamat' => $req->alamat,
    //         'foto' => $req->file('foto')->store('foto')
    //     ]);
    //     return redirect('admin');

    // }
      function edit($id){
        $data['admin'] = Admin::find($id);
        $data['action'] = url('admin/update').'/'.$data['admin']->nis;
        $data['tombol'] = "Update";
        return view ('admin',$data);
    }
    function update(Request $req){
        $data = Admin::where('nis',$req->nis)->first();

        // $this->validate($req, [
        //     'nis' => 'required|numeric',
        //     'nama' => 'required|string',
        //     'foto' => 'mimes:jpg,png'
        // ]);

        if($req->foto == ''){
            $foto = $data->foto;

            // $admin = Admin::where('nis',$req->id)->first();
            // Strorage::delete($admin->foto);

            // $file = $req->file('foto')->store('foto');
        }else{
            $foto = $req->file('foto')->store('foto');

            // $file = DB::raw('foto');
        }
        Admin::where('nis',$req->nis)->update([
            'nis' => $req->nis,
            'nama' => $req->nama,
            'nohp' => $req->nohp,
            'email' => $req->email,
            'jk' => $req->jk,
            'deskripsi' => $req->deskripsi,
            'alamat' => $req->alamat,
            'foto' => $foto
        ]);
        return redirect('admin');
    }
    
}
