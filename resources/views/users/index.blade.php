@extends('master.admin_dash_master')

@section('dash_content')          
                    <?php $loc='Members';?>
                    <div class="row">
                    <div class="col-lg-12">
                        <h2 class="page-header"><i class="glyphicon glyphicon-user"></i>
                            Member <span class="trail">| Management</span>
                        </h2>


                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                            <div class="searchcontainer">
                                <div class="checkbox field_con">
                                 {!!Form::open(['action' => ['Users@usearchr']])!!}
                                <table><tr><td>
                                                           
                                {!! Form::select('key', ['id' => 'id', 'name' => 'name','email'=>'email','admin'=>'admin'], 'key',['class'=>'form-control srcselector','style'=>'width:100px;']);!!}
                                </td><td> 
                                <input name="str" type="text" placeholder="Book Search" class=" searchbox"> 
                                </td><td> 
                                <a href="">
                                <button type="submit" id="sglyph" class="glyphicon glyphicon-search  " aria-hidden="true" style="margin-right:10px;"></span></a>
                                </form>
                                </td></tr> 
                                </table>
                            {!!Form::close()!!}
                               </div>
                            </div>
                    </div>
                </div>

                @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>
                    @endif
                    @if ($message = Session::get('pass'))
                            <div class="alert alert-success" style="text-size:20px;font-weight:bold">
                                <p>New account password:
                                <h3 style="margin-top:5px;">{{ $message }}<h3></p>
                            </div>
                    @endif
                    @if($count=='0')
                    <div class="alert alert-success">
                                <p>No records found!</p>
                            </div>
                    @endif
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div >


                         
                            <div class="panel-body">
                                              <h2 ><a href="{{ URL::Asset('users/create')}}" style="color:#4e4e4e;"><i class="glyphicon glyphicon-plus-sign" style="color:#5cb85c;"></i> Add a New Member</a></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="glyphicon glyphicon-list-alt"></i> List Members</h3>
                            </div>
                            
                            <table class="listtable">
                                    <tr class="toprow">
                                    <td class="coluna">
                                         Actions
                                    </td>
                                     <td>
                                         id
                                    </td>
                                    <td>
                                         Name
                                    </td>

                                    <td>
                                         Email
                                    </td>
                                    <td>
                                         Is Admin
                                    </td>

                                    <td class="cd">
                                         Create date
                                    </td>
                                    <td class="ud">
                                         Update date
                                    </td>
                                    </tr>
                          @foreach($users as $user)
                                    
                                 <tr>
                                    <td class="action_col coluna">
                                               <style>.btn-xs{margin:3px 0px !important;}</style>
                                    {!! Form::model($users, ['class'=>"form_delete",'method' => 'DELETE','route' => ['users.destroy',$user->id]]) !!}
                                    <a href="{{ URL::Asset('users')}}/{{$user->id}}">{!!Form::button('View',array('class'=>'btn btn-xs btn-primary'))!!}</a>
                                    <a href="users/{{$user->id}}/edit">{!!Form::button('Edit',array('class'=>'btn btn-xs btn-warning'))!!}</a>
                                    {!!Form::submit('Delete',array('class'=>'btn  btn-xs btn-danger delete_btn'))!!}
                                    {!!Form::close()!!}  
                                    </td>
                                    <td>
                                         {{$user->id}}
                                    </td>

                                    <td>
                                         {{$user->name}}
                                    </td>
                                    <td>
                                         {{$user->email}}
                                    </td>
                                    <td>
                                         {{$user->admin}}
                                    </td>

                                    <td class="cd">
                                         {{$user->created_at}}
                                    </td>
                                     <td class="ud">
                                         {{$user->updated_at}}
                                    </td>

                                    </tr>
                                    </a>

           @endforeach
                            </table>
                           
                            </div>  {!! $users->render() !!} 
                        </div>
                    </div>
                </div>
@stop