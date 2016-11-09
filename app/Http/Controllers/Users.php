<?php

namespace App\Http\Controllers;

use App\User as mUsers;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Auth;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class Users extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      $maxpage=7;
     $users=mUsers::orderBy('id','description')->paginate($maxpage);
     $count=mUsers::count();
        $data=array(
        'users' => $users,
        'count' => $count
        );
    return view('users.index',$data)->with('i', ($request->input('page', 1) - 1) * $maxpage);
    }

    public function search(Request $request,$key,$str)
    {
    $maxpage=7;
     $users=mUsers::where($key,'LIKE', '%'.$str.'%')->paginate($maxpage);
     $count=mUsers::where($key,'LIKE', '%'.$str.'%')->count();
        $data=array(
        'users' => $users,
        'count' => $count
        );
    return view('users.index',$data)->with('i', ($request->input('page', 1) - 1) * $maxpage);
    }

////////////////////////////////////////////////////////////////////



public function usearch(Request $request,$key,$str)
    {
    $maxpage=7;
     $users=mUsers::where($key,'LIKE', '%'.$str.'%')->paginate($maxpage);
     $count=mUsers::where($key,'LIKE', '%'.$str.'%')->count();
        $data=array(
        'users' => $users,
        'count' => $count
        );
    return view('users.index',$data)->with('i', ($request->input('page', 1) - 1) * $maxpage);
    }

   public function usearchr(Request $request)
    {


    return redirect()->route('usearchb', ['key' => $request->key,'str' => $request->str]);

    }

    public function usearchbm(Request $request,$key,$str)
    {
    $maxpage=7;
     $users=mUsers::where($key,'LIKE', '%'.$str.'%')->paginate($maxpage);
     $count=mUsers::where($key,'LIKE', '%'.$str.'%')->count();
        $data=array(
        'users' => $users,
        'count' => $count
        );
    return view('users.index',$data)->with('i', ($request->input('page', 1) - 1) * $maxpage);
    }

    public function usearchall(Request $request)
    {
    $maxpage=7;
     $users=mUsers::orderby('id','DESC')->paginate($maxpage);
     $count=mUsers::orderby('id','DESC')->count();
        $data=array(
        'users' => $users,
        'count' => $count
        );
    return view('users.index',$data)->with('i', ($request->input('page', 1) - 1) * $maxpage);
    }














/////////////////////////////////////////////////////////////////////

    public function passgen($id)
    {
        
        $pass=str_random(5).rand('1000','9999');
        mUsers::find($id)->update(['password' => bcrypt($pass)]);
        
        //echo $pass;
       return redirect()->route('users.index')->with('pass',$pass);
              
    }
    public function passres($id)
    {
        
        
        //mUsers::find($id)->update(['password' => bcrypt($pass)]);
        
        //echo $pass;
        return view('reset');
              
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
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
            'email' => 'required|unique:users',
            'password' => 'required'
        ]);

        mUsers::create($request->all());
        return redirect()->route('users.index')->with('success','user successful created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
       
        $users =mUsers::find($id);
              $data=array(
        'users' => $users,
        'pass' =>null

        );

      return view('users.view',$data);
              
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = mUsers::find($id);
        return view('users.edit',compact('users'));
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
            'name' => 'required',
            'email' => 'required',
           


        ]);

        mUsers::find($id)->update($request->all());
        return redirect()->route('users.index')->with('success','Update successful');
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
         mUsers::find($id)->delete();
        return redirect()->route('users.index')
                        ->with('success','Delete successful');
    }


}