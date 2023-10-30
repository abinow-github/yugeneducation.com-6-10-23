
<?php
include("root/db.php");
$id =$_GET['sa'];
$sql ="DELETE FROM  blog WHERE id=$id";
if(mysqli_query($mysqli,$sql)){
    echo "record deleted succsessfully";
}else{
    echo "error deleting record".mysqli_error($mysqli);
}
header ('location:blog.php?');
 
?>