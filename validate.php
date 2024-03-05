<?php
if(empty($_POST["username"])){
    header("location:usernameValidation.php?empty=1");
}
else{
    $username=$_POST["username"];
    if(!preg_match('/^[a-zA-Z0-9][^_]$/i', $userName)) {
        header("location:usernameValidation.php?invalid_alpha_underscore=1");
    }
    else{
        header("location:usernameValidation.php?valid=1");
    }
    
    
}


?>