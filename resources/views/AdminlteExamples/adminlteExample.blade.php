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