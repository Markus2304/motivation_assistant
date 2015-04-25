<?php namespace App\Http\Controllers;

class HelpController extends Controller {


    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        return "help";
    }

}
