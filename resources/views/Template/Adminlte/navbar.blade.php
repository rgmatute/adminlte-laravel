<header class="main-header">
	<!-- Logo -->
	<a href="/" class="logo">
	  <!-- mini logo for sidebar mini 50x50 pixels -->
	  	@if(config('adminlte.navbar-logo-mini') === true)
		  <span class="logo-mini">{!! config('adminlte.logo-mini') !!}</span>
		@endif
	  <!-- logo for regular state and mobile devices -->
	  @if(config('adminlte.navbar-logo-lg') === true)
	  	<span class="logo-lg">{!! config('adminlte.logo-lg') !!}</span>
	  @endif
	</a>

	<!-- Header Navbar -->
	<nav class="navbar navbar-static-top" role="navigation">
		<!-- Sidebar toggle button-->
		<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
			<span class="sr-only">Toggle navigation</span>
		</a>
		<!-- Navbar Right Menu -->
		<div class="navbar-custom-menu">
			<ul class="nav navbar-nav">
				@if(config('adminlte.navbar-icons') === true)
					@include('Template.Adminlte.navbar.navbar-more')
					@include('Template.Adminlte.navbar.navbar-mensaje')
					@include('Template.Adminlte.navbar.navbar-notificacion')
					@include('Template.Adminlte.navbar.navbar-tarea')
				@endif
				@if(config('adminlte.navbar-user') === true)
					@if(config('adminlte.navbar-user-replace'))
						@include(config('adminlte.navbar-user-replace')['include'])
					@else
						@include('Template.Adminlte.navbar.navbar-user')
					@endif
				@endif
				@if(config('adminlte.navbar-setting') === true)
					<li>
						@if(config('adminlte.navbar-setting-replace'))
							<a href="#" data-toggle="control-sidebar"><i class="fa {!! config('adminlte.navbar-setting-replace')['icon'] !!}"></i></a>
						@else
							<a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
						@endif
					</li>
				@endif
			</ul>
		</div>
	</nav>
</header>