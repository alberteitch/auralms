@extends('reset_layout')
    @section('reset_content')    <div class="container">
            <div class="content">
                <div class="title"><span class="glyphicon glyphicon-fire" aria-hidden="true" style="margin-right:10px;"></span>Aura-LMS</div>
                <div class="quote"><h3>Please sign in</h3></div>
            
                <div>
                     <form class="form-signin">
                        
                        <label for="inputEmail" class="sr-only">Email address</label>
                        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus><br/>
                        <label for="inputEmail" class="sr-only">Password</label>
                        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>

                        <div class="checkbox">
                          <label>
                            <input type="checkbox" value="remember-me"> Remember me
                          </label>
                        </div>
                        <button class="btn btn-lg btn-success btn-block" type="submit">Sign in</button>
                      </form>
                        {!! Form::open(array('route' => 'users.store','method'=>'POST','class'=>'form_save')) !!}
                        {!!Form::password('zip1',null, ["id"=>"insputPassword",'placeholder' => 'Enter zip here...','class' => 'form-control','style'=>''])!!}
                        {!!Form::text('zip1',null, array("type"=>"password","id"=>"insputPassword",'placeholder' => 'Enter zip here...','class' => 'form-control','style'=>''))!!}
                        {!!Form::password('zip2',null, array('id'=>"inputPassword",'placeholder' => 'Enter zip here...','class' => 'form-control','style'=>''))!!}
                        {!!Form::password('zip3', ['id'=>"inputPassword",'placeholder' => 'Enter zip here...','class' => 'form-control','style'=>''])!!}
                        {!!Form::password('password', ['class' => 'form-control','style'=>'','placeholder'=>'Password'])!!}
                        {!! Form::close() !!}
                </div>

            </div>
        </div>
 

         

    

 @stop