@extends('master.admin_dash_master')

@section('dash_content')          
                    <?php $loc='Categories';?>
                    <div class="row">
                    <div class="col-lg-12">
                        <h2 class="page-header"><i class="glyphicon glyphicon-th-list"></i>
                            {{$loc}}<span class="trail"> | View Category Details</span>
                        </h2>


                    </div>
                </div>


                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading" style="color:#efefef;background:#624871 !important">
                                <h3 class="panel-title"><i class="glyphicon glyphicon-leaf"></i> category Details </h3>
                            </div>
                            {!! Form::model($categories, ['class'=>"form_delete",'method' => 'DELETE','route' => ['categories.destroy',$categories->id]]) !!}
                            <div class="detcon">
                            <table style="width:100%">
                            <tr class="odd"><td class="listlbl">Id</td><td>: {{$categories->id}}</td></tr>
                           <tr><td class="listlbl">Category</td><td>: {{$categories->name}}</td></tr>
                           <tr class="odd"><td class="listlbl">Description</td><td>: {{$categories->description}}</td></tr>
                           <tr><td class="bbut" colspan="2">
                           <a href="{{ URL::Asset('categories')}}">
                           <button type="button" class="btn  btn-info"><< Back to categories</button></a>
                           <button type="button" class="btn  btn-primary">View Last User</button>
                           <a href="./{{$categories->id}}/edit"><button type="button" class="btn  btn-warning">Edit</button>
                           {!!Form::submit('Delete',array('class'=>'btn  btn-danger .delete_btn'))!!}
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
                                              <h2 ><a href="{{ URL::Asset('categories/create')}}" style="color:#4e4e4e;"><i class="glyphicon glyphicon-plus-sign" style="color:#5cb85c;"></i> Add a New category</a></h2>
                            </div>
   
                    </div>
                </div>
@stop