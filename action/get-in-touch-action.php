<?php 
if ($_SERVER('REQUEST_METHOD') == "POST"){
    $firstName = $_POST['Name'];
    $email = $_POST['Email'];
    $phoneNumber = $_POST['Phone'];
    $message = $_POST['Message'];

    function getFullInfo($firstName, $email, $phoneNumber, $message){
        if($firstName === "" || $email === "" || $phoneNumber === "" || $message === ""){
            return "please fill the inputs"; 
        } else {
            return $firstName. " ". $email. " ". $phoneNumber. " ". $message;
        }
    };

}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="x-icon" href="../images/TabIcon.png"/>
    <title>Get in Touch</title>
</head>
<body>
    <div>
        <h1>
            <?php $getFullInfo($firstName, $email, $phoneNumber, $message);?>
        </h1>
    </div>
    
</body>
</html>