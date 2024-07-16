<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SiteCategory;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $sitecategory = SiteCategory::all();
        return view('home', ['sitecategory' =>$sitecategory, 'category'=>'All']);
    }
}
