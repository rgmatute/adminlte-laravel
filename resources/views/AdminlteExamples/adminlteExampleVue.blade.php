@extends('Template.adminlte')

@section('main-title') 
	{{ 'Example with Vue' }} <small>Optional description</small>
@endsection

@section('main-navigation')	
	<li class="active">VueJS</li>
@endsection

@push('styles')
	{{-- MORE STYLES --}}
@endpush()

@section('main-content')
	<div id="content">
		<!-- BOX Using VueJs and SweetAlert -->
		<box refresh="sedrftgyhuj" close='true' title="box title" color="danger">
			<div class="col-md-6">
				<input type="text" class="form-control" v-model='input' placeholder="write 2019">
			</div>
			<span :class="'label ' + style" v-html="message"></span>
			<template #footer>
				<span>box footer</span>
			</template>
		</box>
		<pre>@{{ $data }}</pre>
	</div>
@endsection()

@push('scripts')
	<script src={{ asset('Template/VueComponents/box.js') }}></script>
	<script>
		new Vue({
			el:'#content',
			data:{
				input:'',
				message:'pending',
				style:'label-danger'
			},
			methods:{
				alertClick(){
					// ==========================================================================================================
					// to use the sweetalert helpers lodash.min.js is required, by default it is already loaded
					// Type [ Q -> question , S -> success , E -> error , -> I -> info , W -> warning ] , (success is Default)
					// ==========================================================================================================
					confirmacionAlert()
					.then(function(check){
						if(check.value)toastAlert();
						else mensajeAlert();
					});
				}
			},
			watch:{
				input:function(value){
					if(value === '2019'){
						this.style 		= 'label-success';
						this.message	= 'OK';
						toastAlert({type:'S',html:'input is watcher and your value is <b>'+value+'</b>'});
					}else{
						this.style 		= 'label-danger';
						this.message	= 'pending';
					}
				}
			}
		});

		function sedrftgyhuj(){
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
					toastAlert({position:'bottom-start',html:'Proccess finalize whit success'});
				});
			});
		}
	</script>
@endpush()