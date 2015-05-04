<?php namespace App\Http\Controllers;
use View;
use Auth;

class EditController extends Controller {


    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $current = Auth::user()->userid;
        $uporabnik = \DB::table('oseba')->where('userid', $current)->first();


        return view::make('edit')
            ->with('uporabnik', $uporabnik);
    }

}
