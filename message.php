<?php

// let's get all form values

include 'config.php';

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$website = $_POST['website'];
$message = $_POST['message'];

$sql = "SELECT email FROM emailinfo WHERE email = '{$email}' ";
$result = mysqli_query($conn,$sql) or die("Query Failed....!");

if(mysqli_num_rows($result) > 0){
    echo "User Name Is Already Exist";
}else{
    $sql1 = "INSERT INTO emailinfo(name,email,phone,website,message) values('{$name}','{$email}','{$phone}','{$website}','{$message}')";
    if(mysqli_query($conn,$sql1)){
        echo "alert(Your Data Is Successfull Submited....!)";
        if(!empty($email)&& !empty($message)){ // if email and message field is not empty
            if(filter_var($email,FILTER_VALIDATE_EMAIL)){ // if user entered email is valid
                $receive = "dp390195@gmail.com"; // email receiver email address
                $subject = "Form : $name <$email>?"; // Subject of the email. Subject Looks like from: Patel Deepak <dp390195@gmail.com
                // Merging concating all user values inside body variables
                $body = "Name: $name<br>Email: $email<br>Phone: $phone<br>Website: $website<br>Message: $message";
                $sender = "Form: $email"; // sender email
                if(mail($receive,$subject,$body,$sender)){ // mail() is a inbuild php fucntion to send mail
                    echo "Your Message has been sent...!<br>";
                }else{
                    echo "Sorry, Faild to send your message...!";
                }
            }else {
                echo "Enter a Valid Email Address!";
            }
        }else{
            echo "Email and Password field is required..!";
        }
        
    }
}


?>