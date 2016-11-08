@extends('master.top')
@section('page_content')   

<!-- resources/views/auth/login.blade.php -->

<div class="quote"><h3>Please sign in</h3></div>

<form method="POST" action="/auth/login">
    {!! csrf_field() !!}

    <div class="field_con">
        Email
        <input type="email" name="email" value="{{ old('email') }}" class="form-control">
    </div>

    <div class="field_con">
        Password
        <input type="password" name="password" id="password" class="form-control">
    </div>

    <div class="checkbox field_con">
        <input type="checkbox" name="remember"> Remember Me
    </div>

    <div>
        <button class="btn btn-lg btn-success btn-block" type="submit">Login</button>
    </div>
</form>
No account yet? Click {!! link_to_action('Auth\AuthController@getRegister', $title = 'here', $parameters = [], $attributes = ['class'=>""]); !!} to register.
@stop