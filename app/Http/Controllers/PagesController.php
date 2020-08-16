<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        $title = 'This is my laravel projects page';
        return view('pages.index')->with('title', $title);
    }

    public function about() {
        $title = 'About me';
        return view('pages.about')->with('title', $title);
    }

    public function contact() {
        $title = 'Contact me';
        return view('pages.contact')->with('title', $title);
    }

    public function projects() {
        $data = [
            'title' => 'Projects',
            'projects' => ['Contact Book', 'REST API', 'VUE.JS']
        ];
        return view('pages.projects')->with($data);
    }

    public function productAPI() {
        return view('productapi.index');
    }

    public function wordpress() {
        return view('wordpress.index');
    }
}
