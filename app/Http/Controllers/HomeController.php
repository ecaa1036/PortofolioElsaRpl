<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\portopolio;
use App\Models\Kontak;

class HomeController extends Controller
{
    //
    function show(){
        // $admin = admin::all();
        // return view('admin', ['home' => $home ]);
        $data['admin'] = Admin::first();
        $data['portopolio'] = portopolio::all();
        // $data['kontak'] = Kontak::first();

        return view ('home',$data);
        
    }
}
