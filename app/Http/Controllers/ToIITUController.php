<?php

namespace App\Http\Controllers;
use App\Models\Department;
use App\Models\University;
use Illuminate\Http\Request;

class ToIITUController extends Controller
{
    public function index()
    {
        return view('toiitu');
    }
}
