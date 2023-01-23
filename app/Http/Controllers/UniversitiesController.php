<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UniversitiesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $user = auth()->user();
        if(!$user['is_admin']) {
            return redirect()->route('home');
        }

        return view('pages.universities');

    }
    public function create()
    {
        $user = auth()->user();
        if(!$user['is_admin']) {
            return redirect()->route('home');
        }

        return view('pages.universities.create');
    }

}
