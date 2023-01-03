<?php
include 'connect.php';

if (isset($_POST['submit'])) {

$emil=$_POST['emil'];  
$pssword=$_POST['pssword'];
 
$sluery="insert into person (emil,pssword)
values('$emil','$pssword')";
$d=mysqli_query($s,$sluery);

if ($d) {
   // echo "inserted .";
   header('location:show.php');
}
else{die(mysqli_error($s));
}

}
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  

    <title>HI BRO</title>
    <link rel="stylesheet" href="bank.css">
  </head>
 

<form method="POST">

<div id="div1">
        <img src="my bank/image" alt="">
        <h1 id="head1"> Well Come To Our Bank Service </h1>
        <div id="div2">
            <h1 id="head"> Please Log-in Here  </h1>
    <input type="email"  id="userInput" placeholder="enter your e-mail" name="emil" ><br>
    <input type="password" id="userPassword" placeholder="enter your password " name="pssword"> <br>
    <button id="submit" name="submit">Signup</button>

    
    
   
        </div>
    </div>
  
</form>

</body>
</html>