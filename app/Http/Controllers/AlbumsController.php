<?php

namespace App\Http\Controllers;

use App\Album;
use Illuminate\Http\Request;

class AlbumsController extends Controller
{
    public function index() {
        $title = 'Photo gallery';
        return view('gallery.index')->with('title', $title);
    }

    public function albums() {
        $data = [
            'title' => 'Albums',
            'albums' => Album::with('Photos')->get()
        ];
//        $title = 'Albums';
//        $album = Album::with('Photos')->get();
        return view('gallery.albums')->with($data);
    }

    public function create() {
        $title = 'Create album';
        return view('gallery.create')->with('title', $title);
    }

    public function store(Request $request) {
        $this->validate($request, [
            'title' => 'required',
            'cover_image' => 'required|image|max:1999',
        ]);

        $fileName = $request->file('cover_image')->getClientOriginalName();

        $fileNameWithoutExtension = pathinfo($fileName, PATHINFO_FILENAME);
        $fileExtension = $request->file('cover_image')->getClientOriginalExtension();
        $fileNameToStore = $fileNameWithoutExtension . '-' . time() . '.' . $fileExtension;

        // Upload image
        $uploadImagePath = $request->file('cover_image')->storeAs('public/album_covers', $fileNameToStore);

        $album = new Album;
        $album->name = $request->input('title');
        $album->description = $request->input('description');
        $album->cover_image = $fileNameToStore;
        $album->save();

        return redirect('gallery/albums')->with('success', 'Album created');
    }

    public function show($id) {
        $album = Album::with('Photos')->find($id);
        return view('/gallery/albums.show')->with('album', $album);
    }
}
