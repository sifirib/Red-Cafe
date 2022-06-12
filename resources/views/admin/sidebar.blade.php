<nav class="navbar-default navbar-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">
            <li>
                <div class="user-img-div">
                    <img src="{{asset('assets')}}/admin/img/user.png" class="img-thumbnail" /><br>


                    <div class="inner-text">
                        <a class="align-items-center" style="font-size: 22px; color: whitesmoke" href="/logoutuser"> <span class=" d-lg-inline">LOGOUT</span></a>
                        @auth{{Auth::user()->name}}@endauth
                        <br />
                        <small>Last Login : 3 Mins Ago </small>
                        <br>

                    </div>
                </div>

            </li>


            <li>

                <a  href="{{route('admin.index')}}"><i class="fa fa-dashboard "></i>Dashboard <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="index1.html"><i class="fa fa-circle-o "></i>New Orders</a>
                    </li>
                    <li>
                        <a href="index2.html"><i class="fa fa-circle-o "></i>Accepted Orders</a>
                    </li>
                    <li>
                        <a href="index3.html"><i class="fa fa-circle-o "></i>Shipping Orders</a>
                    </li>
                    <li>
                        <a href="index4.html"><i class="fa fa-circle-o "></i>Completed Orders</a>
                    </li>

                </ul>
            </li>

            <li>
                <a  href="/admin/category"><i class="fa fa-bars text-yellow-300"></i> Categories </a>
            </li>
            <li>
                <a  href="/admin/product"><i class="fa fa-list text-orange-300"></i> Products </a>
            </li>
            <li>
                <a  href="/admin/comment"><i class="fa fa-comment text-blue-200"></i> Comments </a>
            </li>
            <li>
                <a  href="/admin/faq"><i class="fa fa-question text-red-500"></i> FAQ </a>
            </li>
            <li>
                <a  href="/admin/messages"><i class="fa fa-send text-orange-500"></i> Messages </a>
            </li>
            <li>
                <a  href="/admin/user"><i class="fa fa-user text-green-300"></i> Users </a>
            </li>
            <li>
                <a  href="/admin/social"><i class="fa fa-twitter text-blue-400"></i> Social </a>
            </li>

            <li class="nav-third-level">LABELS</li>
            <li class="nav-item">
                <a href="/admin/setting" class="nav-link">
                    <i class="fa fa-bars text-purple-500"></i>
                    <p class="text"> Settings</p>
                </a>
            </li>



        </ul>
    </div>

</nav>
<!-- /. NAV SIDE  -->
