<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Font -->
	<link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
	
	<!-- Jquery -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	
	<!-- Easyui -->
	<script src="<?php echo base_url('jquery-easyui@1.9.14/easyloader.js') ?>"></script>
	
	<!-- Admin LTE -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.1.0/js/adminlte.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.1.0/css/adminlte.min.css" />
	
	<style>
	body { font-family: 'Nunito', sans-serif; }
	</style>
	
    <title>Codeigniter 3 + EasyUI</title>
  </head>
  <body class="hold-transition layout-top-nav">
	<div class="wrapper">
	
		<?php $this->load->view('navbar') ?>
		
		<div class="content-wrapper pb-4">
			
			<!-- Content Header (Page header) -->
			<div class="content-header">
				<div class="container">
					<div class="row mb-2">
						<div class="col-sm-6">
							<h1 class="m-0 text-dark"> Codeigniter 3 + EasyUI <small>Datagrid</small></h1>
						</div><!-- /.col -->
						<div class="col-sm-6">
						<ol class="breadcrumb float-sm-right">
							<li class="breadcrumb-item"><a href="#">Home</a></li>
							<li class="breadcrumb-item active">EasyUI</li>
						</ol>
						</div><!-- /.col -->
					</div><!-- /.row -->
				</div><!-- /.container -->
			</div><!-- /.content-header -->
	
			<div class="content">
				<div class="container">
					
					<div class="card mb-0">
						<div class="card-header">
							<h3 class="card-title">EasyUI</h3>
						</div>
						<div class="card-body p-0">
							<table id="grid" style="height:420px;"></table>
						</div><!-- /.card-body -->
					</div><!-- /.card -->
		
				</div><!-- /.container -->
			</div><!-- /.content -->
		</div><!-- /.content-wrapper -->
		
		<div class="container">
			<footer class="main-footer text-sm">
				<a href="https://akhmads.com" target="_blank">Akhmads.com</a>
				<div class="float-right d-none d-sm-inline-block">
				<a href="https://github.com/akhmads" target="_blank">Github</a>
				</div>
			</footer>
		</div>
		
	</div><!-- /.wrapper -->
	
	<script>
	$(function(){
        easyloader.load('datagrid', function(){
			$('#grid').datagrid({
				queryParams: {},
				url:'<?php echo site_url('easyui/json') ?>',
				height: 420,
				fit: false,
				border: false,
				nowrap: true,
				striped: true,
				collapsible:true,
				remoteSort: true,
				sortName: 'name',
				sortOrder: 'asc',
				singleSelect:true,
				pagination: true,
				pageSize:50,
				pageList: [50,100],
				rownumbers:true,
				columns:[[
					{field:'name',title:'Country',width:200,sortable:true,align:'left'},
					{field:'capital',title:'Capital',width:200,sortable:true,align:'left'},
					{field:'currency',title:'Currency',width:100,sortable:true,align:'left'},
					{field:'region',title:'Region',width:150,sortable:true,align:'left'},
					{field:'subregion',title:'Sub Region',width:150,sortable:true,align:'left'},
					{field:'phonecode',title:'Phone Code',width:150,sortable:true,align:'left'},
				]]
			});
			$(window).resize(function(){ $('#grid').datagrid('resize'); });
		});
	});
	</script>
  </body>
</html>