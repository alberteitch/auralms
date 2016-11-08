<html>
    <head>
        <title>AuraLMS</title>

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
                font-weight: 100;
                
                background: #624871 !important;
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
                margin-bottom: 5px;
            }

            .quote {
                font-size: 24px;
                margin-bottom: 30px;
            }
            #btn1{
                color:#444;
                
            }

        </style>
      
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Aura-LMS</div>
                <div class="quote">A Simple Library Management System :)</div>
                <div> {!! link_to_action('Auth\AuthController@getLogin', $title = 'Enter Here', $parameters = [], $attributes = ['style'=>"color:#333 !important;",'class'=>"btn btn-lg btn-success"]); !!}</div>
            </div>
        </div>
    </body>
</html>
