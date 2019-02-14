@extends('Template.adminlte')

@section('main-title') 
	{{ 'Example AJAX with AXIOS' }} <small>Optional description</small>
@endsection

@section('main-navigation')	
	<li class="active">ajax-axios</li>
@endsection

@push('styles')
	{{-- MORE STYLES --}}
@endpush()

@section('main-content')
	<div id="content">
		<!-- BOX Using VueJs and SweetAlert -->
		<box close='true' title="box title" color="warning">
			<div class="text-center form-inline">
				<input type="number" class="form-control form-group" placeholder="write id (optional)" v-model="id">
				<button class="btn btn-primary" @click="get">Get</button>
			</div>
			<template #footer>
				<span>box footer</span>
			</template>
		</box>
		<pre>@{{ $data }}</pre>
	</div>
@endsection()

@push('scripts')
	<script src={{ asset('Template/VueComponents/box.js') }}></script>
	<script src={{ asset('js.min/axios.min.js') }}></script>
	<script>
		new Vue({
			el:'#content',
			data:{
				id:'',
				data_ajax:[]
			},
			methods:{
				get:function(){
					var d = this;
					var a={
						url: (this.id ? 'https://reqres.in/api/users/'+this.id : 'https://reqres.in/api/users?page=1'),
						method: 'get',
						responseType:'json'
					};
					axios(a).then((respuesta)=>{
						d.data_ajax = respuesta.data.data;
					}).catch((error)=>{
						console.log(error);
					}).finally(()=>{ 
						console.log('finish');
					});
				}
			}
		});
	</script>
@endpush()