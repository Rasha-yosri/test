<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="" method="post">

<label for="">Name: </label>
<input type="text" name="username" placeholder="Enter your name.."><br><br>

<label for="">IdStudent: </label>
<input type="text" name="ID" placeholder="Enter ID.."><br><br>

<label for="">Email: </label>
<input type="email" name="email" id="email" placeholder="Enter Gmail.."><br><br>

<label for="">Password: </label>
<input type="password" name="password" id="pass" placeholder="Enter password.."><br><br>

<label for="">Gender: </label>
<input type="radio" name="gender">Male
<input type="radio" name="gender">Female<br><br>

<input type="checkbox" name=" remmber">Remmber me !<br><br>



<input type="submit" id="sub" name="login">
</form>


</body>
</html>

<?php

$host='localhost';
$name='root';
$PassWord='';
$dbname='users';

$conn= new mysqli($host,$name,$PassWord,$dbname);

   
    $insert= $conn->prepare("INSERT INTO student(ID,username, password, email)VALUES (?,?, ?, ?)");
    $insert->bind_param("sss", $username,$password,$email,$Id);
    $insert->execute();
    $conn->close();  
  
   






// $email='';
// $errors=[];

// if($_FILES['image']['size']>1024*1024){

//     $errors[]= 'sorry, Image size must be less than 1MB !';
    
// }


// if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
// $errors[]='enter email';

// }

?>