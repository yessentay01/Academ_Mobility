<?php

namespace App\Http\Controllers;

use App\Models\Apply;
use App\Models\status;
use App\Models\University;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
//        $applies = Apply::all();
        $applies =DB::table('applies')
            ->select('*')
            ->join('statuses', 'statuses.application_id', '=', 'applies.id')
            ->orderBy('statuses.id', 'DESC')
            ->get()->unique('email');
        return view('pages.applications', compact('applies'));

    }

    public function application($id){
        $user = auth()->user();
        if(!$user['is_admin']) {
            return redirect()->route('home');
        }
        $application = Apply::findorfail($id);
        $status = status::where('application_id', '=', $application->id)->get()->last();
        return view('pages.application', compact('application', 'status'));
    }

    public function status(Request $request){
        $user = auth()->user();
        if(!$user['is_admin']) {
            return redirect()->route('home');
        }
        status::create([
            'admin_id' => $user['id'],
            'application_id' => $request->application_id,
            'status' => $request->status,
            'comment' => $request->comment,
        ]);

        return redirect()->route('application', $request->application_id )->with('success', 'Status change successfully');
    }
}
