## easy integration AdminLTE in Laravel 5.7 or previus version
==========
[![Packagist](https://img.shields.io/badge/packagist-dev--master-success.svg)](https://packagist.org/packages/rgmatute/adminlte-laravel)
[![Mit License](https://img.shields.io/badge/license-MIT-blue.svg)](https://opensource.org/licenses/MIT)
[![adminlte](https://img.shields.io/badge/AdminLTE-v_2.4.5-blue.svg)](https://adminlte.io/themes/AdminLTE/index2.html)

## Screenshots

![Screenshot 1](http://telematico-tools.azurewebsites.net/cloud/adminlte/adminllte1902.png)

![Screenshot 2](http://telematico-tools.azurewebsites.net/cloud/adminlte/adminllteTable1902.png)

![Screenshot 3](http://telematico-tools.azurewebsites.net/cloud/adminlte/adminllteBox1902.png)

![Screenshot 4](http://telematico-tools.azurewebsites.net/cloud/adminlte/setting1902.png)

# Installation
==========

	   composer require rgmatute/adminlte-laravel

To register the Service Provider edit config/app.php file and add to providers array:
	
		Rgmatute\AdminLTELaravel\Providers\AdminLTELaravelServiceProvider::class,

### Publish files with:

		php artisan vendor:publish --tag=rgmatute

OR

		php artisan vendor:publish --tag=rgmatute --force


<span style="color: red">To test the examples included it is important to copy in your preferred routes in web.php</span>

		require __DIR__.'/adminlteExamples.php';


## use

	@extends('Template.adminlte')

## or 

	@extends('Template.adminlte')

	@section('main-title') 
		{{ 'General Title' }} 
		<small>Optional description</small>
	@endsection

	@section('main-navigation')	
		<li class="active">Module</li>
		<li class="active">Option</li>
		<li class="active">etc.....</li>
	@endsection

	@push('styles')
		{{-- MORE STYLES --}}
	@endpush()

	@section('main-content')
		
		<!-- HERE GOES YOUR CONTENT -->

	@endsection()


	@push('scripts')
		{{-- MORE SCRIPTS --}}
	@endpush()
