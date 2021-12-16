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
$query=mysqli_query($conn,"select * from `categories` where id='$id'");
$row=mysqli_fetch_assoc($query);
?>

<?php
if (isset($_POST['update_user'])){
$id=$_GET['id'];
$name=$_POST['name'];
// Create connection
$conn = new mysqli("localhost", "root", "", "ecommerce");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE `categories` SET name='$name' WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
echo "Record updated successfully";
header('location: index.php');
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
    <h1 class="card-title">Chỉnh sửa users</h1>   
    <form class="forms-sample" method="post">
        <div class="form-group">
            <label for="exampleInputEmail1">name</label>
            <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $row['name']; ?>" name="name">
        </div>
  
        <button type="submit" class="btn btn-success mr-2" name="update_user" value="Update">Cập nhật</button>
        <a href="index.php" class="btn btn-light">Cancel</a>
    </form>
</div>
</div>
<!-- page-body-wrapper ends -->
<?php include '../inc/footer.php' ?>
    </div>
    <?php ec_enqueue_js() ?>
</body>
</html>