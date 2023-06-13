<?php
	include('conn.php');
	if(isset($_POST['productid'])){
		$customer = $_POST['customer'];
		$sql = "INSERT INTO purchase (customer, date_purchase) VALUES ('$customer', NOW())";
		$conn->query($sql);
		$pid = $conn->insert_id;
 
		$total = 0;
 
		foreach($_POST['productid'] as $product) {
			$proinfo = explode("||", $product);
			$productid = $proinfo[0];
			$iterate = $proinfo[1];
			$sql = "SELECT * FROM product WHERE productid='$productid'";
			$query = $conn->query($sql);
			$row = $query->fetch_array();
 
			if (isset($_POST['quantity_'.$iterate])) {
				$subt = $row['price'] * $_POST['quantity_'.$iterate];
				$total += $subt;

				$sql = "INSERT INTO purchase_detail (purchaseid, productid, quantity) VALUES ('$pid', '$productid', '".$_POST['quantity_'.$iterate]."')";
				$conn->query($sql);
			}
		}
 		
 		$sql = "UPDATE purchase SET total='$total' WHERE purchaseid='$pid'";
 		$conn->query($sql);
		header('location:sales.php');		
	}
	else {
		?>
		<script>
			window.alert('Please select a product');
			window.location.href='order.php';
		</script>
		<?php
	}
?>
