<?php

// if (isset($_POST['save'])) {
   

//    include 'config.php';

//    $name = $_POST['name'];
//    $email = $_POST['email'];
//    $phone = $_POST['phone'];
//    $website = $_POST['website'];
//    $message = $_POST['message'];
 
//    $sql = "SELECT email FROM emailinfo WHERE email = '{$email}' ";
//    $result = mysqli_query($conn,$sql) or die("Query Failed....!");

//    if(mysqli_num_rows($result) > 0){
//         echo "User Name Is Already Exist";
//    }else{
//         $sql1 = "INSERT INTO emailinfo(name,email,phone,website,message) values('{$name}','{$email}','{$phone}','{$website}','{$message}')";
//         if(mysqli_query($conn,$sql1)){
//             echo "alert(Your Data Is Successfull Submited....!)";
//         }

//    }

// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email - Sending - Message</title>
    <link rel="stylesheet" href="style.css">
    <!-- This Link Is Font Awesome & Google Font use -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="">
</head>
<body>

    <div class="wrapper">
        <header>Send us a Message</header>
        <form action="message.php" method="post">
            <div class="db1-div">
                <div class="field">
                    <input type="text" name="name" placeholder="Enter Your Name">
                    <i class="fas fa-user"></i>
                </div>
                <div class="field">
                    <input type="text" name="email" placeholder="Enter Your Email">
                    <i class="fas fa-envelope"></i>
                </div>
            </div>
            <div class="db1-div">
                <div class="field">
                    <input type="text" name="phone" placeholder="Enter Your Phone">
                    <i class="fas fa-phone-alt"></i>
                </div>
                <div class="field">
                    <input type="text" name="website" placeholder="Enter Your Website">
                    <i class="fas fa-globe"></i>
                </div>
            </div>
                <div class="message">
                    <textarea name="message" placeholder="Write Your Message"></textarea>
                    <i class="fa-solid fa-message"></i>
                </div>
                <div class="button-area">
                    <button type="submit" name="save">Send Message</button>
                    <span>Sending Your Message.....!</span>
                </div>
        </form>
    </div>

    <script src="script.js"></script>
    
</body>
</html>