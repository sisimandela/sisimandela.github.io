<?php
include_once 'dbh.inc.php';


if(isset($_POST['submit'])) {
    $name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$msg = "";
$class = "alert alert";

    if(empty($name)) {
        $msg = "<b>Username is required</b>";
        echo "<div class='$class-danger'>$msg</div>";
    } 
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $msg = "<b>Please provide a valid email</b>";
        echo "<div class='$class-danger'>$msg</div>";
    } 
   
    if(empty($message)) {
        $msg = "<b>Please provide your message</b>";
        echo "<div class='$class-danger'>$msg</div>";
    } 
    else {
       
        $sql = "INSERT INTO requests (name, email, message) VALUES('$name', '$email', '$message');";
mysqli_query($conn, $sql);

        if(!$sql) {
            $msg = "<b>Could not add user</b>";
            echo "<div class='$class-success'>$msg</div>";
          
        } else {
         $msg = "<b>Your message has been sent. Thank you</b>";
            echo "<div class='$class-success'>$msg</div>"; 
            ?>
         
            <?php
            
        }
    }
}