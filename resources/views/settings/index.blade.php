@extends('master.admin_dash_master')

@section('dash_content')          
                    <?php $loc='Settings';?>
                    <div class="row">
                    <div class="col-lg-12">
                        <h2 class="page-header"><i class="glyphicon glyphicon-cog"></i>
                            System <span class="trail"> | Settings</span>
                        </h2>


                    </div>
                </div>
                                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            
                        <!--<form name="settings" action="settings/store" method="post">
                    
                            <div class="detcon">
                            <table style="width:100%">
                            <tr class="odd"><td class="listlbl">Overdue Threshold</td><td>: &nbsp;  &nbsp; days</td></tr>
                           <tr ><td class="listlbl">Penalty</td><td>: $  per day</td></tr>
                           <tr><td class="bbut" colspan="2">
                           <a href="{{ URL::Asset('settings')}}">
                           
                           <input type="submit" class="btn  btn-primary" value="Save Settings">
                          
                           </td></tr>
                            </table>
                            </div> 
                     -->


    {!! Form::model($settings, ['class'=>"form_save",'method' => 'PATCH','route' => ['settings.update', $settings->threshold,$settings->penalty]]) !!}

                     
                            <div class="detcon">
                            <table style="width:100%">
                            <tr class="odd"><td class="listlbl">Overdue Threshold</td><td>: &nbsp; &nbsp;{!!Form::number('threshold',null, array('placeholder' => '0','min' => '0', 'max' => '100','class' => 'searchbox','size'=>'3','style'=>'font-size:18px'))!!}  days</td></tr>
                           <tr ><td class="listlbl">Penalty</td><td>: $ {!!Form::number('penalty',null, array('placeholder' => '0','min' => '0', 'max' => '100','class' => 'searchbox','size'=>'3','style'=>'font-size:18px'))!!} per day</td></tr>
                           <tr><td class="bbut" colspan="2">
                           <a href="{{ URL::Asset('settings')}}">
                           
                            {!!Form::submit('Save Settings',array('class'=>'btn  btn-primary .save_button'))!!}
                          
                           </td></tr>
                            </table>
                            </div> 
                              
                             {!!Form::close()!!} 
                             
                              
                              


                              <div id="myModal" class="modal">

                                <!-- Modal content -->
                                <div class="modal-content">
                                  <span class="close">×</span>
                                  <p>Some text in the Modal..</p>
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
@stop