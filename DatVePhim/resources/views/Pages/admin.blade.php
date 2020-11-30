
   
@include('Pages.header')
<!--sidebar start-->
<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a class="active" href="{{URL::to('/admin')}}">
                        <i class="fa fa-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>Phim</span>
                    </a>
                    <ul class="sub">
						<li><a href="{{URL::to('/addmovie')}}">Thêm Phim</a></li>
						<li><a href="{{URL::to('/allmovie')}}">Danh sách bộ phim</a></li>
                    </ul>
                </li>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
		<!-- //market-->
        @yield('content')
	
</section>
@include('Pages.footer')

 