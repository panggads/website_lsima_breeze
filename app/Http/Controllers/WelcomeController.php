<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\MediaLain;

class WelcomeController extends Controller
{
    public function index(){
       // $beritas = Berita::orderBy('created_at', 'DESC')->get();
        $beritas = Berita::latest()->take(9)->get();
        $medialains = MediaLain::latest()->take(5)->get();

        return view('welcome', compact('beritas', 'medialains'));
    }

    public function profil(){
        return view('site.profil.index');
    }

    public function read($id){
        $detail = Berita::findOrFail($id);
        $beritas = Berita::latest()->take(6)->get();
        $medialains = MediaLain::latest()->take(6)->get();
        return view('site.berita.read', compact('detail', 'medialains', 'beritas'));
    }

    public function allnews(){
         return view('site.berita.index');
    }

    public function getdatanews(Request $request) {
        $data = Berita::paginate(3, ['*'], 'page', $request->input('page'));
        return view('site.berita.partial.getdatanews', ['data' => $data])->render();
    }

    public function allmedia(){
        return view('site.medialain.index');
    }

    public function getdatamedias(Request $request) {
        $data = MediaLain::paginate(3, ['*'], 'page', $request->input('page'));
        return view('site.medialain.partial.getdatamedias', ['data' => $data])->render();
    }
}
