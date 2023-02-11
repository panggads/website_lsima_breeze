<?php

namespace App\Http\Controllers;
use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //$beritas = Berita::all();

        //return view('berita.index', compact('beritas'));
        $query = Berita::query();

        if ($request->ajax()) {
            if($search = request('s')) {
                $query->where('email', 'like', '%' . $search . '%')
                    ->orWhere('first_name', 'like', '%' . $search . '%')
                    ->orWhere('last_name', 'like', '%' . $search . '%');
            }

            $model = $query->latest()->paginate(10);

            // load relation if any
            // $contacts->load('organization');

            return view('berita._databerita', compact('contacts'))->render();
        }

        $model = $query->latest()->paginate(10);

        return view('berita.index', [
            'beritas' => $model
        ]);   

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('berita.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
   
        $request->validate([
            'judul' => 'required|max:225',
            'isi' => 'required',
        ]);

        $berita = new Berita([
            'judul' => $request->get('judul'),
            'penulis' => Auth::user()->name,
            'isi' => $request->get('isi'),
            'tanggal' => date('Y-m-d'),
            'dibaca' => 0,
        ]);
        $berita->save();
        return redirect('/berita')->with('success', 'Berita berhasil disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('berita.show', compact('berita'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $berita = Berita::find($id);
        return view('berita.edit', compact('berita'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required|max:225',
            'penulis' => 'required|max:225',
            'isi' => 'required',
            'tanggal' => 'required|date',
            'dibaca' => 'required|integer|max:11',
        ]);

        $berita = Berita::find($id);
        $berita->judul = $request->get('judul');
        $berita->penulis = $request->get('penulis');
        $berita->isi = $request->get('isi');
        $berita->tanggal = $request->get('tanggal');
        //$berita->dibaca = $request->get('dibaca');
        $berita->save();

        return redirect('/berita')->with('success', 'Berita berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $berita = Berita::find($id);
        $berita->delete();

        return redirect('/berita')->with('success', 'Berita berhasil dihapus');
    }
}
