<?php include('header.php'); ?>
<body>
  <?php include('navbar.php'); ?>
  <div class="container">
    <h1 class="page-header text-center">SALES</h1>
    <table class="table table-striped table-bordered">
      <thead>
        <tr>
          <th>Date</th>
          <th>Customer</th>
          <th>Total Sales</th>
          <th>Details</th>
        </tr>
      </thead>
      <tbody>
        <?php
          $sql = "SELECT * FROM purchase ORDER BY purchaseid DESC";
          $query = $conn->query($sql);
          while ($row = $query->fetch_array()) {
            ?>
            <tr>
              <td><?php echo date('M d, Y h:i A', strtotime($row['date_purchase'])); ?></td>
              <td><?php echo $row['customer']; ?></td>
              <td class="text-right">&#8369; <?php echo number_format($row['total'], 2); ?></td>
              <td>
                <a href="#details<?php echo $row['purchaseid']; ?>" data-toggle="modal" class="btn btn-primary btn-sm">
                  <span class="glyphicon glyphicon-search"></span> View
                </a>
                <?php include('sales_modal.php'); ?>
              </td>
            </tr>
            <?php
          }
        ?>
      </tbody>
    </table>
    
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

  h1 {
    color: #DFC48B;
    margin-top: 30px;
  }

  table {
    background-color: #fff;
  }

  th {
    background-color: #DFC48B;
    color: #fff;
  }

  td {
    background-color: #fff;
  }

  .btn-primary {
    background-color: #DFC48B;
    color: #fff;
    border-color: #337ab7;
  }

  .btn-primary:hover, .btn-primary:focus {
    background-color: #286090;
    border-color: #204d74;
  }

  .btn-primary:active, .btn-primary.active {
    background-color: #204d74;
    border-color: #122b40;
  }

  footer {
    background-color: #DFC48B;
    padding: 10px;
    margin-top: 20px;
  }
</style>
