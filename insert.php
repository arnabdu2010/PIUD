<?php

 include("coonection.php");
 

?>
   
<?php
     if(!isset($_POST['username'])|| $_POST['username']==""){
         echo "<h1 tyle='color:green'> Username Required</h1>";
     }else if(!isset($_POST['password'])||$_POST['password']==""){
         echo "<h1 style='color:red'>Password required</h1>";
     }else{
        
         $sql=$conn->prepare("INSERT INTO piud (username,password) VALUES(?,?)");
         
        $sql->bind_param("ss",$username,$password);
        $username=$_POST['username'];
        $password=$_POST['password'];
        $sql->execute();
        $sql->close();
         
         
         
     }
 


?>









<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertation in Php</title>
</head>
<body>
    <fieldset>
        <form action=""method="post">
        Username:
        <input type="text" name="username"><br><br>
        Password:
        <input type="password" name="password"><br><br>
        
        <input type="submit" name="submit" value="Registartion"><br><br>
        </form>
    </fieldset>
</body>
</html>