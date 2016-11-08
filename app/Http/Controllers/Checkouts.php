<?php

namespace App\Http\Controllers;
use App\Checkouts as mCheckouts;

use Illuminate\Http\Request;
use Auth;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class Checkouts extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }
    public function historyall(Request $request)
    {
      $id=Auth::user()->id;
    $maxpage=10;
     $borrows=mCheckouts::orderby('id','DESC')->where('user','=',$id)->paginate($maxpage);
     $count=mCheckouts::orderby('id','DESC')->where('user','=',$id)->count();
        $data=array(
        'borrowed' => $borrows,
        'count' => $count
        );
    return view('portal.history',$data)->with('i', ($request->input('page', 1) - 1) * $maxpage);
    }

        //
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   $bookid=1;
        $userid=4;


                            $date1=date_create(DB::table('users')->where('id','=',$userid)->pluck('dob'));
                            $date2=date_create(date("Y-m-d "));
                            $diff=date_diff($date1,$date2);
                             $diffs = $diff->format("%y");
                             echo $diffs.' years';
                            if($diffs>12){
                                $blimit=6;
                                echo " |&nbsp;Regular Account";
                            }else{
                                $blimit=3;
                                echo "|&nbsp;Regular Account";
                            }

        

        $bbbu=DB::table('checkouts')->where('user','=',$userid)->where('returned','>',0)->count();
        echo $bbbu." borrowed by user: ".$userid."<br/>";

        $bco=DB::table('checkouts')->where('book','=',$bookid)->where('returned','>',0)->count();
        $btqty=DB::table('books')->where('id','=',$bookid)->pluck('quantities');
        
        if($bbbu<$blimit){

        $date=date_create(date("Y-m-d "));
       
        

        if($bco<$btqty){
             $bco++;
             DB::table('checkouts')->insert(['book' => $bookid,'user' => $userid,'checked_out' => $date,'updated_at' => $date,]);
        }else{
            echo "No more books available!<br/>";
        }
        }else{
            echo "Borrow limit reached<br/>";
        }
        $bleft=$blimit-$bbbu;
        $avail=$btqty-$bco;
        echo 'stored '.$bco."|".$btqty."|".$avail."|".$bleft;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function get($id)
    {
        DB::table('checkouts')->insert(['book' => $id,'user' => Auth::user()->id,'checked_out' => date_create(date("Y-m-d ")),'updated_at' => date_create(date("Y-m-d "))]);
        return redirect()->route('search.all')->with('success','Borrow successful');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id,$uid,$pty)
    {   


         //echo $id."|",$uid.'|'.$pty;
        //DB::table('checkouts')->where('id', $id)->update(['toggle'=>true,'returned' => date_create(date("Y-m-d "))]);
       // return redirect()->route('borrow.back')->with('success','Return successful');
   
//////////////////////
        $curr=DB::table('users')->where('id','=',$uid)->pluck('dues');
        $neww=$pty+$curr;
        DB::table('users')->where('id', $uid)->update(['dues'=>$neww,'updated_at' => date_create(date("Y-m-d "))]);
        DB::table('checkouts')->where('id', $id)->update(['dues'=>$pty,'toggle'=>true,'returned' => date_create(date("Y-m-d "))]);
        return redirect()->route('borrow.back')->with('success','Return successful');



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function borrowed(Request $request, $id=1)
    {
        //

        $maxpage=7;
     $borrows=DB::table('checkouts')->where('user','=',Auth::user()->id)->where('toggle','=',false)->paginate($maxpage);
     $count=DB::table('checkouts')->where('user','=',Auth::user()->id)->where('toggle','=',false)->count();

        $data=array(
        'borrowed' => $borrows,
        'count' => $count
        );
    return view('portal.borrowed',$data)->with('i', ($request->input('page', 1) - 1) * $maxpage);

        //echo "These are borrowed.";
    }
}
