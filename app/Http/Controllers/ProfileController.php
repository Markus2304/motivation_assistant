<?php namespace App\Http\Controllers;
use Request;
use View;
use Auth;

class ProfileController extends Controller {


    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $current = Auth::user()->userid;
        $target = Request::input('user', $current);
        /*
        $ime = \DB::table('oseba')->where('userid', '2')->pluck('ime');
        $priimek = \DB::table('oseba')->where('userid', '2')->pluck('priimek');
        */
        $uporabnik = \DB::table('oseba')->where('userid', $target)->first();


        return view::make('profile')
            ->with('uporabnik', $uporabnik);
    }

}