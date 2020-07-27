<div class="content-header row">
    <div class="col-md-12">
		<div class="alert alert-info" role="alert">
			<i class="fas fa-info-circle title-icon"></i> Welcome to <strong>For-U</strong>.
		</div>
	</div>
</div>

<div class="row mt-4">
	<!-- menampilkan informasi jumlah data pelanggan -->
    <div class="col-md-3 col-sm-6 col-xs-12 mb-4">
		<div class="card center">
			<div class="center mt-4">
				<i class="fas fa-user text-warning fa-7x"></i>
			</div>
			<div class="card-body">
				<h4 class="card-title" id="load-customer"></h4>
				<p class="card-text">Data Customer</p>
			</div>
		</div>
	</div>
	<!-- menampilkan informasi jumlah data pulsa -->
	<div class="col-md-3 col-sm-6 col-xs-12 mb-4">
		<div class="card center">
			<div class="center mt-4">
				<i class="fas fa-tablet-alt text-info fa-7x"></i>
			</div>
			<div class="card-body">
				<h4 class="card-title" id="load-pulsa"></h4>
				<p class="card-text">Data Pulsa</p>
			</div>
		</div>
	</div>
	<!-- menampilkan informasi jumlah data penjualan -->
	<div class="col-md-3 col-sm-6 col-xs-12 mb-4">
		<div class="card center">
			<div class="center mt-4">
				<i class="fas fa-shopping-cart text-danger fa-7x"></i>
			</div>
			<div class="card-body">
				<h4 class="card-title" id="load-sales"></h4>
				<p class="card-text">Data Sales</p>
			</div>
		</div>
	</div>
	<!-- menampilkan informasi jumlah total Penjualan -->
	<div class="col-md-3 col-sm-6 col-xs-12 mb-4">
		<div class="card center">
			<div class="center mt-4">
				<i class="fas fa-dollar-sign text-success fa-7x"></i>
			</div>
			<div class="card-body">
				<h4 class="card-title" id="load-total"></h4>
				<p class="card-text">Total Sales</p>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
$(document).ready(function(){
	// load file untuk menampilkan jumlah data pada masing-masing id
    $('#load-customer').load('modules/home/get_customer.php');
    $('#load-pulsa').load('modules/home/get_pulsa.php');
    $('#load-sales').load('modules/home/get_sales.php');
    $('#load-total').load('modules/home/get_total.php');
});
</script>