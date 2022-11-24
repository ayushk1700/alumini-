<?php
require('connection.inc.php');
require('function.inc.php');

    $name = get_safe_value($con, $_POST['name']);
    $email = get_safe_value($con, $_POST['email']);
    $message = get_safe_value($con, $_POST['message']);

    if (!(filter_var($email, FILTER_VALIDATE_EMAIL))) {
        echo "invalidEml";
    }  
    else {
        $res = mysqli_query($con, "insert into enquiry(name,email,message) values('$name','$email','$message')");
        echo "insert";
    } 

?>
