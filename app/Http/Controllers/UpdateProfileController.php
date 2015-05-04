<?php namespace App\Http\Controllers;
use Request;
use Auth;

class UpdateProfileController extends Controller {


    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $current = Auth::user()->userid;

        $ime = Request::input('ime');
        $priimek = Request::input('priimek');
        $naziv = Request::input('naziv');
        $sola = Request::input('sola');
        $telefon = Request::input('telefon');

        \DB::table('oseba')
            ->where('userid', $current)
            ->update(['ime' => $ime]);

        \DB::table('oseba')
            ->where('userid', $current)
            ->update(['priimek' => $priimek]);

        \DB::table('oseba')
            ->where('userid', $current)
            ->update(['naziv' => $naziv]);

        \DB::table('oseba')
            ->where('userid', $current)
            ->update(['izobrazba' => $sola]);

        \DB::table('oseba')
            ->where('userid', $current)
            ->update(['telefon' => $telefon]);

        return redirect('profile');
    }

}
