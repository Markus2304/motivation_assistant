<?php namespace App\Http\Controllers;
use View;

class ProfileController extends Controller {


    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        /*
        $ime = \DB::table('oseba')->where('userid', '2')->pluck('ime');
        $priimek = \DB::table('oseba')->where('userid', '2')->pluck('priimek');
        */
        $uporabnik = \DB::table('oseba')->where('userid', 2)->first();


        return view::make('profile')
            ->with('uporabnik', $uporabnik);
    }

}