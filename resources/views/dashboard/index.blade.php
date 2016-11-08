@extends('master.admin_dash_master')

@section('dash_content')          
                    <?php $loc='Dashboard';?>
                    <div class="row">
                    <div class="col-lg-12 headercol">
                        <h2 class="page-header"><i class="glyphicon glyphicon-dashboard"></i>
                            {{$loc}} <span class="trail"> | Welcome</span>
                        </h2>


                    </div>
                </div>
                <style>.panel>.panel-heading{height:200px;font-size:40px;}.bitems{font-size:60px;}.inst{margin:10px !important;}</style>
<div class='inst'>Please click on one of the choices below to start.</div>
                <div class="row" style="margin-top:0px;" >
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                        
                            <div class="panel-heading" onclick="window.location.assign('{{ URL::Asset('books')}}')">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="bitems glyphicon glyphicon-book"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">Books</div>
                                         
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-yellow">
                            <div class="panel-heading" onclick="window.location.assign('{{ URL::Asset('users')}}')">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="bitems glyphicon glyphicon-user"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">Members</div>
                                        
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-red">
                            <div class="panel-heading" onclick="window.location.assign('{{ URL::Asset('settings')}}')">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="bitems glyphicon glyphicon-cog"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">Settings</div>
                                        
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <!-- /.row -->

                
@stop