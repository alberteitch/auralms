@extends('master.admin_dash_master')

@section('dash_content')          
                    <?php $loc='Members';?>
                    <div class="row">
                    <div class="col-lg-12">
                        <h2 class="page-header"><i class="glyphicon glyphicon-th-list"></i>
                            {{$loc}}<span class="trail"> | Create a Member</span>
                        </h2>


                    </div>
                </div>
 @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading" style="color:#efefef;background:#624871 !important">
                                <h3 class="panel-title"><i class="glyphicon glyphicon-leaf"></i> Book Details </h3>
                            </div>
                            {!! Form::open(array('route' => 'users.store','method'=>'POST','class'=>'form_save')) !!}
                            <div class="detcon">
                            <table style="width:100%">
                            <tr class="odd"><td class="listlbl">Name</td><td>: {!!Form::text('name',null, array('placeholder' => 'Enter firstname here...','min' => '0', 'max' => '100','class' => 'searchbox','style'=>'font-size:18px'))!!}</td></tr>
                            <tr><td class="listlbl">Email</td><td>: {!!Form::email('email',null, array('placeholder' => 'Enter email here...','min' => '0', 'max' => '100','class' => 'searchbox','style'=>'font-size:16px;margin:5px;'))!!}</td></tr>
                           <tr class="odd"><td class="listlbl">Contact no.</td><td>: {!!Form::text('contact',null, array('placeholder' => 'Enter contact here...','min' => '0', 'max' => '100','class' => 'searchbox','style'=>'font-size:18px'))!!}</td></tr>
                            <tr><td class="listlbl">Address</td><td>: {!!Form::textarea('address',null, array('placeholder' => 'Enter address here...','min' => '0', 'max' => '100','class' => 'searchbox','style'=>'font-size:16px;margin:5px;'))!!}</td></tr>
                           <tr class="odd"><td class="listlbl">City</td><td>: {!!Form::text('city',null, array('placeholder' => 'Enter city here...','min' => '0', 'max' => '100','class' => 'searchbox','style'=>'font-size:18px'))!!}</td></tr>
                            <tr><td class="listlbl">Country</td><td>: {!!Form::text('country',null, array('placeholder' => 'Enter country here...','min' => '0', 'max' => '100','class' => 'searchbox','style'=>'font-size:16px;margin:5px;'))!!}</td></tr>
                           <tr class="odd"><td class="listlbl">Zip</td><td>: {!!Form::text('zip',null, array('placeholder' => 'Enter zip here...','min' => '0', 'max' => '100','class' => 'searchbox','style'=>'font-size:18px'))!!}</td></tr>
                            <tr><td class="listlbl">Is Administrator</td><td>: {!! Form::select('admin', ['0'=>'false', '1'=>'true'],'in',['class' => 'searchbox','style'=>'']) !!}</td></tr>
                          <trclass="odd"><td class="listlbl">DOB</td><td>: {!!Form::date('country',null, array('placeholder' => 'Enter age here...','min' => '1', 'max' => '100','class' => 'searchbox','style'=>'font-size:16px;margin:5px;'))!!}</td></tr>
                          
                           <tr><td class="bbut" colspan="2">
                           
                           <button type="button" class="btn  btn-info cancel_btn">Cancel</button>
                           {!!Form::hidden('created_at', date("Y-m-d H:m:s"))!!}
                           {!!Form::hidden('updated_at', date("Y-m-d H:m:s"))!!}

                          {!!Form::submit('Save Changes',array('class'=>'btn  btn-primary .save_button'))!!}
                           </td></tr>
                            </table>
                            </div>       
                            {!!Form::close()!!}   
                            
                        </div>
                    </div>
                </div>

@stop