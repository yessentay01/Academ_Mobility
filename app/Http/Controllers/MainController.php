<?php

namespace App\Http\Controllers;

use App\Models\University;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $universities = University::all();
        return view('welcome', compact('universities'));
    }
}
