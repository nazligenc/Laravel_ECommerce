<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{asset('assets')}}/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
                <span class="input-group-btn">
                <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li>
                <a href="/admin">
                    <i class="fa fa-columns"></i> <span>Dashboard</span>
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-shopping-cart"></i> <span>Order</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="../index.html"><i class="fa fa-circle-o"></i>New Orders</a></li>
                    <li><a href="../index2.html"><i class="fa fa-circle-o"></i>Accepted Orders</a></li>
                </ul>
                <ul class="treeview-menu">
                    <li><a href="../index2.html"><i class="fa fa-circle-o"></i>Shipping Orders</a></li>
                </ul>
                <ul class="treeview-menu">
                    <li><a href="../index2.html"><i class="fa fa-circle-o"></i>Completed Orders</a></li>
                </ul>
            </li>
            <li>
                <a href="/admin/category">
                    <i class="fa fa-list"></i> <span>Categories</span>
                </a>
            </li>
            <li>
                <a href="/admin/product">
                    <i class="fa fa-cube"></i> <span>Products</span>
                </a>
            </li>
            <li>
                <a href="/admin/comment">
                    <i class="fa fa-comment"></i> <span>Comments</span>
                </a>
            </li>
            <li>
                <a href="/admin/faq">
                    <i class="fa fa-question-circle"></i> <span>FAQ</span>
                </a>
            </li>
            <li>
                <a href="/admin/message">
                    <i class="fa fa-comments"></i> <span>Messages</span>
                </a>
            </li>
            <li>
                <a href="/admin/user">
                    <i class="fa fa-users"></i> <span>Users</span>
                </a>
            </li>
            <li>
                <a href="/admin/social">
                    <i class="fa fa-share-alt "></i> <span>Social</span>
                </a>
            </li>

            <li class="header">LABELS</li>
            <li><a href="/admin/setting"><i class="fa fa-cog"></i> Settings</a></li>

        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
