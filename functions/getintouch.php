<?php 

if($_POST["username"] &&  $_POST["email"] &&  $_POST["phone"] &&  $_POST["message"]){
    echo 'Your form is submitted.';
}else{
    echo "Please filled in all required fields";
}