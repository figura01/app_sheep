<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Spend;
use Auth;
class FrontController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$spends = Spend::all();

        $id = Auth::id();
        $user = Auth::user();
        
        $logged = Auth::check();
        
        $spends = Spend::orderBy('pay_date', 'desc')->take(3)->get();
        return view('front.home', compact('spends','id','user','logged'));
    }


    public function showAllSpends()
    {
        $id = Auth::id();
        $user = Auth::user();
        $spends = Spend::all();

        return view('front.historique', compact('spends','user','id'));
    }


    public function addSpend()
    {
        $id = Auth::id();
        $user = Auth::user();
        $spendStatus = ['paid',''];
        return view('front.addspend', compact('user','id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
