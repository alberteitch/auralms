            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li @if($loc==='Dashboard') class="active" @endif>
                        <a href="{{ URL::Asset('home')}}"><i class="glyphicon glyphicon-dashboard"></i> Dashboard</a>
                    </li>
                    <li @if($loc==='Books') class="active" @endif >
                        <a href="{{ URL::Asset('books')}}"><i class="glyphicon glyphicon-book"></i> Books</a>
                    </li>
                    <li @if($loc==='Categories') class="active" @endif style="display:none;">
                        <a href="{{ URL::Asset('categories')}}"><i class="glyphicon glyphicon-th-list"></i> Categories</a>
                    </li>
                    <li @if($loc==='Users') class="active" @endif>
                        <a href="{{ URL::Asset('users')}}"><i class="glyphicon glyphicon-user"></i> Members</a>
                    </li>
                    <li @if($loc==='Reports') class="active" @endif style="display:none;">
                        <a href="{{ URL::Asset('reports')}}"><i class="glyphicon glyphicon-signal"></i> Reports</a>
                    </li>
                    <li @if($loc==='Portal') class="active" @endif >
                        <a href="{{ URL::Asset('portal')}}"><i class="glyphicon glyphicon-eye-open"></i> Library Portal</a>
                    </li>
                    <li @if($loc==='Settings') class="active" @endif>
                        <a href="{{ URL::Asset('settings')}}"><i class="glyphicon glyphicon-cog"></i> Settings</a>
                    </li>

     
                </ul>
            </div>