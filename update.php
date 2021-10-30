<?php
    $con = mysqli_connect('localhost','root','','facebookclone');
    $phoneoremail = $_POST['phoneoremail'];
    $password = $_POST['password'];

   $check = mysqli_query($con,"UPDATE userdata SET password = '$passwrod'WHERE phoneoremail = '$phoneoremail' and password = '$password'");

    if($check > 0){
        header("Location:http://localhost/facebookclone/mainpage.html");
    
    }

?>