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
// Kết nối Database
include '../connect.php';
$id=$_GET['id'];
$query=mysqli_query($conn,"select * from `brands` where id='$id'");
$row=mysqli_fetch_assoc($query);
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
                  <h4 class="card-title">DANH SÁCH NHÃN HÀNG</h4>
                  <a class="btn btn-primary" style = "margin-bottom:10px;" href="create.php">Thêm</a>
                    <table class="table table-striped">
                    <thead>
                        <tr>
                          <th>Số thứ tự</th>
                          <th>Tên nhãn hàng</th>
                          <th>Mô tả Nhãn hàng</th>
                          <th>Chức năng</th>
                        </tr>
                      </thead>
                      <tbody>
                          <?php
                         $query=mysqli_query($conn,"select * from `brands`");
                         while($row=mysqli_fetch_array($query)){
                              ?>
                        <tr>
                          <td><?php echo $row['id']; ?></td>
                          <td><?php echo $row['name']; ?></td>
                          <td><?php echo $row['desc']; ?></td> 
                          <td><a class="btn btn-primary" href="edit.php?id=<?php echo $row['id']; ?>">Sửa</a></td> 
                          <td><a class="btn btn-primary" href="delete.php?id=<?php echo $row['id']?>">Xóa</a></td>     
                          <td><a class="btn btn-primary" href="show.php">Show</td>
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
    <?php ec_enqueue_js() ?>
    
  </body>
</html>