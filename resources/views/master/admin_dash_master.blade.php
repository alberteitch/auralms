<!DOCTYPE html>
<html lang="en">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>AuraLMS - Admin Panel - {{$loc}} </title>

    <!-- Bootstrap Core CSS -->
   <link href="{{ URL::Asset('css/bootstrap.min.css')}}" rel="stylesheet">
    
    <!-- Custom CSS -->
   <link href="{{ URL::Asset('css/sb-admin.css')}}" rel="stylesheet">
    
    <!-- Morris Charts CSS -->
    <link href="{{ URL::Asset('css/plugins/morris.css')}}" rel="stylesheet">
    
   <link href="{{ URL::Asset('css/list.css')}}" rel="stylesheet">
    
   <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    
    <!-- Custom Fonts 
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">-->


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
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
.coluna{max-width:85px!important;text-align:center;}
    </style>
}




</head>

<body>

    <div id="wrapper">
    <?php
    $star=101;
    $authuser=Auth::user()->email;
    $isadmin=Auth::user()->admin;
        ?>
        <!-- Navigation -->
        @include('master.navbar')

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->


                @yield('dash_content')

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <script src="https://blackrockdigital.github.io/startbootstrap-sb-admin/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="https://blackrockdigital.github.io/startbootstrap-sb-admin/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js"></script>
    
  <script>
                                $(".form_delete").on("submit", function(){
                                    return confirm("Do you want to delete this item?");
                                });
  
                                $(".form_save").on("submit", function(){
                                    return confirm("Do you want to Save the Changes?");
                                });
                                
                                $(".cancel_btn").click( function(){
                                     if (confirm("Are you sure you want to cancel?")){
                                        if (window.history.back()==false){
                                            window.location.assign('./');
                                        }
                                     }
                                });



   </script>
    <script>
        $(.cancel_btn_2).on("click", ".alert", function(e) {
            bootbox.alert("Hello world!", function() {
                console.log("Alert Callback");
            });
        });
    </script>
                        </div>
                    </div>
                </div>

</body>

</html>
