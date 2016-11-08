<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\categories as mCategories;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class Categories extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      $maxpage=7;
     $categories=mCategories::orderBy('id','description')->paginate($maxpage);
     $count=mCategories::count();
        $data=array(
        'categories' => $categories,
        'count' => $count
        );
    return view('categories.index',$data)->with('i', ($request->input('page', 1) - 1) * $maxpage);
    }

    public function search(Request $request,$key,$str)
    {
    $maxpage=7;
     $categories=mCategories::where($key,'LIKE', '%'.$str.'%')->paginate($maxpage);
     $count=mCategories::where($key,'LIKE', '%'.$str.'%')->count();
        $data=array(
        'categories' => $categories,
        'count' => $count
        );
    return view('categories.index',$data)->with('i', ($request->input('page', 1) - 1) * $maxpage);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $this->validate($request, [
          
            'name' => 'required',
            'description' => 'required'
        ]);

        mCategories::create($request->all());
        return redirect()->route('categories.index')->with('success','Category successful created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
 

        $categories =mCategories::find($id);
        //echo "test route";
        return view('categories.view',compact('categories'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = mCategories::find($id);
        return view('categories.edit',compact('categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
            $this->validate($request, [
            'isbn' => 'required|max:13',
            'title' => 'required',
            'description' => 'required',
            'author'=>'required',
            'edition'=>'required',
            'published'=>'required|max:4',
            'Status'=>'required',

        ]);

        mCategories::find($id)->update($request->all());
        return redirect()->route('categories.index')->with('success','Update successful');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //echo "this is destroy";
         mCategories::find($id)->delete();
        return redirect()->route('categories.index')
                        ->with('success','Delete successful');
    }
}