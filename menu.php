<?php include('header.php'); ?>
<body>
<?php include('navbar.php'); ?>
<div class="container">
<h1 class="page-header text-center" style="font-family: 'Impact', sans-serif; color: #DFC48B; letter-spacing: 30px; font-size: 90px;">MENU</h1>
	<ul class="nav nav-tabs" style="color: brown;">
		<?php
			$sql="select * from category order by categoryid asc limit 1";
			$fquery=$conn->query($sql);
			$frow=$fquery->fetch_array();
			?>
				<li class="active"><a data-toggle="tab" href="#<?php echo $frow['catname'] ?>" style="font-family: 'Optima', sans-serif; color: #DFC48B;font-weight: bold;"><?php echo $frow['catname'] ?></a></li>
			<?php

			$sql="select * from category order by categoryid asc";
			$nquery=$conn->query($sql);
			$num=$nquery->num_rows-1;

			$sql="select * from category order by categoryid asc limit 1, $num";
			$query=$conn->query($sql);
			while($row=$query->fetch_array()){
				?>
				<li><a data-toggle="tab" href="#<?php echo $row['catname'] ?>" style="font-family: 'Optima', sans-serif; color: #DFC48B;font-weight: bold;"><?php echo $row['catname'] ?></a></li>
				<?php
			}
		?>
	</ul>

	<div class="tab-content">
		<?php
			$sql="select * from category order by categoryid asc limit 1";
			$fquery=$conn->query($sql);
			$ftrow=$fquery->fetch_array();
			?>
				<div id="<?php echo $ftrow['catname']; ?>" class="tab-pane fade in active" style="margin-top:20px;">
					<?php

						$sql="select * from product where categoryid='".$ftrow['categoryid']."'";
						$pfquery=$conn->query($sql);
						$inc=4;
						while($pfrow=$pfquery->fetch_array()){
							$inc = ($inc == 4) ? 1 : $inc+1; 
							if($inc == 1) echo "<div class='row'>"; 
							?>
								<div class="col-md-3">
									<div class="panel panel-default">
										<div class="panel-heading text-center" style="font-family: 'Optima', sans-serif; color: #333;">
											<b><?php echo $pfrow['productname']; ?></b>
										</div>
										<div class="panel-body">
											<img src="<?php if(empty($pfrow['photo'])){echo "upload/noimage.jpg";} else{echo $pfrow['photo'];} ?>" height="225px;" width="100%">
										</div>
										<div class="panel-footer text-center" style="font-family: 'Optima', sans-serif; color: #333;">
										&#x20B1; <?php echo number_format($pfrow['price'], 2); ?>
										</div>
									</div>
								</div>
							<?php
							if($inc == 4) echo "</div>";
						}
						if($inc == 1) echo "<div class='col-md-3'></div><div class='col-md-3'></div><div class='col-md-3'></div></div>"; 
						if($inc == 2) echo "<div class='col-md-3'></div><div class='col-md-3'></div></div>"; 
						if($inc == 3) echo "<div class='col-md-3'></div></div>"; 
					?>
		    	</div>
			<?php

			$sql="select * from category order by categoryid asc";
			$tquery=$conn->query($sql);
			$tnum=$tquery->num_rows-1;

			$sql="select * from category order by categoryid asc limit 1, $tnum";
			$cquery=$conn->query($sql);
			while($trow=$cquery->fetch_array()){
				?>
				<div id="<?php echo $trow['catname']; ?>" class="tab-pane fade" style="margin-top:20px;">
					<?php

						$sql="select * from product where categoryid='".$trow['categoryid']."'";
						$pquery=$conn->query($sql);
						$inc=4;
						while($prow=$pquery->fetch_array()){
							$inc = ($inc == 4) ? 1 : $inc+1; 
							if($inc == 1) echo "<div class='row'>"; 
							?>
								<div class="col-md-3">
									<div class="panel panel-default">
										<div class="panel-heading text-center" style="font-family: 'Optima', sans-serif; color: #333;">
											<b><?php echo $prow['productname']; ?></b>
										</div>
										<div class="panel-body">
											<img src="<?php if($prow['photo']==''){echo "upload/noimage.jpg";} else{echo $prow['photo'];} ?>" height="225px;" width="100%">
										</div>
										<div class="panel-footer text-center" style="font-family: 'Optima', sans-serif; color: #333;">
										&#x20B1; <?php echo number_format($prow['price'], 2); ?>
										</div>
									</div>
								</div>
							<?php
							if($inc == 4) echo "</div>";
						}
						if($inc == 1) echo "<div class='col-md-3'></div><div class='col-md-3'></div><div class='col-md-3'></div></div>"; 
						if($inc == 2) echo "<div class='col-md-3'></div><div class='col-md-3'></div></div>"; 
						if($inc == 3) echo "<div class='col-md-3'></div></div>"; 
					?>
		    	</div>
				<?php
			}
		?>
	</div>
	
</div>
</body>
<footer style="font-family: 'Optima', sans-serif; color: #333;font-weight: bold;"><center>By Agustin, Rivera, Torres | BSCS 2A (2022-2023)</center></footer>
</html>

<style>
  body {
    margin: 0;
    padding: 0;
	background-image: url('https://images.unsplash.com/photo-1554118811-1e0d58224f24?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8Y2FmZXxlbnwwfHwwfHx8MA%3D%3D&w=1000&q=80');
  }
  

  .nav-tabs {
    margin-bottom: 20px;
  }

  .panel {
    margin-bottom: 20px;
  }

  .panel-heading {
    background-color: #f5f5f5;
    font-weight: bold;
    padding: 10px;
  }

  .panel-body {
    padding: 0;
    text-align: center;
  }

  .panel-footer {
    background-color: #f5f5f5;
    font-weight: bold;
    padding: 10px;
  }

  footer {
    background-color: #DFC48B;
    padding: 10px;
    margin-top: 20px;
  }
</style>
