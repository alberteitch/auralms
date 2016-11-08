@extends('master.admin_dash_master')

@section('dash_content')          
                    <?php $loc='Books';?>
                    <div class="row">
                    <div class="col-lg-12">
                        <h2 class="page-header"><i class="glyphicon glyphicon-books"></i>
                            {{$loc}}<span class="trail"> | View Book Details</span>
                        </h2>


                    </div>
                </div>


                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading" style="color:#efefef;background:#624871 !important">
                                <h3 class="panel-title"><i class="glyphicon glyphicon-leaf"></i> Book Details </h3>
                            </div>
                            {!! Form::model($books, ['class'=>"form_delete",'method' => 'DELETE','route' => ['books.destroy',$books->id]]) !!}
                            <div class="detcon">
                            <table style="width:100%">
                          <tr class="odd"><td class="listlbl">Id</td><td>: {{$books->id}}</td></tr>
                          <tr><td class="listlbl">Title</td><td>: {{$books->title}}</td></tr>
                          <tr class="odd"><td class="listlbl">Author</td><td>: {{$books->author}}</td></tr>
                          <tr><td class="listlbl">ISBN</td><td>: {{$books->isbn}}</td></tr>
                          <tr class="odd"><td class="listlbl">Qty.</td><td>: {{$books->quantities}}</td></tr>
                          <tr><td class="listlbl">Shelf location</td><td>: {{$books->shelf_location}}</td></tr>
                          <tr class="odd"><td class="listlbl">Created date</td><td>: {{$books->created_at}}</td></tr>
                           <tr class="odd"><td class="listlbl">Update date</td><td>: {{$books->updated_at}}</td></tr>
                          <tr><td class="bbut" colspan="2">
                           <a href="{{ URL::Asset('books')}}">
                           <button type="button" class="btn  btn-info"><< Back to Books</button></a>
                           <button type="button" class="btn  btn-primary">View Report</button>
                           <a href="./{{$books->id}}/edit"><button type="button" class="btn  btn-warning">Edit</button></a>
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
                                              <h2 ><a href="{{ URL::Asset('books/create')}}" style="color:#4e4e4e;"><i class="glyphicon glyphicon-plus-sign" style="color:#5cb85c;"></i> Add a New Book</a></h2>
                            </div>
   
                    </div>
                </div>
@stop