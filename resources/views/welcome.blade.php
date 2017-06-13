<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>朗桥维视-VC圆播网站</title>
<?php
echo "<link href=\"/sky/resources/assets/css/reset_min.css\" rel=\"stylesheet\" type=\"text/css\"/>";
echo "<link href=\"/sky/resources/assets/css/headindex.css\" rel=\"stylesheet\" type=\"text/css\"/>";
?>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
	<div class="header">
		<div class="vc-hd-pr">
			<div class="logo-menu clearfix">
				<a class="fl"><img src="/sky/resources/img/logo001.png" class="fl logo" /></a>
				<ul class=" menu gnav">
					<li class="home fore nav-about on"><a class="title"
						href="reload.location">首页</a></li>
					<li class="fore nav-about"><a class="title" href="http://www.enjoyvc.com/cn/prob.html">维C圆播</a></li>
					<li class="fore nav-about"><a class="title"
						href="http://www.enjoyvc.com/t/invite/pctea/">维C时空</a></li>
					<li class="fore  nav-about"><a class="title"
						href="http://vccamp.vccore.com:9004/">企业后台登陆</a></li>
					<li class="company fore nav-about"><a class="title"
						href="intro.html">公司简介</a></li>
				</ul>

			</div>
			<!--scrolll header-->
			<div class="scroll-hd vc-header pr none">
				<div class="logo-menu clearfix">
					<a class="fl"><img src="/sky/resources/img/logo001.png" class="fl logo" /></a>
					<ul class=" menu gnav">
						<li class="home fore nav-about on"><a class="title"
							href="index.html">首页</a></li>
						<li class="fore nav-about"><a class="title" href="prob.html">维C圆播</a></li>
						<li class="fore nav-about"><a class="title"
							href="http://www.enjoyvc.com/t/invite/pctea/">维C时空</a></li>
						<li class="fore  nav-about"><a class="title"
							href="http://vccamp.vccore.com:9004/">企业后台登陆</a></li>
						<li class="company fore nav-about"><a class="title"
							href="intro.html">公司简介</a></li>
					</ul>

				</div>
			</div>
			<!--scrolll header-->
			
			<div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right" style="margin-right:80px;">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <a href="{{ route('login') }}">登录</a>
                            <i>|</i>
                            <a href="{{ route('register') }}">注册</a>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            退出
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
		</div>
	</div>
	
	<div class="vc-show-online" id="show-online" style="padding-top: 127px;padding-left:30px">
		<div class="colum_title" style="border-top:1px solid #f33">
			<h2>
				<em></em>
				直播在线
			</h2>
		</div>
		
		<div class="showtime" style="width: 300px;height:300px;">
		<ul class="video_list clearfix">
			@foreach($shows as $show)
			<li class="video_item fl item>
				<a class="img_box" href="">
					<img onerror="" src="{{$show->img}}"/>
				</a>
				<div class="video_title">
					<a href="">
						<h3>{{$show->theme}}</h3>
					</a>
				</div>
			</li>
			@endforeach
		</ul>
		</div>
	</div>
	
	<script type="text/javascript">
	</script>
</body>
</html>