@if(config('adminlte.navbar-notificacion') === true)	
	<li class="dropdown notifications-menu">
		<!-- Menu toggle button -->
		<a href="#" class="dropdown-toggle" data-toggle="dropdown">
		  <i class="fa fa-bell-o"></i>
		  <span class="label label-warning">10</span>
		</a>
		<ul class="dropdown-menu">
		  <li class="header">Tienes 10 notificaciones</li>
		  <li>
		    <!-- Inner Menu: contains the notifications -->
		    <ul class="menu">
		      <li><!-- start notification -->
		        <a href="#">
		          <i class="fa fa-users text-aqua"></i> 5 nuevos miembros se unieron hoy
		        </a>
		      </li>
		      <!-- end notification -->
		    </ul>
		  </li>
		  <li class="footer"><a href="#">Ver todo</a></li>
		</ul>
	</li>
@endif