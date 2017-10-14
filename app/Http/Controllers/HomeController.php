<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Test;
use Illuminate\Database\Eloquent\ModelNotFoundException; # для работы с исключениями

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tests = Test::all(); # получить весь список записей
        foreach ($tests AS $test) {
            //echo $test->name . '<br>';
        }
        $test = Test::find(2); # получить запись по ID
        echo $test->name;

        $tests = Test::where('id', '>', 0)->take(1)->get();
        foreach ($tests AS $test) {
            echo $test->name . '<br>';
        }
        //$affectedRows = Test::where('id', '>', 0)->update(['name' => 'testing']);
        /*
        echo '<pre>';
        print_r($tests);
        echo '</pre>';
        */
        return;

        return view('home');
    }
}
