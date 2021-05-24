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
	
	<!-- Tabulator -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/tabulator/4.9.3/css/bootstrap/tabulator_bootstrap4.min.css" rel="stylesheet" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tabulator/4.9.3/js/tabulator.min.js"></script>
	
	<!-- Admin LTE -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.1.0/js/adminlte.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.1.0/css/adminlte.min.css" />
	
	<style>
	body { font-family: 'Nunito', sans-serif; }
	.tabulator { font-size:14px; }
	.tabulator .tabulator-loader { background:rgba(221,221,221,.4); }
	</style>
	
    <title>Codeigniter 3 + Tabulator</title>
  </head>
  <body class="hold-transition layout-top-nav">
	<div class="wrapper">
	
		<!-- Navbar -->
		<nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
			<div class="container">
				<a href="<?php echo site_url('') ?>" class="navbar-brand">
					<span class="brand-text font-weight-light">Datagrid</span>
				</a>

				<button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse order-3" id="navbarCollapse">
				<!-- Left navbar links -->
				<ul class="navbar-nav">
				<li class="nav-item"><a href="<?php echo site_url('tabulator') ?>" class="nav-link active">Tabulator</a></li>
				</ul>
				</div>
			</div>
		</nav>
		
		<div class="content-wrapper">
			
			<!-- Content Header (Page header) -->
			<div class="content-header">
				<div class="container">
					<div class="row mb-2">
						<div class="col-sm-6">
							<h1 class="m-0 text-dark"> Codeigniter 3 + Tabulator <small>Datagrid</small></h1>
						</div><!-- /.col -->
						<div class="col-sm-6">
						<ol class="breadcrumb float-sm-right">
							<li class="breadcrumb-item"><a href="#">Home</a></li>
							<li class="breadcrumb-item active">Tabulator</li>
						</ol>
						</div><!-- /.col -->
					</div><!-- /.row -->
				</div><!-- /.container -->
			</div><!-- /.content-header -->
	
			<div class="content">
				<div class="container">
					
					<div class="card">
						<div class="card-header">
							<h3 class="card-title">Tabulator</h3>
						</div>
						<div class="card-body p-0">
							<table id="grid" class="table table-sm table-bordered table-striped"></table>
						</div><!-- /.card-body -->
					</div><!-- /.card -->
		
				</div><!-- /.container -->
			</div><!-- /.content -->
		</div><!-- /.content-wrapper -->
		
	</div><!-- /.wrapper -->
	
	<script>
	
		var table = new Tabulator(document.getElementById('grid'), {
			responsiveLayout:false,
			//height:"500px",
			minHeight:400,
			layout: "fitColumns", // "fitColumns" | "fitData"
			ajaxURL:"<?php echo site_url('tabulator/json') ?>",
			ajaxSorting:true,
			ajaxFiltering:true,
			pagination:"remote",
			paginationSize:10,
			selectable:1,
			ajaxLoaderLoading: "<div><i style=\"font-size:22px;\" class=\"fa fa-cog fa-spin\"></i> <i style=\"font-size:14px;font-weight:normal;\">Loading</i></div>",
			columns:[
				{title:"Number", field:"num", width:80, headerSort:false, headerFilter:false},
				{title:"Country", field:"name", sorter:"string", headerFilter:true, headerFilterPlaceholder:" "},
				{title:"Capital", field:"capital", sorter:"string", headerFilter:true, headerFilterPlaceholder:" "},
				{title:"Currency", field:"currency", sorter:"string", headerFilter:true, headerFilterPlaceholder:" "},
				{title:"Region", field:"region", sorter:"string", headerFilter:true, headerFilterPlaceholder:" "},
				{title:"Sub Region", field:"subregion", sorter:"string", headerFilter:true, headerFilterPlaceholder:" "},
				{title:"Phone Code", field:"phonecode", sorter:"string", headerFilter:true, headerFilterPlaceholder:" "},
			],
			renderComplete:function(){
			},
		});

	</script>
  </body>
</html>