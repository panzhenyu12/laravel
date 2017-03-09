<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\Cast\Array_;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*$ary = array("1","2","3");
        for($i=0;$i<count($ary);$i++)
        {
            $tt=$ary[$i];
        }*/
        //throw new \Exception("我故意的", 1);
       // $ids = $_GET['id'];
        return view('home')->withArticless(\App\Article::all());
    }

}
