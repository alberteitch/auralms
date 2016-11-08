<html>

    <head>
        <title>AuraLMS-login</title>

        <link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>
        <link href="{{ URL::Asset('css/bootstrap.min.css')}}" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js"></script>
        <style>
            body {
                margin: 0;
                padding: 0;
                width: 100%;
                height: 100%;
                color: #eee;
                display: table;
                font-weight: 200;
                
                background: #624871 !important;
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
                border:thin solid #eee;

            }

            .content {
                text-align: center;
                display: inline-block;
                margin-top: -150px;
                padding: 50px;
                border: thin solid #eee;
                border-radius:10px;
            }

            .title {
                font-size: 60px;
                margin-bottom: 5px;
                margin-top: -30;
            }

            .quote {
                font-size: 24px;
                margin-bottom: 30px;
            }
            h3{
                font-weight: 200;
            }
            #btn1{
                color:#444;
                
            }
            .form-control{
                font-weight:bold;
                font-size:16px;

                font-weight: 400;

            }
            .field_con{
                text-align:left;
                margin:5px 0px;
            }
            .checkbox{
                margin-left:20px;
            }
            .btn-sucess{
                background:rgb(94, 191, 77);
            }

        </style>
      
    </head>
    <body>

        <div class="container">
 @if (count($errors))
<div class="alert alert-warning " style="width:100%;position:fixed;top:0;left:0px;margin:0px;">

        @foreach($errors->all() as $error)
 <li>{{ $error }}</li>
        @endforeach

</div>
@endif


@if ($message = Session::get('statmsg'))
<div class="alert alert-warning " style="width:100%;position:fixed;top:0;left:0px;margin:0px;">

       
 <li>{{ $message }}</li>
        

</div>
@endif 

<div class="content">
                <div class="title"><span class="glyphicon glyphicon-fire" aria-hidden="true" style="margin-right:10px;"></span>Aura-LMS</div>
                
               
            
                <div>
    @yield('page_content')

</div>
 
            </div> 

        </div>
 

         

     
    </body>
</html>