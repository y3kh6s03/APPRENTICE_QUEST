<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function index(){
        dd('test');
        $values = Test::all();
        dd($values);
        $queryBuilder = DB::table('tests')->where('text', '=', 'bbb')->select('id', 'text')->get();
        dd($queryBuilder);
        return view('tests.test', compact('values', 'queryBuilder'));
    }
}
