<?php

return [

    /*
    |--------------------------------------------------------------------------
    | View Storage Paths
    |--------------------------------------------------------------------------
    |
    | Most templating systems load templates from disk. Here you may specify
    | an array of paths that should be checked for your views. Of course
    | the usual Laravel view path has already been registered for you.
    |
    */

    'menu' => [[
		'icon' => 'fa fa-th-large',
		'title' => 'Home',
		'url' => '/',
		'route-name' => 'home'
	],[
		'icon' => 'fa fa-align-left',
		'title' => 'Productos',
		'url' => 'javascript:;',
		'caret' => true,
		'sub_menu' => [[
			'url' => '/producto/create',
			'title' => 'Crear'
		],[
			'url' => 'javascript:;',
			'title' => 'Listado'
		],[
			'url' => 'javascript:;',
			'title' => 'Menu 1.3'
		]]
	],[
		'icon' => 'fa fa-align-left',
		'title' => 'Clientes',
		'url' => 'javascript:;',
		'caret' => true,
		'sub_menu' => [[
			'url' => 'javascript:;',
			'title' => 'Crear Nuevo',
			'sub_menu' => [[
				'url' => 'javascript:;',
				'title' => 'Menu 2.1',
				'sub_menu' => [[
					'url' => 'javascript:;',
					'title' => 'Menu 3.1',
				],[
					'url' => 'javascript:;',
					'title' => 'Menu 3.2'
				]]
			],[
				'url' => 'javascript:;',
				'title' => 'Listado'
			],[
				'url' => 'javascript:;',
				'title' => 'Categoria'
			]]
		],[
			'url' => 'javascript:;',
			'title' => 'Menu 1.2'
		],[
			'url' => 'javascript:;',
			'title' => 'Menu 1.3'
		]]
	],[
		'icon' => 'fa fa-align-left',
		'title' => 'Campañas',
		'url' => 'javascript:;',
		'caret' => true,
		'sub_menu' => [[
			'url' => 'javascript:;',
			'title' => 'Crear nueva',
			'sub_menu' => [[
				'url' => 'javascript:;',
				'title' => 'Menu 2.1',
				'sub_menu' => [[
					'url' => 'javascript:;',
					'title' => 'Menu 3.1',
				],[
					'url' => 'javascript:;',
					'title' => 'Menu 3.2'
				]]
			],[
				'url' => 'javascript:;',
				'title' => 'Menu 2.2'
			],[
				'url' => 'javascript:;',
				'title' => 'Menu 2.3'
			]]
		],[
			'url' => 'javascript:;',
			'title' => 'Listado Campañas'
		],[
			'url' => 'javascript:;',
			'title' => 'Estadisticas'
		]]
	],[
		'icon' => 'fa fa-align-left',
		'title' => 'Cotizaciones',
		'url' => 'javascript:;',
		'caret' => true,
		'sub_menu' => [[
			'url' => 'javascript:;',
			'title' => 'Crear Cotizacion',
			'sub_menu' => [[
				'url' => 'javascript:;',
				'title' => 'Menu 2.1',
				'sub_menu' => [[
					'url' => 'javascript:;',
					'title' => 'Menu 3.1',
				],[
					'url' => 'javascript:;',
					'title' => 'Menu 3.2'
				]]
			],[
				'url' => 'javascript:;',
				'title' => 'Menu 2.2'
			],[
				'url' => 'javascript:;',
				'title' => 'Menu 2.3'
			]]
		],[
			'url' => 'javascript:;',
			'title' => 'Listado'
		],[
			'url' => 'javascript:;',
			'title' => 'Propiedades'
		]]
	]]
];
