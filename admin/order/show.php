<?php include '../functions.php' ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Star Admin Premium Bootstrap Admin Dashboard Template</title>
    
    <?php ec_enqueue_css() ?>
  </head>
  <body>

  <!--hàm xóa -->
<?php
require '../connect.php';
if(isset($_REQUEST['id']) and $_REQUEST['id']!=""){
$id=$_GET['id'];
$sql = "DELETE FROM orders WHERE id='$id'";
if ($conn->query($sql) === TRUE) {
echo "Xoá thành công!";
header('location: index.php');
} else {
echo "Error updating record: " . $conn->error;
}

$conn->close();
}
?>



    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      <!-- begin header -->
      <?php include '../inc/header.php' ?>
       <!-- end header -->
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <!-- begin sidebar -->
      <?php include '../inc/sidebar.php' ?>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                  <h4 class="card-title">DANH SÁCH ORDERS</h4>
                  
                    <table class="table table-striped">
                    <thead>
                        <tr>
                          <th>Số thứ tự</th>
                          <th>name</th>
                          <th>desc</th>
                          <th>created_at</th>
                          <th>status</th>
                          <th>customer_id</th>
                   
                        </tr>
                      </thead>
                      <tbody>
                      <?php

                        $query=mysqli_query($conn,"select * from `orders`");
                        while($row=mysqli_fetch_array($query)){
                        ?>
                        <tr>
                          <td><?php echo $row['id']; ?></td>
                          <td><?php echo $row['name']; ?></td>
                          <td><?php echo $row['desc']; ?></td> 
                          <td><?php echo $row['created_at']; ?></td> 
                          <td><?php echo $row['status']; ?></td>
                          <td><?php echo $row['customer_id']; ?></td>
                      
                         
                        </tr>    
                        <?php }?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>       
            </div>
          </div>
        </div>      <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
      <?php include '../inc/footer.php' ?>
    </div>
    
    
  </body>
</html>