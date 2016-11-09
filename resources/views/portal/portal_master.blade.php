
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Jumbotron Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->

    <link href="{{ URL::Asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ URL::Asset('css/list.css')}}" rel="stylesheet">

        <style>
    body{
      font-weight:400;
        color:#4e4e4e;
    }
    a{
        text-decoration:none !important;
        font-weight:200 !important;
    }
    a:hover{
        color:#337ab7 !important;
        
    }
    .navbar-default, .navbar-collapse{
      background:none;
      border:none!important;
    }
    .navbar-nav{
      margin:0px -15px !important;
    }
    .navbar-nav>li>a{
      color:#eee !important;
    }
    .navbar-nav>li>a:hover{
      background:#543b63 !important;
    }
    .navbar-inverse .navbar-nav>li>a{
        margin-left:20px;
    }
    .navbar-inverse .navbar-nav>li>a:hover{
        color:#fff !important;
        border:none!important;
        background:#553965 !important;
    }
    #auralogo{
      height:40px;
      margin-top:-10px;
      
    }
    .nav-brand{
      width:200px !important;
      
    }
    .nav-bar, .navbar-inverse{
      border:none!important;
    }
    .navbar-brand{
      color:#fff!important;
    }
    .side-nav{
      background:#606060 !important;
    }
    .navbar-inverse .navbar-nav>li>a{
      color:#fff;
      font-weight:400;
      border-bottom:thin solid #777;
    }
.navbar-inverse .navbar-nav>.active>a{
  background:#4e4e4e !important;
}
.navbar-inverse {
    background:#624871 !important;
    border-color:#765b86 !important;

}
#sglyph{

    color:#eee !important;
    font-size:20px;
    border:thin solid #5cb85c;
    padding:12px;
    margin-left:5px;
    border-radius: 5px;
    background:#5cb85c;


}
.searchbox{
   
    border-radius: 5px;
    border:thin solid #777;
    background:#eee;
    font-size:24px;
    padding: 5px;
    padding-left:10px;


}
.searchcontainer{ margin-bottom:20px;}
.bitems{
    font-size:40px;
    margin-left:5px;
    margin-top:10px;
}
.page-header{
    margin-top:15px !important;
    border-bottom:thin solid #bdbdbd;
}
.trail{
    font-weight:200;
}
.nav-item{
  
}
.navbar-default .navbar-nav>.active>a{
  background:#4e4e4e !important;
}
.featimg{
background:url('images/37857583-book-image.jpg');
}
    </style>
    <style>
    body{
      font-weight:200;
        color:#4e4e4e;
    }
    a{
        text-decoration:none !important;
        font-weight:200 !important;
    }
    a:hover{
        color:#337ab7 !important;
        
    }
    .navbar-inverse .navbar-nav>li>a:hover{
        color:#fff !important;
    }
    #auralogo{
      height:40px;
      margin-top:-10px;
      
    }
    .nav-brand{
      width:200px !important;
    }

    .side-nav{
      background:#606060 !important;
    }
    .navbar-inverse .navbar-nav>li>a{
      color:#fff;
      font-weight:400;
      border-bottom:thin solid #777;
    }
.navbar-inverse .navbar-nav>.active>a{
  background:#4e4e4e !important;
}
.navbar-inverse {
    background:#624871 !important;
    border-color:#765b86 !important;
}
#sglyph{

    color:#eee !important;
    font-size:15    px;
    border:thin solid #5cb85c;
    padding:8px;
    margin:5px;
    border-radius: 5px;
    background:#5cb85c;
     


}
.searchbox{
   
    border-radius: 5px;
    border:thin solid #777;
    background:#eee;
    font-size:24px;
    padding: 5px;
    padding-left:10px;
    margin:5px;



}
.srcselector{
    margin:5px;
  
    width:70px;
}
.searchcontainer{ margin:5px;}
.bitems{
    font-size:40px;
    margin-left:5px;
    margin-top:10px;
}
.page-header{
    margin-top:15px !important;
    border-bottom:thin solid #bdbdbd;
  
}
.trail{
    font-weight:200;
}
h2{margin:0px!important;}
.book_panel{margin-top:15px !important;}

    </style>

  </head>

  <body>
  <?php $userid=Auth::user()->id;
        $isadmin=Auth::user()->admin;
        if($isadmin){
          $bbbu=DB::table('checkouts')->where('toggle','=',false)->count();
        }else{
          $bbbu=DB::table('checkouts')->where('user','=',$userid)->where('toggle','=',false)->count();
        }

  ?>
    <div class="row" style="background:#624871 !important">
<div class="container" >
<nav class="navbar navbar-default" style="margin:0px !important">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <div class="navbar-brand" href="#"><span class="glyphicon glyphicon-fire" aria-hidden="true" style="margin-right:10px;"></span>Aura-LMS &nbsp</div>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
        <li class="nav-item  @if($loc=='Home') active @endif">
          <a class="nav-link" href="{{ URL::Asset('portal')}}">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item  @if($loc=='Book search') active @endif">
          
          {!! link_to('search/all', $title = 'Book Search', $attributes = array('class'=>"nav-link"), $secure = null);!!}
        </li> 
        <li class="nav-item @if($loc=='Borrowed') active @endif">
          <a class="nav-link" href="{{ URL::Asset('borrow')}}">Borrowed <span class="badge badge-danger" style="background:#d9534f;<?php if($bbbu>0){echo 'display:inline';}else{echo 'display:none';} ?>">{{$bbbu}}</span></a>
        </li>


        <li class="nav-item  @if($loc=='History') active @endif">
          <a class="nav-link" href="{{ URL::Asset('history/all')}}">History</a>
        </li>
                <?php 
                $isadmin=Auth::user()->admin;
                $auser=Auth::user()->email;
               ?>

         <li class="nav-item">
          <a class="nav-link">Logged in as | {{$auser}}</a>
        </li>

        @if($isadmin)

         <li class="nav-item ">
          {!! link_to('home', $title = 'Admin', $attributes = array('class'=>"nav-link"), $secure = null);!!}
        </li>
        @endif
         <li class="nav-item">
          {!! link_to_action('Auth\AuthController@getLogout', $title = 'Log Out', $parameters = [], $attributes = ['class'=>"nav-link"]); !!}
          
        </li>
      </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>
</div>
</div>
  @yield('page_content')



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js" integrity="sha384-Plbmg8JY28KFelvJVai01l8WyZzrYWG825m+cZ0eDDS1f7d/js6ikvy1+X+guPIB" crossorigin="anonymous"></script>
    <script src="{{ URL::Asset('js/bootstrap.min.js')}}"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  </body>
</html>
