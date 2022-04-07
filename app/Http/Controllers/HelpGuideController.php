<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\HelpGuide;
use Illuminate\Support\Facades\DB;

class HelpGuideController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $allHelpGuides = DB::table('tbl_help_guide')
        ->join('users', 'tbl_help_guide.user_id', '=', 'users.id')
        ->select('tbl_help_guide.*', 'users.name')
        ->get();

        return view('helpGuide')->with([
            'allHelpGuides' =>  $allHelpGuides
        ]);
    }

    public function create(Request $request)
    {

        $newHelpGuide = HelpGuide::create([
            'link' => $request->helplink,
            'description' => $request->helpdescription,
            'user_id' => Auth::id(),
        ]);

        $allHelpGuides = DB::table('tbl_help_guide')
            ->join('users', 'tbl_help_guide.user_id', '=', 'users.id')
            ->select('tbl_help_guide.*', 'users.name')
            ->get();

            return view('helpGuide')->with([
                'allHelpGuides' =>  $allHelpGuides
            ]);
    }
}
