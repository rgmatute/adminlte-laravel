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
			'Dashboard' =>	[
				'icon'=>'fa-dashboard',
				'Dashboard v1' =>	[
					'route'	=>	'example.index',
					'icon'	=>	'fa-circle-o'
				],
				'Dashboard v2' =>	[
					'route'	=>	'example.index',
					'icon'	=>	'fa-circle-o'
				],
			],
			'Layout Options' =>	[
				'label'			=> '4',
				'label-color'	=> 'primary',
				'route'	=>	'example.index',
				'icon'	=>	'fa-files-o'
			],
			'Widgets' =>	[
				'label'			=> 'new',
				'label-color'	=> 'green',
				'route'	=>	'example.index',
				'icon'	=>	'fa-th'
			],
			'Charts' =>	[
				'icon' => 'fa-pie-chart',
				'Charts'=>[
					'label'			=> 'new',
					'label-color'	=> 'red',
					'route'	=>	'example.index',
					'icon'	=>	'fa-pie-chart'
				],
				'Morris'=>[
					'route'	=>	'example.index',
					'icon'	=>	'fa-pie-chart'
				],
				'Flot'=>[
					'route'	=>	'example.index',
					'icon'	=>	'fa-pie-chart'
				],
				'Inline Charts'=>[
					'route'	=>	'example.index',
					'icon'	=>	'fa-pie-chart'
				]
			],
			'UI Elements' =>	[
				'icon' => 'fa-laptop',
				'General'=>[
					'route'	=>	'example.index',
					'icon'	=>	'fa-circle-o'
				],
				'Icons'=>[
					'route'	=>	'example.index',
					'icon'	=>	'fa-circle-o'
				],
				'Buttons'=>[
					'route'	=>	'example.index',
					'icon'	=>	'fa-circle-o'
				],
				'Sliders'=>[
					'route'	=>	'example.index',
					'icon'	=>	'fa-circle-o'
				],
				'Timeline'=>[
					'route'	=>	'example.index',
					'icon'	=>	'fa-circle-o'
				],
				'Modals'=>[
					'route'	=>	'example.index',
					'icon'	=>	'fa-circle-o'
				]
			],
			'Calendar'=>[
				'label'	=>[
					[
						'label'			=> '17',
						'label-color'	=> 'blue',
					],
					[
						'label'			=> '3',
						'label-color'	=> 'red',
					]
				],
				'route'	=>	'example.index',
				'icon'	=>	'fa-calendar'
			],
			'Mailbox'=>[
				'label'	=>[
					[
						'label'			=> '5',
						'label-color'	=> 'red',
					],
					[
						'label'			=> '16',
						'label-color'	=> 'green',
					],
					[
						'label'			=> '12',
						'label-color'	=> 'yellow',
					]
				],
				'route'	=>	'example.index',
				'icon'	=>	'fa-envelope'
			],
			'Multilevel' =>	[
				'icon'	=>	'fa-share',
				'Level One' =>	[
					'label'			=> 'new',
					'label-color'	=> 'blue',
					'route'	=>	'example.index',
					'icon'	=>	'fa-circle-o'
				],
				'Level One 2' =>	[
					'icon'	=>	'fa-share',
					'Level Two 1'=>[
						'route'	=>	'example.index',
						'icon'	=>	'fa-circle-o'
					],
					'Level Two 2' =>	[
						'icon'	=>	'fa-share',
						'Level Three'=>[
							'label'			=> 	'new',
							'label-color'	=> 	'orange',
							'route'			=>	'example.index',
							'icon'			=>	'fa-circle-o'
						],
					],
				],
				'Level One 3' =>	[
					'label'			=> 'new',
					'label-color'	=> 'red',
					'route'	=>	'example.index',
					'icon'	=>	'fa-circle-o'
				],
			],
		],
	];

?>