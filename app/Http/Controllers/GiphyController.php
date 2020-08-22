<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Romeroqe\Giphy\Giphy;
use function Sodium\compare;

class GiphyController extends Controller
{

    public function index() {
        $data = [
            'title' => __('messages.gifs'),
            'description' => __('messages.desc_gifs'),
            'images' => array(),
        ];
        return view('gifs.index')->with($data);
    }

    public function search(Request $request) {
        $value = $request['search'];
        $perPage = $request['limit'];

        $giphys = (new \Romeroqe\Giphy\Giphy)->search($value, $limit = $perPage);

        $images = array();

        foreach ($giphys->data as $giphy) {
            $image = $giphy->images->original->url;

            array_push($images, $image);
        }

        $data = [
            'title' => __('messages.gifs'),
            'description' => __('messages.desc_gifs'),
            'images' => $images,
        ];
        return view('gifs.index')->with($data);
    }
}
