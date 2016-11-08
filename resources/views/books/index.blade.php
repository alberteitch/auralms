@extends('master.admin_dash_master')

@section('dash_content')          
                    <?php $loc='Books';?>
                    <div class="row">
                    <div class="col-lg-12">
                        <h2 class="page-header"><i class="glyphicon glyphicon-book"></i>
                            Book <span class="trail"> | Management</span>
                        </h2>


                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                            <div class="searchcontainer">
                                <div class="checkbox field_con">
                                 {!!Form::open(['action' => ['Books@asearchr']])!!}
                                <table><tr><td>
                                                           
                                {!! Form::select('key', ['id' => 'id', 'title' => 'title','author'=>'author'], 'key',['class'=>'form-control srcselector','style'=>'width:100px;']);!!}
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

                <div class="row book_panel" style="display:none;">
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="bitems glyphicon glyphicon-star"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">26</div>
                                        <div>New Books</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="bitems glyphicon glyphicon-book"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">12</div>
                                        <div>Available Books</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="bitems glyphicon glyphicon-bookmark"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">124</div>
                                        <div>Books on Loan</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="bitems glyphicon glyphicon-flag"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">13</div>
                                        <div>Overdue Books</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div >


                         
                            <div class="panel-body">
                                              <h2 ><a href="{{ URL::Asset('books/create')}}" style="color:#4e4e4e;"><i class="glyphicon glyphicon-plus-sign" style="color:#5cb85c;"></i> Add a New Book</a></h2>
                            </div>
                        </div>
                    </div>
                </div>
                    @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>
                    @endif
                    @if($count=='0')
                    <div class="alert alert-danger">
                                <p>No records found!</p>
                            </div>
                    @endif
                <div class="row" style="margin:0px">
                    <div class="col-lg-12">
                        <div class="panel panel-default" >
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="glyphicon glyphicon-list-alt"></i> List Books</h3>
                            </div>

                            <table class="listtable" style="width:100%">
                                    <tr class="toprow">
                                    <td class="coluna">
                                         Actions
                                    </td>
                                     <td>
                                         Id
                                    </td>
                                    <td>
                                         Title
                                    </td>
                                    <td>
                                         Author
                                    </td>
                                    <td class="cd">
                                         ISBN
                                    </td>
                                    <td>
                                         Avail./Total
                                    </td>
                                    <td class="cd">
                                         Shelf Location
                                    </td>
                                    <td class="ud">
                                         Last updated
                                    </td>
                                    </tr>
                            @foreach($books as $book)
                                    
                                    <tr>
                                    <td class="action_col coluna">
                                    <style>.btn-xs{margin:3px 0px !important;}</style>
                                    {!! Form::model($books, ['class'=>"form_delete",'method' => 'DELETE','route' => ['books.destroy',$book->id]]) !!}
                                    <a href="{{ URL::Asset('books')}}/{{$book->id}}">{!!Form::button('View',array('class'=>'btn btn-xs btn-primary'))!!}</a>
                                    <a href="books/{{$book->id}}/edit">{!!Form::button('Edit',array('class'=>'btn btn-xs btn-warning'))!!}</a>
                                    
                                    {!!Form::submit('Delete',array('class'=>'btn  btn-xs btn-danger delete_btn'))!!}
                                    {!!Form::close()!!}  


                                    </td>
                                    <td >
                                         {{$book->id}}
                                    </td>
                                    <td>
                                         {{$book->title}}
                                    </td>
                                    <td>
                                         {{$book->author}}
                                    </td>
                                    <td class="cd">
                                         {{$book->isbn}}
                                    </td>

                                    <td >
                                    <?php
                                        $bco=DB::table('checkouts')->where('book','=',$book->id)->where('toggle','=',false)->count(); 
                                        $btqty=$book->quantities;
                                        $avail=$btqty-$bco;
                                          echo  $avail.'/'.$btqty; 
                                     ?>
                                    </td>
                                    <td class="cd">
                                         {{$book->shelf_location}}
                                    </td>
                                     <td class="ud">
                                         {{$book->updated_at}}
                                    </td>
                                    </tr>
                                    
                            @endforeach
                            </table>
                        
                            
                            </div>{!! $books->render() !!}
                        </div>
                    </div>
                </div>
                
@stop