<?php

namespace App\Http\Controllers;

use App\Models\Apply;
use App\Models\Department;
use App\Models\Level;
use App\Models\status;
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
        $levels = Level::all();

        $user = auth()->user()->toArray();
        $applies = Apply::where('email', '=', $user['email'])->get();
        if (count($applies) != 0){
            return redirect()->route('home');
        }
        return view('pages.apply', compact('universities', 'departments', 'levels'));
    }

    public function store(Request $request){

        $request->validate([
            'application_to_rector' => 'required | mimes:pdf,png,webp,jpg,jpeg | max:16384', // 16MB
            'passport_scan' => 'required | mimes:pdf,png,webp,jpg,jpeg | max:16384', // 16MB
            'transcript' => 'required | mimes:pdf,png,webp,jpg,jpeg | max:16384', // 16MB
            'confirmation' => 'required | mimes:pdf,png,webp,jpg,jpeg | max:16384', // 16MB
            'letter' => 'required | mimes:pdf,png,webp,jpg,jpeg | max:16384', // 16MB
        ]);
        $user = auth()->user()->toArray();



        if ($request->application_to_rector) {
            $application_to_rector_name = $request->application_to_rector->hashName();
            $request->application_to_rector->storeAs('media/applies/', $application_to_rector_name, 'public');
        }
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
        } else {
            $motivation_name = 'null';
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
            'group'=>$request->group,
            'student_id'=>$request->student_id,
            'gpa'=>$request->gpa,
            'level'=>$request->level,
            'university'=>$request->university,
            'transcript'=>$transcript_name,
            'motivation'=>$motivation_name,
            'confirmation'=>$confirmation_name,
            'letter'=>$letter_name,
            'responsible_person'=>$request->responsible_person,
            'responsible_contact'=>$request->responsible_contact,
            'application_to_rector'=>$application_to_rector_name,
        ]);
        $application_id = Apply::where('email', '=', $user['email'])->get()->last();
        status::create([
            'admin_id' => 'root',
            'application_id' => $application_id->id,
            'status' => 'Not reviewed',
            'comment' => '',
        ]);
        return redirect()->route('home')->with('success', 'Apply created successfully');

    }
}
