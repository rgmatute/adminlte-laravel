@extends('Template.adminlte')

@section('main-title') 
	{{ 'Example Box' }} <small>Box Default and Box with Method refresh and sweetalert</small>
@endsection

@section('main-navigation')	
	<li class="active">Box-Example</li>
@endsection

@push('styles')
	{{-- MORE STYLES --}}
@endpush()

@section('main-content')
	<div id="content">
		<!-- BOX DEFAULT -->
		<box title="box title">
			<div class="text-center">
				box content
			</div>
			<template #footer>
				<span>box footer</span>
			</template>
		</box>

		<!-- BOX Using Method Refresh and SweetAlert -->
		<box refresh="ewrstdfyguyh" close='true' title="box title" color="success">
			<div class="text-center">
				box content
			</div>
			<template #footer>
				<span>box footer</span>
			</template>
		</box>
	</div>
@endsection()

@push('scripts')
	<script src={{ asset('Template/VueComponents/box.js') }}></script>
	<script>
		new Vue({	el:'#content'	});

		function ewrstdfyguyh(){ // -> method box refresh
			// ==========================================================================================================
			// to use the sweetalert helpers lodash.min.js is required, by default it is already loaded
			// Type [ Q -> question , S -> success , E -> error , -> I -> info , W -> warning ] , (success is Default)
			// ==========================================================================================================
			mensajeAlert({html:'Click in Refresh',type:'Q'})
			.then(function(check){
				imageAlert({
					title:'Title Image',
					html:'Description Image',
					imageUrl:'https://img.elcomercio.pe/files/article_content_ec_fotos/uploads/2019/02/06/5c5aebaa46a7f.jpeg'
				}).then(function(check){
					toastAlert({position:'bottom-start',html:'Proccess finalize with success'});
				});
			});
		}
	</script>
@endpush()