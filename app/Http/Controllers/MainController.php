<?php

namespace App\Http\Controllers;

use App\Models\University;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $universities = University::all();
        $deadLines = [
            ['Schmalkalden University (Germany)', '17.03.24', 1],
            ['HOF University (Germany)', '17.03.24', 1],
            ['Ostrava University (Check)', '17.03.24', 1],
            ['Adam Mickiewicz University (Poland)', '17.03.24', 1],
            ['UNIVERSITY OF ŽILINA (Slovak)', '17.03.24', 1],
            ['University of Debrecen (Hungary)', '17.03.24', 1],
            ['Istanbul Aidyn University (Türkiye)', '17.03.24', 1],
            ['Gazi University (Türkiye)', '17.03.24', 1],
            ['Altinbas University (Türkiye)', '17.03.24', 1],
            ['Halic University (Türkiye)', '17.03.24', 1],
            ['Nigde omer Halisdemir University (Türkiye)', '17.03.24', 1],


            ['Kyungdong University (South Korea)', '17.03.24', 2],
            ['INHA University (South Korea)', '17.03.24', 2],
            ['KAIST (South Korea) (IELTS 6.5)', '17.03.24', 2],
            ['UITM MARA (Malaysia)',  '17.03.24', 2],
            ['UNITEN (Malaysia)',  '17.03.24', 2]
        ];

        return view('welcome', compact('universities', 'deadLines'));
    }
    public function detail($id)
    {
        $university = University::findorfail($id);
        return view('pages.university', compact('university'));
    }

}
