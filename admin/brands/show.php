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
<?php
include '../../dbconnect.php';
if(!isset($_GET['id'])){
    echo 'spam';
    die();
}
// đổ dữ liệu
$brandId = $_GET['id'];
$stmt = $pdo->prepare('SELECT * from brands where id = :id');    
$stmt->setFetchMode(PDO::FETCH_ASSOC);
$stmt->execute(array('id' => $brandId));
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
                      
                        </tr>
                      </thead>
                      <tbody>
                          <?php
                          $i = 1;  
                          while($row = $stmt->fetch()){ 
                              ?>
                        <tr>
                          <td><?php echo $i++ ?></td>
                          <td><?php echo $row['name'] ?></td>
                          <td><?php echo $row['desc'] ?></td> 
                             
                          
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