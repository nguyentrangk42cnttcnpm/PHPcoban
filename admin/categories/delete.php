  <!--hàm xóa -->
  <?php
require '../connect.php';
if(isset($_REQUEST['id']) and $_REQUEST['id']!=""){
$id=$_GET['id'];
$sql = "DELETE FROM categories WHERE id='$id'";
if ($conn->query($sql) === TRUE) {
echo "Xoá thành công!";
// header('location: index.php');
} else {
echo "Error updating record: " . $conn->error;
}

$conn->close();
}
?>