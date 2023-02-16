<?php

namespace App\Http\Controllers;

use App\Models\Apply;
use App\Models\University;
use Illuminate\Http\Request;

class ApplicationsController extends Controller
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
        $applies = Apply::all();
        return view('pages.applications', compact('applies'));

    }

    public function application($id){
        $user = auth()->user();
        if(!$user['is_admin']) {
            return redirect()->route('home');
        }
        $application = Apply::findorfail($id);
        return view('pages.application', compact('application'));
    }
}
