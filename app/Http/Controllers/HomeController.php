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

    public function transcriptChanger(Request $request){
        $request->validate([
            'transcript' => 'required | mimes:pdf,png,webp,jpg,jpeg | max:16384', // 16MB
        ]);
        $user = auth()->user()->toArray();

        $transcript_name = $request->transcript->hashName();
        $request->transcript->storeAs('media/applies/', $transcript_name, 'public');

        $applies = Apply::where('email', '=', $user['email'])->get();
        if (isset($applies)) {
            if (count($applies) > 0) {
                $applyUser = Apply::where('email', '=', $user['email'])->update(['transcript'=>$transcript_name]);
            }
        }
        return redirect()->route('home')->with('success', 'Apply changed successfully');
    }

    public function motivationChanger(Request $request){
        $request->validate([
            'motivation' => 'required | mimes:pdf,png,webp,jpg,jpeg | max:16384', // 16MB
        ]);
        $user = auth()->user()->toArray();

        $motivation_name = $request->motivation->hashName();
        $request->motivation->storeAs('media/applies/', $motivation_name, 'public');

        $applies = Apply::where('email', '=', $user['email'])->get();
        if (isset($applies)) {
            if (count($applies) > 0) {
                $applyUser = Apply::where('email', '=', $user['email'])->update(['motivation'=>$motivation_name]);
            }
        }
        return redirect()->route('home')->with('success', 'Apply changed successfully');
    }

    public function englishConfChanger(Request $request){
        $request->validate([
            'confirmation' => 'required | mimes:pdf,png,webp,jpg,jpeg | max:16384', // 16MB
        ]);
        $user = auth()->user()->toArray();

        $confirmation_name = $request->confirmation->hashName();
        $request->confirmation->storeAs('media/applies/', $confirmation_name, 'public');

        $applies = Apply::where('email', '=', $user['email'])->get();
        if (isset($applies)) {
            if (count($applies) > 0) {
                $applyUser = Apply::where('email', '=', $user['email'])->update(['confirmation'=>$confirmation_name]);
            }
        }
        return redirect()->route('home')->with('success', 'Apply changed successfully');
    }

    public function letterChanger(Request $request){
        $request->validate([
            'letter' => 'required | mimes:pdf,png,webp,jpg,jpeg | max:16384', // 16MB
        ]);
        $user = auth()->user()->toArray();

        $letter_name = $request->letter->hashName();
        $request->letter->storeAs('media/applies/', $letter_name, 'public');

        $applies = Apply::where('email', '=', $user['email'])->get();
        if (isset($applies)) {
            if (count($applies) > 0) {
                $applyUser = Apply::where('email', '=', $user['email'])->update(['letter'=>$letter_name]);
            }
        }
        return redirect()->route('home')->with('success', 'Apply changed successfully');
    }

    public function passportScanChanger(Request $request){
        $request->validate([
            'passport_scan' => 'required | mimes:pdf,png,webp,jpg,jpeg | max:16384', // 16MB
        ]);
        $user = auth()->user()->toArray();

        $passport_scan_name = $request->passport_scan->hashName();
        $request->passport_scan->storeAs('media/applies/', $passport_scan_name, 'public');

        $applies = Apply::where('email', '=', $user['email'])->get();
        if (isset($applies)) {
            if (count($applies) > 0) {
                $applyUser = Apply::where('email', '=', $user['email'])->update(['passport_scan'=>$passport_scan_name]);
            }
        }
        return redirect()->route('home')->with('success', 'Apply changed successfully');
    }
}
