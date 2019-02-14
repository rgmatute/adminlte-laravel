@if(config('adminlte.navbar-tarea') === true)
	<li class="dropdown tasks-menu">
		<!-- Menu Toggle Button -->
		<a href="#" class="dropdown-toggle" data-toggle="dropdown">
			<i class="fa fa-flag-o"></i>
			<span class="label label-danger">9</span>
		</a>
		<ul class="dropdown-menu">
			<li class="header">Tienes 9 tareas</li>
			<li>
			<!-- Inner menu: contains the tasks -->
			<ul class="menu">
				<li><!-- Task item -->
					<a href="#">
						<!-- Task title and progress text -->
						<h3>
							Diseñar unos botones
							<small class="pull-right">20%</small>
						</h3>
						<!-- The progress bar -->
						<div class="progress xs">
							<!-- Change the css width attribute to simulate progress -->
							<div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
								<span class="sr-only">20% Complete</span>
							</div>
						</div>
					</a>
				</li>
				<!-- end task item -->
			</ul>
			</li>
			<li class="footer">
				<a href="#">Ver todas las tareas</a>
			</li>
		</ul>
	</li>
@endif