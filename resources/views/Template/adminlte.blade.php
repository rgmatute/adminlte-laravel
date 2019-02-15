<!DOCTYPE html>
<html lang="es">
	<head>
		<!-- start values -->
			@include('Template.Adminlte.values.adminlte')
		<!-- end values-->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>{!! config('adminlte.title') !!}</title>
		<link rel="icon" href="{!! asset(config('adminlte.favicon')) !!}"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">
		@include('Template.Adminlte.styles')
		@stack('styles')
	</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
	<body class="hold-transition skin-{{ config('adminlte.skin-color') }} sidebar-mini">
		<div class="wrapper">
			<!-- Main Header -->
			@include('Template.Adminlte.navbar')
			<!-- Left side column. contains the logo and sidebar -->
			<aside class="main-sidebar">
				<!-- sidebar: style can be found in sidebar.less -->
				<section class="sidebar">
					@include('Template.Adminlte.sidebar')
				</section>
				<!-- /.sidebar -->
			</aside>

			<!-- Content Wrapper. Contains page content -->
			<div class="content-wrapper">
				<!-- Content Header (Page header) -->
				<section class="content-header">
					<h1>@yield('main-title')</h1>
					<ol class="breadcrumb">
						<li><i class="fa fa-dashboard"></i>  <a href="/">Inicio</a></li>
						@yield('main-navigation')
					</ol>
				</section>

				<!-- Main content -->
				<section class="content container-fluid">
					@yield('main-content')
				</section>
				<!-- /.content -->
			</div>
			<!-- /.content-wrapper -->
			@if(config('adminlte.footer') === true)
				<!-- Main Footer -->
				<footer class="main-footer">
					<!-- To the right -->
					<div class="pull-right hidden-xs">
						{!! config('adminlte.footer-version-value') !!}
					</div>
					<!-- Default to the left -->
					<strong>
						Copyright &copy; 2019 <a href="#">{!! config('adminlte.footer-copy-value') !!}</a>.
					</strong> Todos los derechos reservados.
				</footer>
			@endif

			@if(config('adminlte.navbar-setting') === true)
				@if(config('adminlte.navbar-setting-replace'))
					@include(config('adminlte.navbar-setting-replace')['include'])
				@else
					@include('Template.Adminlte.sidebar.sidebar-setting')
				@endif		
			@endif
		</div>
		<!-- ./wrapper -->
		@include('Template.Adminlte.scripts')
		@stack('scripts') 
	</body>
</html>