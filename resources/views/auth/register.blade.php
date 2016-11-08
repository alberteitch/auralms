@extends('master.top')
@section('page_content')   

<!-- resources/views/auth/register.blade.php -->
<div class="quote"><h3>Member Registration</h3></div>

<form method="POST" action="/auth/register">
    {!! csrf_field() !!}

    <div class="field_con">
        Name
        <input type="text" name="name" value="{{ old('name') }}" class="form-control">
    </div>

    <div class="field_con">
        Email
        <input type="email" name="email" value="{{ old('email') }}" class="form-control">
    </div>

    <div class="field_con">
        Password
        <input type="password" name="password" class="form-control">
    </div class="field_con">

    <div class="field_con">
        Confirm Password
        <input type="password" name="password_confirmation" class="form-control">

    </div>

    <div class="field_con">
        <button class="btn btn-lg btn-success btn-block" type="submit" style="margin-top:20px;">Register</button>
    </div>
</form>
Back to the {!! link_to_action('Auth\AuthController@getLogin', $title = 'login', $parameters = [], $attributes = ['class'=>""]); !!} page.
@stop