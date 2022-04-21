<?php
/*
if(isset($_GET['submit'])){
    echo $_GET['name'];
    echo $_GET['email'];
    echo $_GET['message'];
}
*/
if(isset($_POST['submit'])){
    echo $_POST['name'];
    echo $_POST['email'];
    echo $_POST['message'];
}
?>
<!DOCTYPE html>
<html>
    <?php include('templates/header.php'); ?>
    <section class="container grey-text">
        <h4 class="center">FORMS PHP</h4>
        <form class="white" action="forms.php" method="POST">
            <label>Your Name:</label>
            <input type="text" name="name">
            <label >Your Email:</label>
            <input type="text" name="email">
            <label>Your Message</label>
            <input type="text" name="message">
            <div class="center">
                <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
            </div>
        </form>
    </section>
    <?php include('templates/footer.php'); ?>


</html>