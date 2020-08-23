<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactsSchoolController extends Controller
{
    public function index() {
        $title = __('projects.contacts_school_project');
        return view('contacts_school.index')->with('title', $title);
    }
}
