<?php
    // $errfname = $errlname = $erremail = $errpnumber = $errmess = ""; 

    // $fname = $lname = $e_mail = $pnumber = $mess = "";

    // if($_SERVER["REQUEST_METHOD" == "POST"]){
    //     if(empty($_POST["first_name"])){
    //         $errfname = "<span style='color:red'>Name is required.</span>";
    //     }else{
    //         $fname = validate($_POST["first_name"]);
    //     }
    
    //     if(empty($_POST["last_name"])){
    //         $errlname = "<span style='color:red'>The Last Name is required.</span>";
    //     }else{
    //         $lname = validate($_POST["last_name"]);
    //     }

    //     if(empty($_POST["email"])){
    //         $errlname = "<span style='color:red'>E-mail is required.</span>";
    //     }elseif(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
    //         $errlname = "<span style='color:red'>Invalid E-mail formate.</span>";
    //     }
    //     else{
    //         $e_mail = validate($_POST["email"]);
    //     }

    //     echo "Name : ". $fname ."<br>";
    //     echo "Last name : ". $lname;
    //     echo "E-mail : ". $e_mail;

    // }
    // function validate($data){
    //     $data = trim($data);
    //     $data = stripcslashes($data);
    //     $data = htmlspecialchars($data);
    //     return $data;
    // }



     //database connection
     require_once "database.php";

    $first_name    =  $_POST["first_name"];
    $last_name     =  $_POST["last_name"];
    $email         =  $_POST["email"];
    $phone_number  =  $_POST["phone_number"];
    $message       =  $_POST["message"];



    if($first_name && $last_name && $email && $phone_number && $message){
        if(strlen($phone_number) == 11){
            $insert_query = "INSERT INTO contacts(first_name, last_name, email, phone_number, message) VALUES('$first_name', '$last_name', '$email', '$phone_number', '$message')";

            mysqli_query($db_connect, $insert_query);
            header('location: message.php');
        }else{
            echo "Phone number is not correct.";
        }
    }else{
        echo "Something is missing";
    }


?>








 