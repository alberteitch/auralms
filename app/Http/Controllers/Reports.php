<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class Reports extends Controller
{

    public function books(){

        $raw=DB::table('books')->orderby('id','DESC');
        $count=DB::table('books')->count();
        $data=array(
            'glob'  => $raw,
            'count' => $count,
            'loc'   => 'Report:Books'
        );

       return view('reports.books',$data);
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
