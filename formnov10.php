<?php 
    $formdata = explode('&', $_POST['data']);
     parse_str( $_POST['data'], $values);

     // connecting to database

     $server = 'localhost';
     $username = 'Agausername';
     $password = 'aga123456';
     $dbname = 'signup';

     $connection = mysqli_connect($server,$username,$password,$dbname);

     if (!$connection){
         echo "problem connecting";
     } 
     else {
         echo "connected successfully, ";
     }

    $encryptedPassword = password_hash($values['password'],PASSWORD_DEFAULT); 

    $sql = "Insert Into userinfo(firstName, lastName, email, phonenumber, password, gender, skills) VALUES ('"
    .$values['firstName'] . "', '"
    .$values['lastName'] . "', '"
    .$values['email'] . "', '"
    .$encriptedPassword . "', '" 
    .$values['gender'] . "', '" 
    .$values['phonenumber'] . "', '"
    .$values['skills'] ."') ;";
    

    $query = mysqli_query($connection, $sql);
    if ($query){
        echo "1 row inserted";
    } else {
        echo "mysql_query error - cound't insert to the signup table";
    }
?>