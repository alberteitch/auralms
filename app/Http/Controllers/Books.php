<?php

namespace App\Http\Controllers;

use App\book as mBook;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class Books extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request,$odr='id',$dir='DESC')
    {
    $maxpage=7;
     $books=mBook::orderBy($odr,$dir)->paginate($maxpage);
     $count=mBook::count();
        $data=array(
        'books' => $books,
        'count' => $count
        );
    return view('books.index',$data)->with('i', ($request->input('page', 1) - 1) * $maxpage);
    }

    public function search(Request $request,$key,$str)
    {
    $maxpage=7;
     $books=mBook::where($key,'LIKE', '%'.$str.'%')->paginate($maxpage);
     $count=mBook::where($key,'LIKE', '%'.$str.'%')->count();
        $data=array(
        'books' => $books,
        'count' => $count
        );
    return view('books.index',$data)->with('i', ($request->input('page', 1) - 1) * $maxpage);
    }

   public function searchr(Request $request)
    {


    return redirect()->route('searchb', ['key' => $request->key,'str' => $request->str]);

    }

    public function searchbm(Request $request,$key,$str)
    {
    $maxpage=7;
     $books=mBook::where($key,'LIKE', '%'.$str.'%')->paginate($maxpage);
     $count=mBook::where($key,'LIKE', '%'.$str.'%')->count();
        $data=array(
        'books' => $books,
        'count' => $count
        );
    return view('portal.search',$data)->with('i', ($request->input('page', 1) - 1) * $maxpage);
    }

    public function searchall(Request $request)
    {
    $maxpage=7;
     $books=mBook::orderby('id','DESC')->paginate($maxpage);
     $count=mBook::orderby('id','DESC')->count();
        $data=array(
        'books' => $books,
        'count' => $count
        );
    return view('portal.search',$data)->with('i', ($request->input('page', 1) - 1) * $maxpage);
    }

////////////////////////////////////////////////////////////////////



public function asearch(Request $request,$key,$str)
    {
    $maxpage=7;
     $books=mBook::where($key,'LIKE', '%'.$str.'%')->paginate($maxpage);
     $count=mBook::where($key,'LIKE', '%'.$str.'%')->count();
        $data=array(
        'books' => $books,
        'count' => $count
        );
    return view('books.index',$data)->with('i', ($request->input('page', 1) - 1) * $maxpage);
    }

   public function asearchr(Request $request)
    {


    return redirect()->route('asearchb', ['key' => $request->key,'str' => $request->str]);

    }

    public function asearchbm(Request $request,$key,$str)
    {
    $maxpage=7;
     $books=mBook::where($key,'LIKE', '%'.$str.'%')->paginate($maxpage);
     $count=mBook::where($key,'LIKE', '%'.$str.'%')->count();
        $data=array(
        'books' => $books,
        'count' => $count
        );
    return view('books.index',$data)->with('i', ($request->input('page', 1) - 1) * $maxpage);
    }

    public function asearchall(Request $request)
    {
    $maxpage=7;
     $books=mBook::orderby('id','DESC')->paginate($maxpage);
     $count=mBook::orderby('id','DESC')->count();
        $data=array(
        'books' => $books,
        'count' => $count
        );
    return view('books.index',$data)->with('i', ($request->input('page', 1) - 1) * $maxpage);
    }














/////////////////////////////////////////////////////////////////////
   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('books.create');
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
            'title' => 'required',
            'author' => 'required',
            'isbn' => 'required|max:13',
            'quantities'=>'required',
            'shelf_location'=>'required',

        ]);

        mBook::create($request->all());
        return redirect()->route('books.index')->with('success','Book successfully created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
 

        $books =mBook::find($id);
        //echo "test route";
        return view('books.view',compact('books'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $books = mBook::find($id);
        return view('books.edit',compact('books'));
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
            'title' => 'required',
            'author' => 'required',
            'isbn' => 'required|max:13',
            'quantities'=>'required',
            'shelf_location'=>'required',

        ]);

        mBook::find($id)->update($request->all());
        return redirect()->route('books.index')->with('success','Update successful');
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
         mBook::find($id)->delete();
        return redirect()->route('books.index')
                        ->with('success','Delete successful');
    }
}
