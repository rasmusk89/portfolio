<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photo;

class PhotosController extends Controller
{
    public function create($album_id) {
        return view('gallery/photos.create')->with('album_id', $album_id);
    }

    public function store(Request $request) {
        $this->validate($request, [
            'title' => 'required',
            'photo' => 'required|image|max:1999',
        ]);

        $fileName = $request->file('photo')->getClientOriginalName();

        $fileNameWithoutExtension = pathinfo($fileName, PATHINFO_FILENAME);
        $fileExtension = $request->file('photo')->getClientOriginalExtension();
        $fileNameToStore = $fileNameWithoutExtension . '-' . time() . '.' . $fileExtension;

        // Upload image
        $uploadImagePath = $request->file('photo')->storeAs('public/photos/'.$request->input('album_id'), $fileNameToStore);

        $photo = new Photo;
        $photo->album_id = $request->input('album_id');
        $photo->description = $request->input('description');
        $photo->title = $request->input('title');
        $photo->size = $request->file('photo')->getSize();
        $photo->photo = $fileNameToStore;
        $photo->save();

        return redirect('gallery/albums/' . $request->input('album_id'))->with('success', 'Photo uploaded');
    }

}
