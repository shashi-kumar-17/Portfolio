<?php 

    if(isset($_POST['btn-send']))

    {

       $UserName = $_POST['UName'];

       $Email = $_POST['Email'];

       $Subject = $_POST['Subject'];

       $Msg = $_POST['msg'];

       if(empty($UserName) || empty($Email) || empty($Subject) || empty($Msg))

       {

           header('location:contactMe.php?error');

       }

       else

       {

           $to = "shashi17kumar06@gmail.com";

           if(mail($to,$Subject,$Msg,$Email))

           {

               header("location:contactMe.php?success");

           }

       }

    }

    else

    {

        header("location:contactMe.php");

    }

?>
