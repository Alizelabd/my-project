<?php
$conn = mysqli_connect('localhost', 'Aliz', 'almasa1997', 'aliz');
if(!$conn){
    echo 'connection error: ' . mysqli_connect_error();
}
?>
<!DOCTYPE html>
<html>
    <?php include('header.php'); ?>
    <?php include('footer.php'); ?>


</html>