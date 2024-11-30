<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class DashboardController extends Controller
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
        return view('admin.dashboard');
    }

    public function localLang(Request $request) {
        $lang = $request->language;

        if (!in_array($lang, ['en', 'bn'])) {
            abort(400);
        }
        session('language', $lang);
        return redirect()->back()->with('success','Languages Change Successfully');
    }

}
