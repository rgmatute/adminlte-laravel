<!-- Bootstrap -->
<link rel="stylesheet" href={{ asset('Template/Adminlte/bower_components/bootstrap/dist/css/bootstrap.min.css') }}>
<!-- Font Awesome -->
<link rel="stylesheet" href={{ asset('Template/Adminlte/bower_components/font-awesome/css/font-awesome.min.css') }}>
<!-- Ionicons -->
<!-- <link rel="stylesheet" href={{ asset('Template/Adminlte/bower_components/Ionicons/css/ionicons.min.css') }}> -->
@if(config('adminlte.datatable') === true)
	<!-- DataTables -->
	<link rel="stylesheet" href={{ asset('Template/Adminlte/bower_components/datatables/css/dataTables.bootstrap.min.css') }}>
@endif

@if(config('adminlte.progress') === true)
	<!-- pace -->
	<link rel="stylesheet" href={{ asset('Template/Adminlte/plugins/pace/pace.css') }}>
@endif
<!-- Theme style -->
<link rel="stylesheet" href={{ asset('Template/Adminlte/dist/css/AdminLTE.min.css') }}>
<!-- AdminLTE Skins. We have chosen the skin-blue for this starter
page. However, you can choose any other skin. Make sure you
apply the skin class to the body tag so the changes take effect. -->
<link rel="stylesheet" href={{ asset('Template/Adminlte/dist/css/skins/_all-skins.min.css') }}>
<!-- <link rel="stylesheet" href={{ asset('Template/Adminlte/dist/css/skins/skin-blue.min.css') }}>-->
<!-- Google Font -->
<link rel="stylesheet"
href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

<!-- ADICIONALES -->
<style>
	.swal2-popup {
  		font-size: 1.05em !important;
	},
</style>