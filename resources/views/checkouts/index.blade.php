@extends('master.admin_dash_master')

@section('dash_content')          
                    <?php $loc='Categories';?>
                    <div class="row">
                    <div class="col-lg-12">
                        <h2 class="page-header"><i class="glyphicon glyphicon-th-list"></i>
                            Category <span class="trail">| Management</span>
                        </h2>


                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                            <div class="searchcontainer">
                            <input type="text" placeholder="Category Search" class=" searchbox"><span id="sglyph" class="glyphicon glyphicon-search" aria-hidden="true" style="margin-right:10px;"></span>
                            </div>
                    </div>
                </div>

                @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
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
                                              <h2 ><a href="{{ URL::Asset('categories/create')}}" style="color:#4e4e4e;"><i class="glyphicon glyphicon-plus-sign" style="color:#5cb85c;"></i> Add a New Category</a></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="glyphicon glyphicon-list-alt"></i> List All Categories</h3>
                            </div>
                             <table class="listtable">
                                    <tr class="toprow">
                                    <td>
                                         Actions
                                    </td>
                                     <td>
                                         Id
                                    </td>
                                    <td>
                                         Name
                                    </td>
                                    <td>
                                         Description
                                    </td>
                                    <td>
                                         Create date
                                    </td>
                                    <td>
                                         Update date
                                    </td>
                                    </tr>
                            @foreach($categories as $category)
                                    
                                    <tr>
                                    <td class="action_col">
                                         <style>.btn-xs{margin:3px 0px !important;}</style>
                                    {!! Form::model($categories, ['class'=>"form_delete",'method' => 'DELETE','route' => ['categories.destroy',$category->id]]) !!}
                                    <a href="{{ URL::Asset('categories')}}/{{$category->id}}">{!!Form::button('View',array('class'=>'btn btn-xs btn-primary'))!!}</a>
                                    <a href="categories/{{$category->id}}/edit">{!!Form::button('Edit',array('class'=>'btn btn-xs btn-warning'))!!}</a>
                                    {!!Form::submit('Delete',array('class'=>'btn  btn-xs btn-danger delete_btn'))!!}
                                    {!!Form::close()!!}  
                                    </td>
                                    <td>
                                         {{$category->id}}
                                    </td>
                                    <td>
                                         {{$category->name}}
                                    </td>
                                    <td>
                                         {{$category->description}}
                                    </td>
                                    <td>
                                         {{$category->created_at}}
                                    </td>
                                    <td>
                                         {{$category->updated_at}}
                                    </td>

                                    </tr>
                                    </a>
                            @endforeach
                            </table>
                             
                        </div> {!! $categories->render() !!} 

                    </div>
                </div> 
               
                                <div class="row" style="display:none;">
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="bitems glyphicon glyphicon-star"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">Most Popular Categories</div>
                                        <div></div>
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
                                        <div class="huge">Least Popular Categories</div>
                                        <div></div>
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
@stop