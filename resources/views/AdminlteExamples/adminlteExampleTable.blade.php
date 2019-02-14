@extends('Template.adminlte')

@section('main-title') 
	{{ 'Example AJAX with AXIOS and VueJs' }} <small>Optional description</small>
@endsection

@section('main-navigation')	
	<li class="active">ajax-axios-vueJs</li>
@endsection

@push('styles')
	{{-- MORE STYLES --}}
@endpush()

@section('main-content')
	<div id="content">
		<!-- BOX Using VueJs and SweetAlert -->
		<box close='true' title="box title" color="warning">
			<div class="form-inline form-group text-center">
				<div class="form-inline form-group" style="margin-right: 25px">
					<span>Show: </span>
					<select name="" id="" class="form-control" v-model="selected">
						<option value="" v-for="length in lengths" v-bind:value="length" v-html="length"></option>
					</select>
				</div>
				<div class="form-inline form-group">
					<span>Search: </span>
					<input type="number" class="form-control form-group" placeholder="write id (optional)" v-model="id" v-on:keyup.13="get">
					<button class="btn btn-primary" @click="get"><i class="fa fa-search"></i> Search</button>
				</div>
			</div>
			<div class="table-responsive form-group">
				<table-bs :headers="columns" :datas="rows"></table-bs>
			</div>
			<template #footer>
				<div v-if="total_pages" class="text-right">
					<span class="btn btn-primary btn-xs" @click="previus"><</span>
					<span class="">Page @{{ page }} of @{{ total_pages }}</span>
					<span class="btn btn-primary btn-xs" @click="next">></span>
				</div>
			</template>
		</box>
		<!-- <pre>@{{ $data }}</pre> -->
	</div>
@endsection()

@push('scripts')
	<script src={{ asset('Template/VueComponents/box.js') }}></script>
	<script src={{ asset('js.min/axios.min.js') }}></script>
	<script>
		new Vue({
			el:'#content',
			data:{
				selected:3,
				lengths:[3,5,10,15,20],
				id:'',
				columns:['id','first_name','last_name','avatar'],
				rows:[],
				page:1,
				total_pages:''
			},
			methods:{
				previus(){
					if(this.page !== 1){
						this.page--;
						this.get();
					}
				},
				next(){
					if(this.page !== this.total_pages){
						this.page++;
						this.get();
					}
				},
				get:function(){
					var d = this;
					var a={
						url: (this.id ? 'https://reqres.in/api/users/'+this.id : 'https://reqres.in/api/users?page='+this.page+'&per_page='+this.selected),
						method: 'get',
						responseType:'json'
					};
					Pace.restart();
					axios(a).then(function(respuesta){
						d.rows = [];
						if(_.isArray(respuesta.data.data)){
							d.total_pages = respuesta.data.total_pages;
							_.each(respuesta.data.data,(i,k)=>{
								d.rows.push([
									i.id,
									i.first_name,
									i.last_name,
									'<img src="'+i.avatar+'" height="35px" class="img-circle"/>'
								]);
							});
						}else{
							d.total_pages = '';
							d.rows.push([
								respuesta.data.data.id,
								respuesta.data.data.first_name,
								respuesta.data.data.last_name,
								'<img src="'+respuesta.data.data.avatar+'" height="35px" class="img-circle"/>'
							]);
						}
					}).catch(function(error){
						mensajeAlert({type:'E'});
					}).finally(function(){ 
						console.log('finish');
					});
				}
			},
			watch:{
				selected:function(){
					this.get();
				}
			},
			created(){
				this.get();
    		}
		});
	</script>
@endpush()