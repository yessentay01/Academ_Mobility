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
            ['Schmalkalden University (Germany)', '01.05.24', 1],
            ['Adam Mickiewicz University (Poland)', '28.04.24', 1],
            ['University of Debrecen (Hungary)', '28.04.24', 1],
            ['ADA University (Azerbaijan)', '28.04.24', 1],
            ['Caucasus University (Georgia)', '15.05.24', 1],
            ['UNIVERSITY OF ŽILINA (Slovak)', '27.05.24', 1],
            ['UNITEN (Malaysia)', '01.05.24', 1],
            ['Istanbul Aidyn University (Türkiye)', '01.05.24', 1],
            ['Altinbas University (Türkiye)', '15.05.24', 1],
            ['Halic University (Türkiye)', '15.05.24', 1],
            ['Gazi University (Türkiye)', '15.05.24', 1],
            ['Nigde omer Halisdemir University (Türkiye)', '15.05.24', 1],
            ['Karadeniz Technical University (Türkiye)', '15.05.24', 1],

            ['Kyungdong University (South Korea)', '17.03.24', 2],
            ['INHA University (South Korea)', '17.03.24', 2],
            ['KAIST (South Korea) (IELTS 6.5)', '17.03.24', 2],
            ['UITM MARA (Malaysia)',  '17.03.24', 2],
            ['UNITEN (Malaysia)',  '17.03.24', 2],

            ['Schmalkalden University (Germany)','27.03.24', 3],
            ['HOF University (Germany)','27.03.24', 3],
            ['Ostrava University (Check)','27.03.24', 3],
            ['Adam Mickiewicz University (Poland)','27.03.24', 3],
            ['Kyungdong University (South Korea)','27.03.24', 3],
            ['INHA University (South Korea)','20.03.24', 3],
            ['KAIST (South Korea) (IELTS 6.5)','27.03.24', 3],
            ['Innopolis (Russia)','08.04.24', 3]
        ];

        return view('welcome', compact('universities', 'deadLines'));
    }
    public function detail($id)
    {
        $university = University::findorfail($id);
        return view('pages.university', compact('university'));
    }

}
