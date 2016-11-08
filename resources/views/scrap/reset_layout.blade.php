 <html>

    <head>
        <title>AuraLMS-login</title>

    <!-- Bootstrap Core CSS -->
   <link href="{{ URL::Asset('css/bootstrap.min.css')}}" rel="stylesheet">
    
    <!-- Custom CSS -->
   <link href="{{ URL::Asset('css/sb-admin.css')}}" rel="stylesheet">
    
    <!-- Morris Charts CSS -->
    <link href="{{ URL::Asset('css/plugins/morris.css')}}" rel="stylesheet">
    
   <link href="{{ URL::Asset('css/list.css')}}" rel="stylesheet">
    
   <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
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

        </style>
      
    </head>
    <body>
    @yield('reset_content')
  
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
        $(document).on("click", ".alert", function(e) {
            bootbox.alert("Hello world!", function() {
                console.log("Alert Callback");
            });
        });
    </script>
    </body>
    </html>