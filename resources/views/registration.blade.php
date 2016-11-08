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
                margin-top: -10;
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
                font-size:14px;
                font-weight: 400;
                min-width: 250px;

            }
            .lbl{
                font-size:12px;
                font-weight:400;
            }
            td{
                padding:20px;
                vertical-align: top;
            }
            #inputAddress{
                height:105px;
            }

        </style>
      
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title"><span class="glyphicon glyphicon-fire" aria-hidden="true" style="margin-right:10px;"></span>Aura-LMS</div>
                <div class="quote"><h3>Register New User</h3></div>
            
                <div>
                     <form class="form-signin">
                     <table style="margin-bottom:-30px;"><tr><td>
                        <label for="inputFname" class="lbl">First Name</label>
                        <input type="text" id="inputFname" class="form-control" placeholder="Enter First Name Here..." required autofocus><br/>
                        <label for="inputLname" class="lbl">Last Name</label>
                        <input type="text" id="inputLname" class="form-control" placeholder="Enter Last Name Here..." required ><br/>
                        <label for="inputEmail" class="lbl">Email address</label>
                        <input type="email" id="inputEmail" class="form-control" placeholder="Enter Email address Here..." required ><br/>
                        <label for="inputPassword" class="lbl">Password</label>
                        <input type="password" id="inputPassword" class="form-control" placeholder="Enter Password Here..." required><br/>
                        <label for="inputPassword" class="lbl">Confirm Password</label>
                        <input type="password" id="inputCPassword" class="form-control" placeholder="Confirm Password Here..." required>
                        </td><td>
                        <label for="inputAddress" class="lbl">Address</label>
                        <textarea class="form-control" rows="5" id="inputAddress"  placeholder="Enter Address Here..." required></textarea><br/>
                        <label for="inputCity" class="lbl">City</label>
                        <input type="password" id="inputCity" class="form-control" placeholder="Enter City Here..." required><br/>
                        <label for="inputZip" class="lbl">Zip</label>
                        <input type="password" id="inputZip" class="form-control" placeholder="Enter Zip Here..." required><br/>
                        <label for="inputCountry" class="lbl">Country</label>
                        <input type="password" id="inputCountry" class="form-control" placeholder="Enter Country Here..." required><br/>
                        
                        
                        </td></tr>
                        <tr><td></td></tr>
                        </table>
                        <button class="btn btn-lg btn-success btn-block" type="submit" style="margin:0px auto;width:80% !important">Register</button>
                      </form>
                </div>

            </div>
        </div>
 

         

     
    </body>
</html>
