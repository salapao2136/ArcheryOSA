
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
        @if($user)
            <div class="pull-left image">
                <img src="img/steve160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{$userName}}</p>
            </div>
        @else
            <div class="pull-left image">
                <img src="img/avatargrey160x160.png" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p><a href="#">Sign in</a></p>
            </div>
        @endif
        </div>

        <ul class="sidebar-menu" data-widget="tree">


        @if($user)
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-dashboard"></i> <span>My Dashboard</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active margin15" ><a href="#"><i class="fa fa-bullseye"></i>My Gear</a></li>
                    <li class="active margin15" ><a href="#"><i class="fa fa-bullseye"></i>My Events</a></li>
                    <li class="active margin15" ><a href="#"><i class="fa fa-bullseye"></i>My Results</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-edit"></i> <span>Training</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="margin15"><a href="#"><i class="fa fa-calendar-check-o"></i>My Diary</a></li>
                    <li class="margin15"><a href="#"><i class="fa fa-calendar-check-o"></i>My Results</a></li>
                </ul>
            </li>
        @endif


            <li class="treeview">
                <a href="#">
                    <i class="fa fa-edit"></i> <span>Competitions</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="margin15"><a href="#"><i class="fa fa-calendar-check-o"></i> Upcomming Events</a></li>
                    <li class="margin15"><a href="#"><i class="fa fa-calendar-check-o"></i> Previous Events</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-edit"></i> <span>Challenges</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="margin15"><a href="#"><i class="fa fa-plane"></i>Caro's Challenge</a></li>
                </ul>
            </li>


            <li class="treeview">
                <a href="#">
                    <i class="fa fa-edit"></i> <span>Records</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="margin15"><a href="#"><i class="fa fa-file-text-o"></i> Archery NZ</a></li>
                    <li class="margin15"><a href="#"><i class="fa fa-file-text-o"></i> NZFAA</a></li>
                    <li class="margin15"><a href="#"><i class="fa fa-file-text-o"></i> Archery Australia</a></li>
                    <li class="margin15"><a href="#"><i class="fa fa-file-text-o"></i> World Archery</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-cogs"></i> <span>Education</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="margin15"><a href="#"><i class="fa fa-file-text-o"></i>Tuning Charts</a></li>
                    <li class="margin15"><a href="#"><i class="fa fa-file-text-o"></i>Articles</a></li>
                    <li class="margin15"><a href="#"><i class="fa fa-file-text-o"></i>How To's</a></li>
                </ul>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>