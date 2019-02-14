@if(config('adminlte.sidebar-more-before') === true)
	@foreach(config('adminlte.sidebar-more-before-value') ?? [] as $key => $value)
		@if(is_string($value))
			@include($value)
		@else
			@include($value['include'])
		@endif
	@endforeach
@endif

@if(config('adminlte.sidebar-user') === true)
	@if(config('adminlte.sidebar-user-replace'))
		@include(config('adminlte.sidebar-user-replace')['include'])
	@else
		@include('Template.Adminlte.sidebar.sidebar-user')
	@endif
@endif

@if(config('adminlte.sidebar-search') === true)
	@include('Template.Adminlte.sidebar.sidebar-search')
@endif

<ul class="sidebar-menu" data-widget="tree">
	<!-- Sidebar Menu -->
	@if(config('adminlte.sidebar-header') === true)
		<li class="header">{!! config('adminlte.sidebar-header-value') !!}</li>
	@endif

	@if(config('adminlte.sidebar-menu') === true)
		{{-- @if(View::exists('Template.Adminlte.sidebar.sidebar-menu')) --}}
		@if(config('adminlte.sidebar-menu-replace'))
			@include(config('adminlte.sidebar-menu-replace')['include'])
		@else
			@include('Template.Adminlte.sidebar.sidebar-menu')
		@endif
		{{-- @endif --}}
	@endif
	
</ul>

@if(config('adminlte.sidebar-more-after') === true)
	@foreach(config('adminlte.sidebar-more-after-value') ?? [] as $key => $value)
		@if(is_string($value))
			@include($value)
		@else
			@include($value['include'])
		@endif
	@endforeach
@endif