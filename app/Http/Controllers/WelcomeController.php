<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;

class WelcomeController extends Controller
{
    public function index(){
       // $beritas = Berita::orderBy('created_at', 'DESC')->get();
        $beritas = Berita::all();
        return view('welcome')->with('beritas', $beritas);
    }
}
