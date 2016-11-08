@extends('master.admin_dash_master')

@section('dash_content')          
                    <?php $loc='Administration';?>
                    <div class="row">
                    <div class="col-lg-12">
                        <h2 class="page-header"><i class="glyphicon glyphicon-eye-open"></i>
                            {{$loc}} <span class="trail"> & Maintenance</span>
                        </h2>


                    </div>
                </div>
       


                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div >


                         
                            <div class="panel-body">
                                              <h2 ><a href="#" style="color:#4e4e4e; font-weight:200;"><i class="glyphicon glyphicon-plus-sign" style="color:#5cb85c;"></i> Import Data</a></h2>
                            </div>
                        </div>
                    </div>
                </div>

@stop