<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->
<script src={{ asset('Template/Adminlte/bower_components/jquery/dist/jquery.min.js') }}></script>
<!-- Bootstrap 3.3.7 -->
<script src={{ asset('Template/Adminlte/bower_components/bootstrap/dist/js/bootstrap.min.js') }}></script>

@if(config('adminlte.datatable') === true)
	<!-- DataTables -->
	<script src={{ asset('Template/Adminlte/bower_components/datatables/js/jquery.dataTables.min.js') }}></script>
	<script src={{ asset('Template/Adminlte/bower_components/datatables/js/dataTables.bootstrap.min.js') }}></script>
@endif
<!-- SlimScroll -->
<script src={{ asset('Template/Adminlte/bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}></script>

@if(config('adminlte.progress') === true)
	<!-- PACE -->
	<script src={{ asset('Template/Adminlte/plugins/pace/pace.min.js') }}></script>
@endif

<!-- AdminLTE App -->
<script src={{ asset('Template/Adminlte/dist/js/adminlte.min.js') }}></script>
<!-- NEW -->
<script src={{ asset('Template/Adminlte/dist/js/demo.js') }}></script>

<!-- ADICIONALES -->
@if(config('adminlte.sweetalert') === true)
	<script src={{ asset('js.min/sweetalert2.all.min.js') }}></script>
	<script src={{ asset('js.min/helpers.js') }}></script>
@endif
@if(config('adminlte.lodash') === true)
	<script src={{ asset('js.min/lodash.min.js') }}></script>
@endif
@if(config('adminlte.vue') === true)
	<script src={{ asset('js.min/vue.min.js') }}></script>
@endif

<script type='text/javascript'>
  	var BASE_URI = '{{ url('/').'/' }}';
</script>

<script>
	var url = window.location;
	var children = $('ul.sidebar-menu a').filter(function(){ return this.href == url; });
	children.parent().addClass('active');
	children.parent().parent().parent().addClass('active menu-open');
	children.parent().parent().parent().parent().parent().addClass('active menu-open');
</script>