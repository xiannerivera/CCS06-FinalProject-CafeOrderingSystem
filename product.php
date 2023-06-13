<?php include('header.php'); ?>
<body>
<?php include('navbar.php'); ?>
<div class="container">
	<h1 class="page-header text-center">PRODUCTS CRUD</h1>
	<div class="row">
		<div class="col-md-12">
			<select id="catList" class="btn btn-default">
				<option value="0">All Category</option>
				<?php
					$sql="select * from category";
					$catquery=$conn->query($sql);
					while($catrow=$catquery->fetch_array()){
						$catid = isset($_GET['category']) ? $_GET['category'] : 0;
						$selected = ($catid == $catrow['categoryid']) ? " selected" : "";
						echo "<option$selected value=".$catrow['categoryid'].">".$catrow['catname']."</option>";
					}
				?>
			</select>
			<a href="#addproduct" data-toggle="modal" class="pull-right btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Product</a>
		</div>
	</div>
	<div style="margin-top:10px;">
		<table class="table table-striped table-bordered">
			<thead>
				<th>Photo</th>
				<th>Product Name</th>
				<th>Price</th>
				<th>Action</th>
			</thead>
			<tbody>
				<?php
					$where = "";
					if(isset($_GET['category']))
					{
						$catid=$_GET['category'];
						$where = " WHERE product.categoryid = $catid";
					}
					$sql="select * from product left join category on category.categoryid=product.categoryid $where order by product.categoryid asc, productname asc";
					$query=$conn->query($sql);
					while($row=$query->fetch_array()){
						?>
						<tr>
							<td><a href="<?php if(empty($row['photo'])){echo "upload/noimage.jpg";} else{echo $row['photo'];} ?>"><img src="<?php if(empty($row['photo'])){echo "upload/noimage.jpg";} else{echo $row['photo'];} ?>" height="30px" width="40px"></a></td>
							<td><?php echo $row['productname']; ?></td>
							<td>&#8369; <?php echo number_format($row['price'], 2); ?></td>
							<td>
								<a href="#editproduct<?php echo $row['productid']; ?>" data-toggle="modal" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-pencil"></span> Edit</a> || <a href="#deleteproduct<?php echo $row['productid']; ?>" data-toggle="modal" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span> Delete</a>
								<?php include('product_modal.php'); ?>
							</td>
						</tr>
						<?php
					}
				?>
			</tbody>
		</table>
	</div>
</div>
<?php include('modal.php'); ?>
<script type="text/javascript">
	$(document).ready(function(){
		$("#catList").on('change', function(){
			if($(this).val() == 0)
			{
				window.location = 'product.php';
			}
			else
			{
				window.location = 'product.php?category='+$(this).val();
			}
		});
	});
</script>
</body>
</html>

<style>

h1 {
    color: black;
    margin-top: 30px;
  }

body {
    background-image: url('https://images.unsplash.com/photo-1554118811-1e0d58224f24?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8Y2FmZXxlbnwwfHwwfHx8MA%3D%3D&w=1000&q=80');
    background-size: cover;
    background-repeat: no-repeat;
    color: #fff;
}

.container {
    margin-top: 50px;
}

.page-header {
    margin-bottom: 30px;
}

.btn-primary {
    background-color: #337ab7;
    border-color: #2e6da4;
}

.btn-primary:hover, .btn-primary:focus, .btn-primary:active, .btn-primary.active {
    background-color: #DFC48B;
    border-color: #204d74;
}

.table {
    background-color: #fff;
}

.table th, .table td {
    color: #000;
}

.btn-success, .btn-danger {
    color: #fff;
}

.btn-success:hover, .btn-success:focus, .btn-success:active, .btn-success.active,
.btn-danger:hover, .btn-danger:focus, .btn-danger:active, .btn-danger.active {
    color: #DFC48B;
}

.modal-dialog {
    margin-top: 200px;
}

.modal-content {
    background-color: #f5f5f5;
}
</style>