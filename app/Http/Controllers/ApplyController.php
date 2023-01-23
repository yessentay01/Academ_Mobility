<?php

namespace App\Http\Controllers;

use App\Models\Apply;
use App\Models\Department;
use App\Models\University;
use Illuminate\Http\Request;

class ApplyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $universities = University::all();
        $departments = Department::all();
        return view('pages.apply', compact('universities', 'departments'));
    }

    public function store(Request $request){

        $request->validate([
            'passport_scan' => 'required | mimes:pdf,png,webp,jpg,jpeg | max:2048', // 2MB
            'transcript' => 'required | mimes:pdf,png,webp,jpg,jpeg | max:2048', // 2MB
            'motivation' => 'required | mimes:pdf,png,webp,jpg,jpeg | max:2048', // 2MB
            'confirmation' => 'required | mimes:pdf,png,webp,jpg,jpeg | max:2048', // 2MB
            'letter' => 'required | mimes:pdf,png,webp,jpg,jpeg | max:2048', // 2MB
        ]);
        $user = auth()->user()->toArray();



        if ($request->passport_scan) {
            $passport_scan_name = $request->passport_scan->hashName();
            $request->passport_scan->storeAs('media/applies/', $passport_scan_name, 'public');
        }
        if ($request->transcript) {
            $transcript_name = $request->transcript->hashName();
            $request->transcript->storeAs('media/applies/', $transcript_name, 'public');
        }
        if ($request->motivation) {
            $motivation_name = $request->motivation->hashName();
            $request->motivation->storeAs('media/applies/', $motivation_name, 'public');
        }
        if ($request->confirmation) {
            $confirmation_name = $request->confirmation->hashName();
            $request->confirmation->storeAs('media/applies/', $confirmation_name, 'public');
        }
        if ($request->letter) {
            $letter_name = $request->letter->hashName();
            $request->letter->storeAs('media/applies/', $letter_name, 'public');
        }
        Apply::create([
            'email'=>$user['email'],
            'full_name'=>$request->full_name,
            'full_name2'=>$request->full_name2,
            'phone'=>$request->phone,
            'iin'=>$request->iin,
            'birth'=>$request->birth,
            'passport_id'=>$request->passport_id,
            'issue'=>$request->issue,
            'expiration_date'=>$request->expiration_date,
            'passport_scan'=>$passport_scan_name,
            'course'=>$request->course,
            'speciality'=>$request->speciality,
            'university'=>$request->university,
            'transcript'=>$transcript_name,
            'motivation'=>$motivation_name,
            'confirmation'=>$confirmation_name,
            'letter'=>$letter_name,
            'responsible_person'=>$request->responsible_person,
            'responsible_contact'=>$request->responsible_contact,
        ]);

        return redirect()->route('home')->with('success', 'Apply created successfully');

    }
}
