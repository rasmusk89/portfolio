<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        $data = [
            'title' => __('messages.welcome'),
            'description' => __('messages.page_description')

        ];
        return view('pages.index')->with($data);
    }

    public function about() {
        $title = __('messages.about_me');
        return view('pages.about')->with('title', $title);
    }

    public function contact() {
        $title = __('messages.contact_me');
        return view('pages.contact')->with('title', $title);
    }

    public function productAPI() {
        return view('productapi.index');
    }

    public function wordpress() {
        return view('wordpress.index');
    }

    public function projects() {
        $title = __('messages.projects');
        return view('pages.projects')->with('title', $title);
    }
}
