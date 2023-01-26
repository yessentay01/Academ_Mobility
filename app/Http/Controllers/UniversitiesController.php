<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\University;
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
        $universities = University::all();
        return view('pages.universities', compact('universities'));

    }
    public function create()
    {
        $user = auth()->user();
        if(!$user['is_admin']) {
            return redirect()->route('home');
        }
        $departments = Department::all();
        return view('pages.universities.create', compact('departments'));
    }

    public function store(Request $request)
    {

        $request->validate([
            'cover_image' => 'required | image | mimes:png,webp,jpg,jpeg | max:1024' // 1MB
        ]);

        if ($request->cover_image) {
           // $imgName = time() . '.' . $request->cover_image->extension(); // .png, .jpg
            $imgName = $request->cover_image->hashName();
            $request->cover_image->storeAs('media/universities/', $imgName, 'public');
        }

        $departments = Department::all();
        $departmentsList = array();
        foreach ($departments as $department){
            $code = $department->code;
            if (isset($request->$code)){
                $departmentsList[] = $department->code . " " . $department->name;
            }
        }

        University::create([
            'images' => $imgName,
            'name' => $request->name,
            'country' => $request->country,
            'deadline' => $request->deadline,
            'count' => $request->count,
            'departments' => implode(" \n",$departmentsList),
            'start'=> $request->start,
            'information'=> $request->information
        ]);

        return redirect()->route('universities')->with('success', 'University added successfully');
    }


}
