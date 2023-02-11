<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UploadController extends Controller
{
    public function store(Request $request)
    {
        if ($request->file('image')) {
            $image = $request->file('image');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/img/berita');
            $image->move($destinationPath, $name);

            $url = 'img/berita/'.$name;
            //if (is_array($request->image)) {
            //    $path = collect($request->image)->map->store('tmp-editor-uploads');
            //} else {
            //    $path = $request->image->store('tmp-editor-uploads');                
            //}

            return response()->json([
                'url' => $url
            ], 200);

           // return response()->make(Storage::get('tmp-editor-uploads/' . $filename), 200, ['Content-Type' => 'image/jpeg',]);

        }

        return;
    }
}
