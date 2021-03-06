        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="background:#624871 !important;">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <div class="navbar-brand" href="#" style="color:#eee;"><span class="glyphicon glyphicon-fire" aria-hidden="true" style="margin-right:10px;"></span>Aura-LMS : {{$loc}}</div>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
  

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> {{$authuser}} <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <!--<li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li><li class="divider"></li>
                        <li>{{$isadmin}}</li>
                        <li class="divider"></li>-->
                        <li>
                           
                            {!! link_to_action('Auth\AuthController@getLogout', $title = 'Log Out', $parameters = [], $attributes = ['class'=>"fa fa-fw fa-power-off"]); !!}
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            @include('master.sidebar')
            <!-- /.navbar-collapse -->
        </nav>
