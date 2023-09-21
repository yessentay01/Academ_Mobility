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

    public function deleter(){
        $user = auth()->user()->toArray();
        $applies = Apply::where('email', '=', $user['email'])->get();
        if (isset($applies)) {
            if (count($applies) > 0) {
                $applyUser = Apply::where('email', '=', $user['email'])->delete();
            }
        }
        return redirect()->route('home')->with('success', 'Apply deleted successfully');
    }

    public function rectorApplicationChanger(Request $request){
        $request->validate([
            'application_to_rector' => 'required | mimes:pdf,png,webp,jpg,jpeg | max:16384', // 16MB
        ]);
        $user = auth()->user()->toArray();

        $application_to_rector_name = $request->application_to_rector->hashName();
        $request->application_to_rector->storeAs('media/applies/', $application_to_rector_name, 'public');

        $applies = Apply::where('email', '=', $user['email'])->get();
        if (isset($applies)) {
            if (count($applies) > 0) {
                $applyUser = Apply::where('email', '=', $user['email'])->update(['application_to_rector'=>$application_to_rector_name]);
            }
        }
        return redirect()->route('home')->with('success', 'Apply changed successfully');
    }
}
