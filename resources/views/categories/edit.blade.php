@extends('master.admin_dash_master')

@section('dash_content')          
                    <?php $loc='categories';?>
                    <div class="row">
                    <div class="col-lg-12">
                        <h2 class="page-header"><i class="glyphicon glyphicon-categories"></i>
                            {{$loc}}<span class="trail"> | Edit Category Details</span>
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
                            {!! Form::model($categories, ['class'=>"form_save",'method' => 'PATCH','route' => ['categories.update',$categories->id]]) !!}
                            <div class="detcon">
                            <table style="width:100%">
                            <tr class="odd"><td class="listlbl">Id</td><td>: {{$categories->id}}</td></tr>
                           <tr><td class="listlbl">Name</td><td>: {!!Form::text('name',null, array('placeholder' => 'Enter name here...','min' => '0', 'max' => '100','class' => 'searchbox','style'=>'font-size:16px;margin:5px;'))!!}</td></tr>
                           <tr class="odd"><td class="listlbl">Description</td><td>: {!!Form::textarea('description',null, array('placeholder' => 'Enter description here...','min' => '0', 'max' => '100','class' => 'searchbox','style'=>'font-size:18px'))!!}</td></tr>
                           
                           <tr><td class="bbut" colspan="2">
                           
                           <button type="button" class="btn  btn-info cancel_btn">Cancel</button>
                                                     
                           {!!Form::hidden('updated_at', date("Y-m-d H:m:s"))!!} 
                          {!!Form::submit('Save Settings',array('class'=>'btn  btn-primary .save_button'))!!}
                           </td></tr>
                            </table>
                            </div>       
                            {!!Form::close()!!}   
                            
                        </div>
                    </div>
                </div>
                 <div class="row">
                    <div class="col-lg-12">
   


                         
                            <div class="">
                                              <h2 ><a href="{{ URL::Asset('categories/create')}}" style="color:#4e4e4e;"><i class="glyphicon glyphicon-plus-sign" style="color:#5cb85c;"></i> Add a New Book</a></h2>
                            </div>
   
                    </div>
                </div>
@stop