<?php

namespace App\Http\Controllers;

use App\Models\Apply;
use App\Models\status;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = auth()->user()->toArray();
        $applies = Apply::where('email', '=', $user['email'])->get();
        $status = "";
        if (isset($applies)) {
            if (count($applies) > 0) {
                $status = status::where('application_id', '=', $applies[0]->id)->get()->last();
            }
        }
        return view('home', compact('applies', 'status'));
    }
}
