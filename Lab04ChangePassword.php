<?php 

    $currentpassword = $_POST['CurrentPassword'];
    $newpassword = $_POST['NewPassword'];
    $retypepassword = $_POST['RetypePassword'];

    if($currentpassword == "" || $newpassword == "") {
        echo "invalid password!";
    }else if($newpassword == "" && $retypepassword==""){
        echo "Password Match";
    }else{
        echo "invalid user";
    }

    //$_POST
?>