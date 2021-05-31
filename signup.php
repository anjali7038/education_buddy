<php?
$host="localhost";
$user="root";
$password="";
$db="edubuddy";
?>

<!doctype>
<html>
<title>edubuddy</title>
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
  background-color: lightgrey;
  color: black;
}

h1,h6{

  color: white;
}

</style>
<body>

  <div style="background-image: url('education5.jpg');">
  <div class="w3-row w3-padding-64" id="class">
    <div class="w3-col l6 w3-padding-large">
	<h1><i><u>Sign up</u></i> <br><br></h1>
<form action="insertuser.php" method="post">
<h6>
  <label for="name">NAME:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
  <input type="text" id="name" name="name" required><br><br>
  <label for="class">SELECT CLASS:</label>
<input type="text" id="class" name="class" required><br><br>

<br><br>
  <label for="address">ADDRESS:&nbsp&nbsp</label>
  <input type="text" id="address" name="address" required><br><br>
  <label for="phone:">PHONE NO:</label>
  <input type="text" id="phone" name="phone" required><br><br>
  <label for="email">EMAIL ID:&nbsp&nbsp</label>
  <input type="text" id="email" name="email" required><br><br>
  <label for="username">USERNAME:</label>
  <input type="text" id="username" name="username" required><br><br>
  <label for="password">PASSWORD:</label>
  <input type="text" id="password" name="password" required><br><br>

  <br>
  </h6>
  <input type="submit" value="Submit">
</form>
 <img src="education5.jpg" width='2000' height='800'>
 
 

</p>
</body>
</html>
