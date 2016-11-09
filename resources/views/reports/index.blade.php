@extends('master.admin_dash_master')

@section('dash_content')          
                    <?php $loc='Reports';?>
                    <div class="row">
                    <div class="col-lg-12">
                        <h2 class="page-header"><i class="glyphicon glyphicon-signal"></i>
                            {{$loc}} <span class="trail"> | Overview</span>
                        </h2>


                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                            <div class="searchcontainer">
                            <input type="text" placeholder="Book Search" class=" searchbox"><span id="sglyph" class="glyphicon glyphicon-search" aria-hidden="true" style="margin-right:10px;"></span>
                            </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-md-6">

                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="bitems glyphicon glyphicon-star"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">Book Balances</div>
                                        <div></div>
                                    </div>
                                </div>
                            </div>
                            <a href="{{URL::Asset('search/all')}}">
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
                                        <div class="huge">Books on Loan</div>
                                        <div></div>
                                    </div>
                                </div>
                            </div>
                            <a href="{{URL::Asset('borrow')}}">
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

               <!-- <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="glyphicon glyphicon-list-alt"></i> Report</h3>
                            </div>
                            <div class="panel-body">
                                <div id="morris-area-chart"></div>
                            </div>
                        </div>
                    </div>
                </div>-->
@stop