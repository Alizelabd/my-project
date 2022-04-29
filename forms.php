<?php
    $name = $email = $message = '';
    $errors = array('name' => '', 'email' => '', 'message' => '');

    if(isset($_POST['submit'])){

        if(empty($_POST['name'])){
            $errors['name'] = 'A name is required';
        }else{
            $name = $_POST['name'];
            if(!preg_match('/^[a-zA-Z\s]+$/', $name)){
                $errors['name'] = 'Title must be letters and spaces only';
            }
        }
    }
    if(empty($_POST['email'])){
        $errors['email'] = 'An email is required';
    }else{
        $email = $_POST['email'];
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $errors['email'] = 'Email must be a valid email address';
        }
    }
    if(empty($_POST['message'])){
        $errors['message'] = 'At least one message is required';
    }else{
        $message = $_POST['message'];
        if(!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $message)){
            $errors['message'] = 'message must be a comma separated list';
        }
    }

     if(array_filter($errors)){

    }else {
        header('location: templates/index.php');
    }
?>
<!DOCTYPE html>
<html>
    <?php include('templates/header.php'); ?>
    <section class="container blow-text">
        <h4 class="center">CONTACT US</h4>
        <form class="white" action="forms.php" method="POST">
            <label>Your Name</label>
            <input type="text" name="name" value="<?php echo htmlspecialchars($name) ?>">
            <div class="red-text"><?php echo $errors['name']; ?> </div>
            <label>Your Email</label>
            <input type="text" name="email" value="<?php echo htmlspecialchars($email) ?>">
            <div class="red-text"><?php echo $errors['email']; ?> </div>
            <labe>Your Message</label>
            <input type="text" name="message" value="<?php echo htmlspecialchars($message) ?>">
            <div class="red-text"><?php echo $errors['message']; ?> </div>
            <div class="center">
                <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
            </div> 
        </form>
    </section>

    <?php include("templates/footer.php"); ?>

</html>