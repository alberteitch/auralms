<?php

namespace App\Http\Controllers;
use App\settings as mSettings;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class settings extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $settings = mSettings::find(1);
        return view('settings.index',compact('settings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($threshold, $penalty)
    {
       /* $setting=mSettings::find(1);
         $setting->threshold=$threshold;
         $setting->penalty=$penalty;
        $setting->save();


         
         

        $settings=mSettings::find(1);
        
             $data=array(
        'settings' => $settings,
    
        );
    return view('settings',$data);

 */
    //echo "test store".$treshold;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'threshold' => 'required',
            'penalty' => 'required',
        ]);

        mSettings::find(1)->update($request->all());
        return redirect()->route('settings.index')
                        ->with('success','Update successful');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
