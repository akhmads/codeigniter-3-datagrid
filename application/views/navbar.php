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
				<li class="nav-item"><a href="<?php echo site_url('tabulator') ?>" class="nav-link <?php echo active_menu('tabulator') ?>">Tabulator</a></li>
				<li class="nav-item"><a href="<?php echo site_url('easyui') ?>" class="nav-link <?php echo active_menu('easyui') ?>">EasyUI</a></li>
				<li class="nav-item"><a href="<?php echo site_url('bootstrap4') ?>" class="nav-link <?php echo active_menu('bootstrap4') ?>">Bootstrap 4</a></li>
				</ul>
				</div>
			</div>
		</nav>