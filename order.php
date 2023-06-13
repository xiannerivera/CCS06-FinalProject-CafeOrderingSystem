<?php include('header.php'); ?>
<body>
<?php include('navbar.php'); ?>

<div class="container">

	<h1 class="page-header text-center">ORDER</h1>
	<form method="POST" action="purchase.php">
		<table class="table table-striped table-bordered">
			<thead>
				<th class="text-center"><input type="checkbox" id="checkAll"></th>
				<th>Category</th>
				<th>Product Name</th>
				<th>Price</th>
				<th>Quantity</th>
			</thead>
			<tbody>
				<?php 
					$sql="select * from product left join category on category.categoryid=product.categoryid order by product.categoryid asc, productname asc";
					$query=$conn->query($sql);
					$iterate=0;
					while($row=$query->fetch_array()){
						?>
						<tr>
							<td class="text-center"><input type="checkbox" value="<?php echo $row['productid']; ?>||<?php echo $iterate; ?>" name="productid[]" style=""></td>
							<td><?php echo $row['catname']; ?></td>
							<td><?php echo $row['productname']; ?></td>
							<td class="text-right">&#x20B1; <?php echo number_format($row['price'], 1); ?></td>
							<td><input type="text" class="form-control" name="quantity_<?php echo $iterate; ?>"></td>
						</tr>
						<?php
						$iterate++;
					}
				?>
			</tbody>
		</table>
		
		<div class="row justify-content-center">
	<div class="col-md-6 text-center">
		<input type="text" name="customer" class="form-control form-control-lg" placeholder="Customer Name" required>
	</div>
	<div class="col-md-2 text-center">
		<button type="submit" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-floppy-disk"></span> Save </button>
	</div>
</div>

	</form>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		$("#checkAll").click(function(){
	    	$('input:checkbox').not(this).prop('checked', this.checked);
		});
	});
</script>
</body>
<footer style="font-family: 'Optima', sans-serif; color: #333;font-weight: bold;"><center>By Agustin, Rivera, Torres | BSCS 2A (2022-2023)</center></footer>
</html>


<style>
	body {
		margin: 0;
		padding: 0;
		background-image: url('https://images.unsplash.com/photo-1554118811-1e0d58224f24?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8Y2FmZXxlbnwwfHwwfHx8MA%3D%3D&w=1000&q=80');
	}

	.container {
		margin-top: 20px;
	}

	.page-header {
		font-family: 'Optima', sans-serif;
		color: #DFC48B;
		letter-spacing: 10px;
		font-size: 36px;
	}

	.table {
		background-color: #FFFFFF;
	}

	.table th {
		background-color: #DFC48B;
		color: #735619;
	}

	.table td {
		background-color: #F9F9F9;
	}

	.form-control {
		border-color: #DFC48B;
	}

	.btn-primary {
		background-color: #DFC48B;
		border-color: #DFC48B;
	}

	.btn-primary:hover {
		background-color: #735619;
		border-color: #735619;
	}

	.btn-primary:focus {
		background-color: #735619;
		border-color: #735619;
	}
	footer {
    background-color: #DFC48B;
    padding: 10px;
    margin-top: 20px;
  }
</style>