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
    if(isset($_POST['name']) || isset($_POST['desc'])){
        echo 'spam';
        die();
    }   
?>
<?php 
    if(isset($_POST['btnThem'])){
        $nameBrand = $_POST['name'];    
        $descBrand = $_POST['desc'];
        if(!empty($nameBrand) && !empty($descBrand)){
            $stmt = $pdo->prepare('INSERT INTO brands (`name`, `desc`) values (:name, :desc)');
            $stmt->bindParam(':name', $nameBrand, PDO::PARAM_STR);
            $stmt->bindParam(':desc', $descBrand, PDO::PARAM_STR);
            $stmt->execute();
        }
        header("Location: index.php");
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
    <h1 class="card-title">Thêm mới nhãn hiệu</h1>   
    <form class="forms-sample" action="" method="post">
        <div class="form-group">
            <label for="exampleInputEmail1">BRANDS</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name ="name" value="<?php echo $row['name']; ?>">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">DESC</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="desc" value="<?php echo $row['desc']; ?>">
        </div>
        <button type="submit" class="btn btn-success mr-2" name="btnThem">Submit</button>
        <a href ="../index.php" class="btn btn-light">Cancel</a>
    </form>
</div>
</div>
<!-- page-body-wrapper ends -->
<?php include '../inc/footer.php' ?>
    </div>
    <?php ec_enqueue_js() ?>
</body>