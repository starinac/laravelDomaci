<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

use App\Plan;
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function save(Request $req)
    {
        $plan = new Plan;
        $plan->cilj = $req->zeljeniCilj;
        $plan->pol = $req->pol."".$req->pol1;
        $plan->godine=$req->godine;
        $plan->aktivnost = $req->teretana." ".$req->trcanje." ".$req->bicikla;
        $plan->userId = 1;
        $plan->save();
        return redirect()->back();
    }
}
