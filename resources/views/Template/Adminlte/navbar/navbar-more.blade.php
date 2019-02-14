@if(config('adminlte.navbar-more') === true)
	@foreach(config('adminlte.navbar-more-value') ?? [] as $key => $value)
		@if(is_string($value))
			@include($value)
		@else
			@include($value['include'])
		@endif
	@endforeach
@endif