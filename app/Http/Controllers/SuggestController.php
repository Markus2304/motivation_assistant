<?php namespace App\Http\Controllers;

class SuggestController extends Controller {


    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        return "suggestions";
    }


}
