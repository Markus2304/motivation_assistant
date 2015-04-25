<?php namespace App\Http\Controllers;

class HierarchyController extends Controller {


    public function __construct()
    {
        $this->middleware('auth');
    }



    public function index()
    {
        return "profile";
    }

}
