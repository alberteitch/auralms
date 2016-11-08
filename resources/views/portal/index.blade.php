@extends('portal.portal_master')

@section('page_content') 


      


    <!-- Main jumbotron for a primary marketing message or call to action -->
    <?php $loc="Home"; ?>
    <div class="jumbotron" style="color:#fff;background:url('images/libback.png')!important;">
      <div class="container">
        <h1 class="display-3"><span style="font-weight:200;">Welcome to</span> Aura-LMS!<small style='color:#efefef;font-weight:200;'>&nbsp;Demo Exercise</small></h1>
        <p>A Simple Library System</p>
        <p><a class="btn btn-primary btn-lg" href="{{ URL::Asset('search/all')}}" role="button">Search for Books &raquo;</a></p>
      </div>
    </div>

    <div class="container">

      <!-- Example row of columns -->
       <div class="row">
       <div style="padding:5px;margin:10px;font-size:18px;">
       <span style="font-weight:600;color:#624871 !important;">Featured</span> Literature
       </div>
       </div>
      <div class="row">
      <div class="panel-default"></div>

    @foreach($books as $book)
    <a href="{{ URL::Asset('search')}}/id/{{$book->id}}" style="color:#624871 !important;">
        <div class="col-md-4" style="margin-bottom:10px;background:#efefef;">
          <h2 style="border-bottom:#aaa thin solid;font-weight:100px;">{{$book->id}} | {{$book->title}}</h2>
          <div class="glyphicon glyphicon-th-large" style="background:min-heigh:100px;width:100%;font-size:30px;color:#624871 !important;">&nbsp;</div>
          <p>{{$book->author}}</p>
        </div>
	</a>
    @endforeach
      </div>

      <hr>

   
      <footer>
        <p>&copy; Aura-LMS 2016</p>
      </footer>
    </div> <!-- /container -->


  



@stop