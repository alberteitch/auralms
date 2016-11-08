
<html>

    <head>
        <title>AuraLMS-login</title>

        <link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>
        <link href='css/bootstrap.min.css' rel='stylesheet' type='text/css'>
        <script src="js/bootstrap.min.js"></script>
        <style>
            body {
                margin: 0;
                padding: 0;
                width: 100%;
                height: 100%;
                color: #eee;
                display: table;
                font-weight: 200;
                background: #696969 !important;
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
                margin-top: 10px;
                margin-bottom:-10px;
                font-weight: 200;
       
                
            }
            .adlabel{

            }

            .quote {
                font-size: 24px;
                margin-bottom: 30px;
                font-weight: 200;
            }
            h3{
                font-weight: 200;
            }
            #btn1{
                color:#444;
                
            }
            .form-control{
                font-weight:400;
                font-size:16px;
            }


        </style>
      
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div style="margin-top:-30px;">Admin Login</div>
                <div class="title"><span class="glyphicon glyphicon-fire" aria-hidden="true" style="margin-right:10px;"></span>Aura-LMS</div>
                <div class="quote"><h3>Please sign in</h3></div>
            
                <div>
                     <form class="form-signin">
                        
                        <label for="inputEmail" class="sr-only">Email address</label>
                        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus><br/>
                        <label for="inputPassword" class="sr-only">Password</label>
                        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required><br/>
                        <!--<div class="checkbox">
                          <label>
                            <input type="checkbox" value="remember-me"> Remember me
                          </label>
                        </div>-->
                        <button class="btn btn-lg btn-success btn-block" type="submit">Sign in</button>
                      </form>
                </div>

            </div>
        </div>
 

         

     
    </body>
</html>
