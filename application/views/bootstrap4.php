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
	
	<!-- Admin LTE -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.1.0/js/adminlte.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.1.0/css/adminlte.min.css" />
	
	<style>
	body { font-family: 'Nunito', sans-serif; }
	</style>
	
    <title>Codeigniter 3 + Bootstrap 4</title>
  </head>
  <body class="hold-transition layout-top-nav">
	<div class="wrapper">
	
		<?php $this->load->view('navbar') ?>
		
		<div class="content-wrapper">
			
			<!-- Content Header (Page header) -->
			<div class="content-header">
				<div class="container">
					<div class="row mb-2">
						<div class="col-sm-6">
							<h1 class="m-0 text-dark"> Codeigniter 3 + Bootstrap 4 <small>Datagrid</small></h1>
						</div><!-- /.col -->
						<div class="col-sm-6">
						<ol class="breadcrumb float-sm-right">
							<li class="breadcrumb-item"><a href="#">Home</a></li>
							<li class="breadcrumb-item active">Bootstrap 4</li>
						</ol>
						</div><!-- /.col -->
					</div><!-- /.row -->
				</div><!-- /.container -->
			</div><!-- /.content-header -->
	
			<div class="content">
				<div class="container">
					
					<div class="card">
						<div class="card-header">
							<h3 class="card-title">Bootstrap 4</h3>
						</div>
						<div class="card-body p-0">
							<table id="grid" class="table table-bordered table-sm table-striped">
							<thead>
							<tr>
								<th>#</th>
								<th>Country</th>
								<th>Capital</th>
								<th>Currency</th>
								<th>Region</th>
								<th>Sub Region</th>
								<th>Phone Code</th>
							</tr>
							</thead>
							<tbody>
							<?php
							$num = $START;
							foreach( $countries->result() as $row ){
							$num = $num + 1;
							?>
							<tr>
								<td><?php echo $num ?></td>
								<td><?php echo $row->name ?></td>
								<td><?php echo $row->capital ?></td>
								<td><?php echo $row->currency ?></td>
								<td><?php echo $row->region ?></td>
								<td><?php echo $row->subregion ?></td>
								<td><?php echo $row->phonecode ?></td>
							</tr>
							<?php } ?>
							</tbody>
							<tfoot>
							<tr>
								<th>#</th>
								<th>Country</th>
								<th>Capital</th>
								<th>Currency</th>
								<th>Region</th>
								<th>Sub Region</th>
								<th>Phone Code</th>
							</tr>
							</tfoot>
							</table>
							
							<?php echo $PAGING ?>
						</div><!-- /.card-body -->
					</div><!-- /.card -->
		
				</div><!-- /.container -->
			</div><!-- /.content -->
		</div><!-- /.content-wrapper -->
		
	</div><!-- /.wrapper -->

  </body>
</html>