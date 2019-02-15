<!-- Sidebar user panel (optional) -->
<div class="user-panel">
	<div class="pull-left image">
		<img src="{!! asset(config('adminlte.avatar')) !!}" class="img-circle" alt="User Image">
	</div>
	<div class="pull-left info">
	  <!-- <p>Ronny matute</p> -->
	  <p>{{ session()->get('perfil') }}</p>
		<!-- Status -->
		<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
	</div>
</div>