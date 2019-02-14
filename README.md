# easy integration AdminLTE in Laravel 5.7 or previus version
# Installation

	   composer require rgmatute/adminlte-laravel

# To register the Service Provider edit config/app.php file and add to providers array:
	
		Rgmatute\AdminLTELaravel\Providers\AdminLTELaravelServiceProvider::class,

Publish files with:

		php artisan vendor:publish --tag=rgmatute

OR

		php artisan vendor:publish --tag=rgmatute --force



<?xml version="1.0" encoding="utf-8"?>
<svg version="1.1" 
     xmlns="http://www.w3.org/2000/svg"
     xmlns:xlink="http://www.w3.org/1999/xlink"
     width="100" height="50"
>
  <text font-size="16" x="10" y="20">
    <tspan fill="red">To test the examples included it is important to copy in your preferred routes in web.php</tspan>,
  </text>
</svg>

		require __DIR__.'/adminlteExamples.php';


# use

	@extends('Template.adminlte')

# or 

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
