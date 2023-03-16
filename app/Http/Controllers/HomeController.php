<?php

namespace App\Http\Controllers;
use App\Models\Upload;
use App\Models\User;
use App\Models\Categories;
use Illuminate\Http\Request;

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
        $data['uploads'] = Upload::all();
        //code for dashboard count link with database
        $data['totalupload'] = Upload::count();
        $data['totaluser'] = User::count();
        $data['totalcategory'] = Categories::count();
        return view('index', $data);
    }
}
