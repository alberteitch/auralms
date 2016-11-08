@extends('master.admin_dash_master')

@section('dash_content')          
                    <?php $loc='Categories';?>
                    <div class="row">
                    <div class="col-lg-12">
                        <h2 class="page-header"><i class="glyphicon glyphicon-th-list"></i>
                            {{$loc}}<span class="trail"> | Create a Category</span>
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
                            {!! Form::open(array('route' => 'categories.store','method'=>'POST','class'=>'form_save')) !!}
                            <div class="detcon">
                            <table style="width:100%">
                           <tr><td class="listlbl">Name</td><td>: {!!Form::text('name',null, array('placeholder' => 'Enter name here...','min' => '0', 'max' => '100','class' => 'searchbox','style'=>'font-size:16px;margin:5px;'))!!}</td></tr>
                           <tr class="odd"><td class="listlbl">Description</td><td>: {!!Form::textarea('description',null, array('placeholder' => 'Enter title here...','min' => '0', 'max' => '100','class' => 'searchbox','style'=>'font-size:18px'))!!}</td></tr>
                        
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