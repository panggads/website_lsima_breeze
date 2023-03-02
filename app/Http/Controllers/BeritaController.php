<?php

namespace App\Http\Controllers;
use App\Models\Berita;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
 
class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $perPage = 10; // Number of items to show per page
        $searchTerm = $request->input('searchTerm', ''); // Search term from AJAX request

        // Query the Berita model to get all the items
        $query = Berita::query();

        // If a search term is provided, filter the results by the search term
        if (!empty($searchTerm)) {
            $query->where('judul', 'like', '%' . $searchTerm . '%');
        }

        // Paginate the results
        $beritas = $query->paginate($perPage);

        // If the request is an AJAX request, return a JSON response
        if ($request->ajax()) {
            return response()->json([
                'status' => 'success',
                'data' => $beritas,
            ]);
        }

        // If it's not an AJAX request, return a view with the paginated results
        return view('berita.index', compact('beritas'));
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
       // return redirect('show', $berita->id);
        return redirect()->route('berita.show', $berita->id)->with('success', 'Berita berhasil ditambahkan');
       // return redirect('/berita')->with('success', 'Berita berhasil disimpan');
    }

    
    public function upload(Request $request)
    {
       

            $berita = Berita::find($request->input('id'));
            if (!$berita) {
                return response()->json(['message' => 'Record not found'], 404);
            }

            // Check if the cover file exists and delete it if it does
            if ($request->hasFile('image') && $berita->cover) {
                $cover_path = public_path('img/berita/' . $berita->cover);
                if (File::exists($cover_path)) {
                    File::delete($cover_path);
                }
            }

            // Update the cover field if a new file was uploaded
            if ($request->hasFile('image')) {
                if ($request->file('image')) {
                    $image = $request->file('image');
                    $name = time().'.'.$image->getClientOriginalExtension();
                    $destinationPath = public_path('/img/berita');
                    $image->move($destinationPath, $name);
        
                    $url = 'img/berita/'.$name;

                    $berita->cover = $name;
                    $berita->save();
                }
            }          

            return response()->json([
                'url' => $url
            ], 200);
        return;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $berita = Berita::findOrFail($id);
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
        $berita = Berita::findOrFail($id);
    
        $berita->judul = $request->judul;
        $berita->isi = $request->isi;
        $berita->save();

        return redirect()->route('berita.show', $id)->with('success', 'Berita berhasil diupdate');
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

        $cover_path = public_path('img/berita/' . $berita->cover);
        if (File::exists($cover_path)) {
            File::delete($cover_path);
        }
        $berita->delete();

        return redirect('/berita')->with('success', 'Berita berhasil dihapus');
    }
}
