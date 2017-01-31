@if (Auth::guard('adminpanel')->guest())
    <div></div>
    @else
<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">

            <li>
                <a href="\adminpanel"><i class="fa fa-edit fa-fw"></i> Dashboard</a>
            </li>
            <li>
                <a href="\adminpanel\category"><i class="fa fa-edit fa-fw"></i> Category</a>
            </li>

            <li>
                <a href="\adminpanel\experts"><i class="fa fa-user fa-fw"></i> Expert List</a>
            </li>
            <li>
                <a href="\adminpanel\applicationdevices"><i class="fa fa-edit fa-fw"></i> Application Tests</a>
            </li>
            <li>
                <a href="\adminpanel\testcases"><i class="fa fa-edit fa-fw"></i> Test Cases</a>
            </li>
            <li>
                <a href="\adminpanel\knowledgebase"><i class="fa fa-edit fa-fw"></i> Knowledge Base</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-star fa-fw arrow"></i>Comparison</a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="\adminpanel\comparison"><i class="fa fa-eye fa-fw"></i>View Comparisons</a>
                    </li>
                    <li>
                        <a href="\adminpanel\comparison\create"><i class="fa fa-edit   fa-fw"></i>Create Comparison</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-user fa-fw arrow"></i> AdminPanel User</a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="\adminpanel\adminuser"><i class="fa fa-eye fa-fw"></i>View Users</a>
                    </li>
                    <li>
                        <a href="\adminpanel\adminuser\create"><i class="fa fa-edit   fa-fw"></i>Create User</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"> Main Site<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="#"><i class="fa fa-user fa-fw arrow"></i> User</a>
                        <ul class="nav nav-third-level">
                            <li>
                                <a href="\adminpanel\user"><i class="fa fa-eye fa-fw"></i>View Users</a>
                            </li>
                            <li>
                                <a href="\adminpanel\user\create"><i class="fa fa-edit   fa-fw"></i>Create User</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-star fa-fw arrow"></i>Reviews</a>
                        <ul class="nav nav-third-level">
                            <li>
                                <a href="\adminpanel\reviews"><i class="fa fa-eye fa-fw"></i>View Review</a>
                            </li>
                            <li>
                                <a href="\adminpanel\reviews\create"><i class="fa fa-edit   fa-fw"></i>Create Reviews</a>
                            </li>
                            </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-comments  a-fw"></i>Comments</a>
                    </li>

                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#"><i class="fa fa-edit fa-fw arrow"></i> Q&A</a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="#"><i class="fa fa-edit  a-fw"></i>Questions</a>
                    </li>
                    <li>
                        <a href="\adminpanel\answers"><i class="fa fa-edit  a-fw"></i>Answers</a>
                    </li>
                    </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-star fa-fw arrow"></i>Events</a>
                <ul class="nav nav-third-level">
                    <li>
                        <a href="\adminpanel\partners"><i class="fa fa-edit fa-fw"></i>Partners</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-eye fa-fw"></i>View Event</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-edit   fa-fw"></i>Create Event</a>
                    </li>
                </ul>
            </li>


        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>
<!-- /.navbar-static-side -->
@endif