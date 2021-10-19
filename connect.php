<?php 

    if(isset($_POST['submit']))
    {
       $UserName = $_POST['UName'];
       $Email = $_POST['Email'];
       $Subject = $_POST['Subject'];
       $Msg = $_POST['msg'];

       if(empty($UserName) || empty($Email) || empty($Subject) || empty($Msg))
       {
           header('location:index.php?error');
       }
       else
       {
           $to = "yourcodepartner@gmail.com";

           if(mail($to,$Subject,$Msg,$Email))
           {
               header("location:contact.html?success");
           }
       }
    }
    else
    {
        header("location:contact.html");
    }
?>