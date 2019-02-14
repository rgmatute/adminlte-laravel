<?php 

	/*===========================================================================
		Include this line of code in your preferred routes in web.php

			require __DIR__.'/adminlteExamples.php';
			
	===========================================================================*/

	Route::get('/adminlteExample', function () {
	    return view('AdminlteExamples.adminlteExample');
	})->name('example.index');


	Route::get('/adminlteExampleBox', function () {
	    return view('AdminlteExamples.adminlteExampleBox');
	})->name('box.index');


	Route::get('/adminlteExampleVue', function () {
	    return view('AdminlteExamples.adminlteExampleVue');
	})->name('vue.index');


	Route::get('/adminlteExampleAjax', function () {
	    return view('AdminlteExamples/adminlteExampleAjax');
	})->name('ajax.index');


	Route::get('/adminlteExampleTable', function () {
	    return view('AdminlteExamples/adminlteExampleTable');
	})->name('table.index');

?>