<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\book as mBook;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class Reports extends Controller
{

    public function books(Request $request ){

    $maxpage=7;
     $books=mBook::orderBy('id','desc')->paginate($maxpage);
     $count=mBook::count();
        $data=array(
        'books' => $books,
        'count' => $count
        );
    return view('books.index',$data)->with('i', ($request->input('page', 1) - 1) * $maxpage);
    }


    public function members(){

        $raw=DB::table('users')->orderby('id','DESC');
        $count=DB::table('users')->count();
        $data=array(
            'glob'  => $raw,
            'count' => $count,
            'loc'   => 'Report:Members'
        );

       return view('reports.members',$data);
    }


    public function store(Request $request)
    {
        //
    }

  
}
