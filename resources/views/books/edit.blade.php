@extends('master.admin_dash_master')

@section('dash_content')          
                    <?php $loc='Books';?>
                    <div class="row">
                    <div class="col-lg-12">
                        <h2 class="page-header"><i class="glyphicon glyphicon-books"></i>
                            {{$loc}}<span class="trail"> | Edit Book Details</span>
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
                            {!! Form::model($books, ['class'=>"form_save",'method' => 'PATCH','route' => ['books.update',$books->id]]) !!}
                            <div class="detcon">
                            <table style="width:100%">
                        <tr class="odd"><td class="listlbl">Title</td><td>: {!!Form::text('title',null, array('placeholder' => 'Enter title here...','min' => '0', 'max' => '100','class' => 'searchbox','style'=>'font-size:18px'))!!}</td></tr>
                        <tr><td class="listlbl">Author</td><td>: {!!Form::text('author',null, array('placeholder' => 'Enter author here...','min' => '0', 'max' => '100','class' => 'searchbox','style'=>'font-size:18px'))!!}</td></tr>
                        <tr class="odd"><td class="listlbl">ISBN</td><td>: {!!Form::text('isbn',null, array('placeholder' => '0000000000000','min' => '0', 'max' => '100','class' => 'searchbox','style'=>'font-size:16px;margin:5px;'))!!}</td></tr>
                        <tr><td class="listlbl">Quantity</td><td>: {!!Form::number('quantities',null, array('placeholder' => '1','min' => '0', 'max' => '6000','class' => 'searchbox','style'=>'font-size:18px','size'=>'4','maxlength'=>'4'))!!}</td></tr>
                        <tr class="odd"><td class="listlbl">Shelf location</td><td>: {!!Form::text('shelf_location',null, array('placeholder' => 'Enter Shelf location here...','min' => '1', 'max' => '100','class' => 'searchbox','style'=>'font-size:18px','size'=>'3','maxlength'=>'3'))!!}</td></tr>

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
                                              <h2 ><a href="{{ URL::Asset('books/create')}}" style="color:#4e4e4e;"><i class="glyphicon glyphicon-plus-sign" style="color:#5cb85c;"></i> Add a New Book</a></h2>
                            </div>
   
                    </div>
                </div>
@stop