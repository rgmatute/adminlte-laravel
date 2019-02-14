<?php  
	return [
		'progress'	=>	true,
		'datatable'	=>	true,
		'vue'		=>	true,
		'sweetalert'=>	true,
		'lodash'	=>	true,

		# PAGE
		'favicon'		=>	'Template/Adminlte/img/perfil.jpg',
		'title'			=>	'Laravel-adminLTE',
		'skin-color'	=>	'blue',
		'logo-mini'		=>	'<b>M</b>TS',
		'logo-lg'		=>	'<b>Matron</b>Soft',		

		# USER
		'avatar'		=>	'Template/Adminlte/img/perfil.jpg',

		# COMPONENTES
		'navbar-logo-mini' 		=> true,
		'navbar-logo-lg' 		=> true,
		#
		'navbar-user'			=> true,
		#
		'navbar-icons' 			=> true,
		'navbar-mensaje' 		=> true,
		'navbar-notificacion' 	=> true,
		'navbar-tarea'	 		=> true,
		'navbar-setting' 		=> true,
		'navbar-more' 			=> false,
		#
		'sidebar-user'			=> true,
		'sidebar-search'		=> true,
		'sidebar-header'		=> true,
		'sidebar-menu'			=> true,
		'sidebar-more-before'	=> false,
		'sidebar-more-after'	=> false,
		#
		'footer'				=> true,

		# VALUES COMPONENTS
		'footer-copy-value'		=>	'MatronSoft',
		'footer-version-value'	=>	'<b>Version</b> 1.0.0',
		# SIDEBAR
		'sidebar-header-value'	=>	'<i class="fa fa-check"></i> MENU',

		'sidebar-more-before-value' 	=> [
			['include'	=> 'Template.Adminlte.sidebar.sidebar-user'],
			['include'	=> 'Template.Adminlte.sidebar.sidebar-search'],
		],
		'sidebar-more-after-value' 	=> [
			['include'	=> 'Template.Adminlte.sidebar.sidebar-user'],
		],
		# NAVBAR
		'navbar-more-value' 	=> [
			['include'	=> 'Template.Adminlte.navbar.navbar-notificacion'],
		],

		# REPLACE COMPONENTS
		#'sidebar-menu-replace'		=> ['include'=>'Template.Adminlte.DefaultComponents.newmenu'],
		'sidebar-user-replace'		=> ['include'=>'Template.Adminlte.DefaultComponents.newsidebaruser'],
		'navbar-user-replace'		=> ['include'=>'Template.Adminlte.DefaultComponents.newnavbaruser'],
		//'navbar-setting-replace'	=> ['include'=>'Template.Adminlte.DefaultComponents.newnavbarsetting','icon'=>'fa-gear'],



		
		# MENU
		'Menu' =>	[
			'Example'=>[
				'icon'			=>	'fa-check',
				'route'			=>	'example.index',
				'label'			=>	'new',
				'label-color'	=>	'red'
			],
			'More Examples' =>	[
				'icon'=>'fa-plus',
				'Example with Box' =>	[
					'route'	=>	'box.index',
					'icon'	=>	'fa-th-large'
				],
				'Example with VueJS' =>	[
					'route'	=>	'vue.index',
					'icon'	=>	'fa-refresh',
					'label'	=>	'VueJs',
					'label-color'	=>	'green',
				],
				'Example with ajax' =>	[
					'route'	=>	'ajax.index',
					'icon'	=>	'fa-jsfiddle'
				],
				'Example with table' =>	[
					'route'	=>	'table.index',
					'icon'	=>	'fa-table',
					'label'	=>	'new',
				],
			]
		]
	];

?>