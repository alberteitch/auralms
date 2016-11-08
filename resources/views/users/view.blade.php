@extends('master.admin_dash_master')

@section('dash_content')          
                    <?php $loc='Members';?>
                    <div class="row">
                    <div class="col-lg-12">
                        <h2 class="page-header"><i class="glyphicon glyphicon-user"></i>
                            {{$loc}}<span class="trail"> | View Member Information</span>
                        </h2>


                    </div>
                </div>


               <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading" style="color:#efefef;background:#624871 !important">
                                <h3 class="panel-title"><i class="glyphicon glyphicon-leaf"></i> User Information </h3>
                            </div>

                            <div class="detcon">
                            <table style="width:100%">
                            <tr class="odd"><td class="listlbl">Id</td><td>: {{$users->id}}</td></tr>
                          <tr class="odd"><td class="listlbl">Name</td><td>: {{$users->name}}</td></tr>
                           <tr><td class="listlbl">Email</td><td>: {{$users->email}}</td></tr>
                           <tr class="odd"><td class="listlbl">Contact No.</td><td>: {{$users->contact}}</td></tr>
                           <tr><td class="listlbl">Address</td><td>: {{$users->address}}</td></tr>
                           <tr class="odd"><td class="listlbl">City</td><td>: {{$users->city}}</td></tr>
                           <tr><td class="listlbl">Country</td><td>: {{$users->country}}</td></tr>
                           <tr class="odd"><td class="listlbl">Zip</td><td>: {{$users->zip}}</td></tr>
                           <tr><td class="listlbl">Is Administrator</td><td>: 
                           @if($users->admin=='1')
                            true
                            @else
                            false
                            @endif
                           </td></tr>
       
                           <tr><td class="listlbl">Date of birth</td><td>: {{$users->dob}}</td></tr>
                           <tr class="odd"><td class="listlbl">Age</td><td>: 
                           <?php 
                           
                           $date1=date_create($users->dob);
                            $date2=date_create(date("Y-m-d "));
                            $diff=date_diff($date1,$date2);
                             $diffs = $diff->format("%y");
                             echo $diffs.' years';
                            if($diffs>12){echo " |&nbsp;Regular Account";}else{echo "|&nbsp;Regular Account";}
                           ?></td></tr>
                           <tr><td class="listlbl">Create Date</td><td>: {{$users->created_at}}</td></tr>
                           <tr  class="odd"><td class="listlbl">Updated Date</td><td>: {{$users->updated_at}}</td></tr>
                           <tr><td class="bbut" colspan="2">
                           <a href="{{ URL::Asset('users')}}">
                           <button type="button" class="btn  btn-info"><< Back to {{$loc}}</button></a>
                           <!--<button type="button" class="btn  btn-primary">View Report</button>-->
                           <a href="./{{$users->id}}/edit"> <button type="button" class="btn  btn-warning">Edit</button></a>
                           <button type="button" class="btn  btn-danger" >Delete</button>
                           <a href="{{ URL::Asset('users/passgen')}}/{{$users->id}}"><button type="button" class="btn  btn-default" >Reset Password</button></a>


                           </td></tr>
                            </table>
                            </div>       
                              
                        </div>
                    </div>
                </div>
                 <div class="row">
                    <div class="col-lg-12">
   


                         
                            <div class="">
                                              <h2 ><a href="{{ URL::Asset('users/create')}}" style="color:#4e4e4e;"><i class="glyphicon glyphicon-plus-sign" style="color:#5cb85c;"></i> Add a New User</a></h2>
                            </div>
   
                    </div>
                </div>
@stop