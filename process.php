<?php 

    if(isset($_POST['btn-send']))
    {
       $UserName = $_POST['UName'];
       $Email = $_POST['Email'];
       $Subject = $_POST['Subject'];
       $Msg = $_POST['msg'];

       if(empty($UserName) || empty($Email) || empty($Subject) || empty($Msg))
       {
           header('location:contact.php?error');
       }
       else
       {
           $to = "ahmedbhatti27@gmail.com";

           if(mail($to,$Subject,$Msg,$Email));
           {
               header("location:contct.php?success");
           }
       }
    }
    else
    {
        header("location:contact.php");
    }



?>