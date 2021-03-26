<?php
 
 if(isset($_POST['submit']))
 {
    $UserName = $_POST['UName'];
    $Email = $_POST['Email'];
   
    $Msg = $_POST['msg'];

    if(empty($UserName) || empty($Email) || empty($Msg))
    {
        header('location:index.php?error');
    }
    else
    {
        $to = "sisaymandefro@yahoo.com";

        if(mail($to,$Msg,$Email))
        {
            header("location:index.php?success");
        }
    }
 }
 else
 {
     header("location:index.php");
 }
?>
    