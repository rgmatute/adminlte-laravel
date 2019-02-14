@if(!config('adminlte.Menu'))
	@if(session()->has('Menu'))
		{{ config(['adminlte.Menu'	=>	session()->get('Menu') ?? []]) }}
		{{ config(['adminlte.skin-color'=>'purple']) }}
	@endif
@endif

@if(!config('adminlte.User'))
	@if(session()->has('User'))
		{{ config(['adminlte.Menu'	=>	session()->get('User') ?? []]) }}
	@endif
@endif