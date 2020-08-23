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

//    public function contact() {
//        $title = __('messages.contact_me');
//        return view('pages.contact')->with('title', $title);
//    }

    public function productAPI() {
        return view('productapi.index');
    }

    public function wordpress() {
        return view('wordpress.index');
    }

    public function projects() {
        $data = [
            'title' => __('messages.projects'),
            'description' => __('messages.projects_description')
        ];
        return view('pages.projects')->with($data);
    }

    public function contacts() {
        $title = __('contacts.title');
        return view('contacts.index')->with('title', $title);
    }
}
