
   
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
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>Thể loại</span>
                    </a>
                    <ul class="sub">
						<li><a href="{{URL::to('/addtheloai')}}">Thêm thể loại phim</a></li>
						<li><a href="{{URL::to('/alltheloai')}}">Danh sách thể loại phim</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>Quốc gia</span>
                    </a>
                    <ul class="sub">
						<li><a href="{{URL::to('/addquocgia')}}">Thêm quốc gia</a></li>
						<li><a href="{{URL::to('/allquocgia')}}">Danh sách quốc gia</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>NSX</span>
                    </a>
                    <ul class="sub">
						<li><a href="{{URL::to('/addnsx')}}">Thêm nsx</a></li>
						<li><a href="{{URL::to('/allnsx')}}">Danh nsx</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>Đạo diễn</span>
                    </a>
                    <ul class="sub">
						<li><a href="{{URL::to('/adddaodien')}}">Thêm đạo diễn</a></li>
						<li><a href="{{URL::to('/alldaodien')}}">Danh sách đạo diễn</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>Diễn viên</span>
                    </a>
                    <ul class="sub">
						<li><a href="{{URL::to('/adddienvien')}}">Thêm thể diễn viên</a></li>
						<li><a href="{{URL::to('/alldienvien')}}">Danh sách diễn vien</a></li>
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

 