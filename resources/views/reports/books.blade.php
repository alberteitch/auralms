@extends('master.dm_lite')

@section('page_content') 
<?php $loc="books"; $count=DB::table('books')->orderby('id','DESC')->count(); $books=DB::table('books')->orderby('id','DESC'); ?>         
<div class="container">
                     <?php $loc='books';?>
                    <div class="row" style="border-bottom:thin solid #aaa;margin:0px -15px;">
                    <div class="col-lg-12">
                        <h2 class="page-header" style="float:left;border:none;"><i class="glyphicon glyphicon-item"></i>
                            Book <span class="trail"> | Books</span>
                        </h2>                     <h5 class="page-header" style="float:right;border:none;bottom:0px;margin:0px -15px;background:#ccc;color:#333;padding:5px;"> 
                                                       books <span class="trail"> <?php 

                            $userid=Auth::user()->id;

                            echo $bbbu=DB::table('checkouts')->where('user','=',$userid)->where('toggle','=',false)->count();
                            ?>
                            of 




                            <?php
                            $date1=date_create(DB::table('users')->where('id','=',$userid)->pluck('dob'));
                            $date2=date_create(date("Y-m-d "));
                            $diff=date_diff($date1,$date2);
                             $diffs = $diff->format("%y");
                             //echo $diffs.' years';
                            if($diffs>12){
                                $blimit=6;
                            
                            }else{
                                $blimit=3;
                                
                            }

                            echo $blimit;

                            

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
                                <h3 class="panel-title"><i class="glyphicon glyphicon-list-alt"></i> books </h3>
                            </div>

                            <table class="listtable" style="width:100%">
                                    <tr class="toprow">
                                    <td>
                                         Actions
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
                                    <td>
                                        Days Elapsed 
                                     <td>
                                         Penalty
                                    </td>
                                    <td class="cd">
                                         books by
                                    </td>
                                    <td class="cd">
                                        books on
                                    </td>

                                    
                                    </tr>
                                   <?php $tpen=0; ?>
                            @foreach($glob as $item)
                                    
                                    <tr>
                                    <td class="action_col" style="text-align:center;">
                                    <style>.btn-xs{margin:3px 0px !important;}</style>
                                    <?php
                            $date1=date_create($item->checked_out);
                            $date2=date_create(date("Y-m-d "));
                            $diff=date_diff($date1,$date2);
                             $diffs = $diff->format("%a");
                               $th=DB::table('settings')->where('id','=',1)->pluck('threshold');
                                    $pn=DB::table('settings')->where('id','=',1)->pluck('penalty');

                                    if($th<$diffs){

                                        $dmulti=$diffs-$th;
                                        $penalty=$dmulti*$pn;
                                    } 
                                    else{

                                        $penalty=0.00;

                                    }
                                  
                                   ?>
                                    <a href="{{ URL::Asset('return')}}/{{$item->id}}/{{$item->user}}/{{$penalty}}">{!!Form::button('Return',array('class'=>'btn btn-xs btn-danger'))!!}</a>

                                    
                               
                                
                                    
                                    
                                     <!--    {!!Form::number('name', '1',['min'=>'1','max'=>'500','size'=>'3','style'=>'width:50px;margin-left:5px;border-radius:5px;border:thin solid #aaa']);!!}
                                   <a href="books/{{$item->id}}/edit">{!!Form::button('Edit',array('class'=>'btn btn-xs btn-warning'))!!}</a>
                                    
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
                                     

                                    <td>
                                        <?php

                             echo $diffs.' days';

                                      ?>

                                    </td><td>
                                    <?php
                                    $tpen=$tpen+$penalty;
                                    echo '$ '.$penalty;

                                        ?>
                                      </td> 
                                    <td class="ud">
                                          <?php  echo DB::table('users')->where('id','=',$item->user)->pluck('name'); ?>
                                    </td>
                                    </td>
                                     <td class="cd">
                                         {{$item->checked_out}}
                                    </td>

   
                              
                                    </tr>
                                    
                            @endforeach
                                                        <tr class="toprow">
                                    <td>
                                         Totals
                                    </td>
                                     <td>
                                         
                                    </td>
                                    <td>
                                         
                                    </td>
                                    <td>
                                        
                                    </td>
                                    <td>
                                       
                                     <td>
                                          $ {{$tpen}}
                                    </td>
                                    <td class="cd">
                                         
                                    </td>
                                    <td class="cd">
                                        
                                    </td>

                    
                                    </tr>
                            </table>
                        
                            
                            </div>{!! $books->render() !!}
                        </div>
                    </div>
                </div>
                </div>
@stop