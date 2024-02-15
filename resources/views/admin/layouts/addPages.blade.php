<!DOCTYPE html>
<html lang="en">
  <head>
  @include('admin.includes.head')
</head>


<body class="nav-md">
	<div class="container body">
		<div class="main_container">
			<div class="col-md-3 left_col">
				<div class="left_col scroll-view">
					<div class="navbar nav_title" style="border: 0;">
						<a href="index.html" class="site_title"><i class="fa fa-car"></i> <span>Rent Car Admin</span></a>
					</div>

					<div class="clearfix"></div>

					@include('admin.includes.menuProfile')

					<br />

					@include('admin.includes.sidebar')

					@include('admin.includes.menufooter')
				</div>
			</div>

			@include('admin.includes.navigation')
            @yield('content')
            @include('admin.includes.footer')
		</div>
	</div>

	@include('admin.includes.js')
</body></html>
