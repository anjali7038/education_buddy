<?php 

$host="localhost";
$user="root";
$password="";
$db="edubuddy";

$dblink=mysqli_connect($host,$user,$password);
mysqli_select_db($dblink,$db);

if(isset($_POST['username'])){
    
    $username=$_POST['username'];
    $password=$_POST['password'];
    
    $sql="select * from userinfo where username='".$username."'AND password='".$password."' limit 1";
    
    $result=mysqli_query($dblink,$sql);
    
    if(mysqli_num_rows($result)==1){
               if (isset($_GET['redirect'])) {
    header('Location: ' . $_GET['redirect']);
} else {
    header('Location: class.php');
}
        exit();
    }
    else{
        echo " You Have Entered Incorrect Password or Username";
        exit();
    }
        
}
?>





<!doctype>
<html>
<head>
<title>parent sign in</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
body {font-family: "Times New Roman", Georgia, Serif;}
h1, h2, h3, h4, h5, h6 {
  font-family: "Playfair Display";
  letter-spacing: 5px;
}
body {
  background-color: black;
  color: black;
}

h1,h6{

  color: white;
}

</style>
<body>

  <div style="background-image: url('education6.jpg');">
  <div class="w3-row w3-padding-64" id="class">
    <div class="w3-col l6 w3-padding-large">
<h1>
<i><u>Sign in</i></u><br><br>
</h1>
<form  method="post">
<h6>
  <label for="username">USERNAME:</label>
  <input type="text" id="username" name="username" required><br><br>
  <label for="password">PASSWORD:</label>
  <input type="text" id="password" name="password" required><br><br>
  </h6>
  <input type="submit" value="Submit">
</form>
 
 

</p>
</body>
</html>