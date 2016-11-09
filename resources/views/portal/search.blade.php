@extends('portal.portal_master')

@section('page_content') 
<?php $loc="Book search"; ?>         
<div class="container">
                     <?php $loc='Books';?>
                    <div class="row" style="border-bottom:thin solid #aaa;margin:0px -15px;">
                    <div class="col-lg-12">
                        <h2 class="page-header" style="float:left;border:none;"><i class="glyphicon glyphicon-book"></i>
                            Book <span class="trail"> | Search</span>
                        </h2>                     <h5 class="page-header" style="float:right;border:none;bottom:0px;margin:0px -15px;background:#ccc;color:#333;padding:5px;"> 
                                                       Borrowed <span class="trail"> <?php 

                          $userid=Auth::user()->id;
                            $isadmin=Auth::user()->admin;
                            $date1=date_create(DB::table('users')->where('id','=',1)->pluck('dob'));
                            $date2=date_create(date("Y-m-d "));
                            $diff=date_diff($date1,$date2);
                             $diffs = $diff->format("%y");
                             //echo $diffs.' years';

                            if($diffs>12){
                                $blimit=6;
                            
                            }else{
                                $blimit=3;
                                
                            }

                            if($isadmin){
                                echo $bbbu=DB::table('checkouts')->where('toggle','=',false)->count();

                            }else{
                                echo $bbbu=DB::table('checkouts')->where('user','=',$userid)->where('toggle','=',false)->count();
                                echo " of ";
                                echo $blimit;}
                            ?>
                            




                        </span>
                        </h5>


                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                            <div class="searchcontainer">
                                <div class="checkbox field_con">
                                {!!Form::open(['action' => ['Books@searchr']])!!}
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
                <div class="row" style="margin:0px">
                    <div class="col-lg-12">
                        <div class="panel panel-default" >
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="glyphicon glyphicon-list-alt"></i> List Books</h3>
                            </div>

                            <table class="listtable" style="width:100%">
                                    <tr class="toprow">
                                    <td>
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
                                         Update Date
                                    </td>
                                    </tr>
                            @foreach($books as $book)
                                    
                                    <tr>
                                    <td class="action_col" style="text-align:center;">
                                    <style>.btn-xs{margin:3px 0px !important;}</style>


                                    <?

                                         $bco=DB::table('checkouts')->where('book','=',$book->id)->where('toggle','=',false)->count(); 
                                        $btqty=$book->quantities;
                                    
                                    if (!$isadmin){
                                    if($bbbu<$blimit) { 

                                        if($bco<$btqty){



                                        ?>

                                    <a href="{{ URL::Asset('get')}}/{{$book->id}}">{!!Form::button('Borrow 1',array('class'=>'btn btn-xs btn-primary'))!!}</a>

                                     <?} else {?>

                                     <span class="btn_plc">None available!<span>
                                     
                                     <?}

                                    }else{ 

                                        ?>
                                     <span class="btn_plc">Limit reached!<span>
                                   
                                    <? }}else{
                                        if($bco<$btqty){



                                        ?>

                                    <a href="{{ URL::Asset('get')}}/{{$book->id}}">{!!Form::button('Borrow 1',array('class'=>'btn btn-xs btn-primary'))!!}</a>

                                     <?} else {?>

                                     <span class="btn_plc">None available!<span>
                                     
                                     <?}}?>
                                    
                                    
                                     <!--    {!!Form::number('name', '1',['min'=>'1','max'=>'500','size'=>'3','style'=>'width:50px;margin-left:5px;border-radius:5px;border:thin solid #aaa']);!!}
                                   <a href="books/{{$book->id}}/edit">{!!Form::button('Edit',array('class'=>'btn btn-xs btn-warning'))!!}</a>
                                    
                                    {!!Form::submit('Delete',array('class'=>'btn  btn-xs btn-danger delete_btn'))!!}-->
                                    


                                    </td>
                                    <td>
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
                </div>
@stop