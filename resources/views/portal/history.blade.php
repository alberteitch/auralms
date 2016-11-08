@extends('portal.portal_master')

@section('page_content')   
<?php $loc="History"; ?>       
<div class="container">
                     <?php $loc='borrowed';?>
                    <div class="row" style="border-bottom:thin solid #aaa;margin:0px -15px;">
                    <div class="col-lg-12">
                        <h2 class="page-header" style="float:left;border:none;"><i class="glyphicon glyphicon-item"></i>
                            Transaction <span class="trail"> | History</span>
                        </h2>                     <h5 class="page-header" style="float:right;border:none;bottom:0px;margin:0px -15px;background:#ccc;color:#333;padding:5px;"> 
                                                       Count <span class="trail"> <?php 

                            $userid=Auth::user()->id;
                            $userid=1;

                            echo $bbbu=DB::table('checkouts')->where('user','=',$userid)->count();
                            ?>





                            



                        </span>
                        </h5>


                    </div>
                </div>


                <!-- /.row -->

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
                <div class="row" style="margin:0px;margin-top:20px;">
                    <div class="col-lg-12">
                        <div class="panel panel-default" >
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="glyphicon glyphicon-list-alt"></i> Borrowed </h3>
                            </div>

                            <table class="listtable" style="width:100%">
                                    <tr class="toprow">
                                    <td>
                                         Row Count
                                    </td>
                                     <td>
                                         Trans Id
                                    </td>
                                    <td>
                                         Title
                                    </td>
                                    <td>
                                        Author
                                    </td>

                                    <td class="cd">
                                         Borrowed by
                                    </td>
                                    <td class="cd">
                                        Borrowed on
                                    </td>
                                     <td class="cd">
                                        returned on
                                    </td>

                    
                                    </tr>
                                   <?php $tpen=0; $rowcnt=0;?>
                            @foreach($borrowed as $item)
                                    
                                    <tr>
                                    <td class="action_col" style="text-align:center;">
                                    <style>.btn-xs{margin:3px 0px !important;}</style>

                                     {{++$rowcnt}}
                                  
                     
                                    
                               
                                
                                    
                                    
                                     <!--    {!!Form::number('name', '1',['min'=>'1','max'=>'500','size'=>'3','style'=>'width:50px;margin-left:5px;border-radius:5px;border:thin solid #aaa']);!!}
                                   <a href="borrowed/{{$item->id}}/edit">{!!Form::button('Edit',array('class'=>'btn btn-xs btn-warning'))!!}</a>
                                    
                                    {!!Form::submit('Delete',array('class'=>'btn  btn-xs btn-danger delete_btn'))!!}-->
                                    {!!Form::close()!!}  


                                    </td>
                                    <td>
                                         {{$item->id}}
                                    </td>
                                    <td>
                                          <?php  echo 'id '.DB::table('books')->where('id','=',$item->book)->pluck('id'); echo ' | '.DB::table('books')->where('id','=',$item->book)->pluck('title');?>
                                    </td>
                                    <td>
                                         <?php  echo DB::table('books')->where('id','=',$item->book)->pluck('author'); ?>
                                  
                                    </td>
                                     

                 
                                    <td class="ud">
                                          <?php  echo DB::table('users')->where('id','=',$item->user)->pluck('name'); ?>
                                    </td>
                                    </td>
                                     <td class="cd">
                                         {{$item->checked_out}}
                                    </td>
                                     <td class="cd">
                                         {{$item->returned}}
                                    </td>
   
                              
                                    </tr>
                                    
                            @endforeach
                            </table>
                        
                            
                            </div>{!! $borrowed->render() !!}
                        </div>
                    </div>
                </div>
                </div>
@stop