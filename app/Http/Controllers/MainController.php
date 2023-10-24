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
//            ["Altinbas University (Türkiye)", "05.10.23"],
//            ["Halic University (Türkiye)", "05.10.23"],
//            ["Istanbul Aidyn University (Türkiye)", "05.10.23"],
//            ["Kyungdong University (South Korea)", "30.09.23"],
//            ["INHA University (South Korea)", "20.09.23"],
//            ["KAIST (South Korea)", "30.09.23"],
//            ["Schmalkalden University (Germany)", "10.11.23"],
            ["Innopolis University (Russia)", "28.10.23"],
            ["Сaucasus University (Georgia)", "11.11.2023"],
            ["Karadeniz Technical university (Turkey)", "11.11.2023"],
            ["Nigde Omer Halisdemir University (Turkey)", "17.11.2023 (Turkish language level A2)"],
            ["Adam Mickiewicz University (Poland)", "15.10.23"],
//            ["Innopolis University (Russia)", "05.10.23"],
            ["ИТМО (Russia)", "05.10.23"],
            ["ВШЭ (Russia)", "05.10.23"],
            ["UNIVERSITY OF ŽILINA (Slovak)", "30.09.23"],
            ["University of Debrecen (Hungary)", "30.09.23"],
            ["ADA University (Azerbaijan)", "05.10.23"]
        ];

        return view('welcome', compact('universities', 'deadLines'));
    }
    public function detail($id)
    {
        $university = University::findorfail($id);
        return view('pages.university', compact('university'));
    }

}
