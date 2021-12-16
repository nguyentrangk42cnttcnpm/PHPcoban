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
// Kết nối Database
include '../connect.php';
$id=$_GET['id'];
$query=mysqli_query($conn,"select * from `users` where id='$id'");
$row=mysqli_fetch_assoc($query);
?>
<?php
if (isset($_POST['create_user'])){
    $id=$_GET['id'];
    $username=$_POST['username'];
    $pass=$_POST['pass'];
    $role=$_POST['role'];
$sql = "INSERT INTO `users` VALUES (id='$id',username='$name',role='$role')";
if ($conn->query($sql) === TRUE) {
    echo "Record Create successfully";
    } else {
    echo "Error updating record: " . $conn->error;
    }
    
    $conn->close();
    }
?>
<div class="container-scroller">
      <!-- partial:partials/_navbar.php -->
      <!-- begin header -->
      <?php include '../inc/header.php' ?>
       <!-- end header -->
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.php -->
        <!-- begin sidebar -->
      <?php include '../inc/sidebar.php' ?>
<div class="card-body" style = " width:1000px; margin: 0 auto;">
    <h1 class="card-title">Thêm mới users</h1>   
    <form class="forms-sample" action="" method="post">
        <div class="form-group">
            <label for="exampleInputEmail1">username</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name ="username" value="<?php echo $row['username']; ?>">
        
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">pass</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="pass" value="<?php echo $row['pass']; ?>">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">role</label>
            <select name="role">
                    <option value="">-- Chọn --</option>
                    <option value="<?php echo $row['role']; ?>">nam</option>
                    <option value="<?php echo $row['pass']; ?>" >nữ</option>
                </select>
               
        </div>
        <button type="submit" class="btn btn-success mr-2" name="create_user" value="Create">Submit</button>
        <a href ="../index.php" class="btn btn-light">Cancel</a>
    </form>
</div>
</div>
<!-- page-body-wrapper ends -->
<?php include '../inc/footer.php' ?>
    </div>
    <?php ec_enqueue_js() ?>
</body>