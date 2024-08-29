<?php
include('db.php');
session_start();    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <style>
 /* input[type="text"]{
    width: 200px;
    height: 30px;
    border-radius: 5px;
    margin-top: -30px;
 }
 input[type="password"]{
    width: 200px;
    height: 30px;
    border-radius: 5px;
 } */
 table{
    border: 3px solid black;
  }
  table{
   width:50%;
   margin-inline:auto;
   text-align:left;
  }

    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
<div class="box1">
<form action="" method="post">
<center><h1>Admin Login</h1></center>
<br><br><br>
<center>
<label class="dd">USERNAME</label>
<br><br>
<input class="dd" type="text" name="username">
<br><br>
<label class="dd" >PASSWORD</label>
<br><br>
<input class="dd" type="password" name="password">
<br><br>
<input class="dd" type="submit" name="login" value="login">
</form>
</center>


<div class='container'>
<table class='table'>
  <thead>
<?php
if (isset($_POST['login']))
{
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	$query = "select * from admintb where username = '$username'
	and
	password = '$password'";
	
	$run = mysqli_query($con,$query);
	$totalrows = mysqli_num_rows($run);
	
	if($totalrows == 1)
	{
		   




      include('db.php');

      $querys = "select * from lawyer_tb";
      $rows = mysqli_query($con,$querys);
      $totalrows = mysqli_num_rows($rows);
      
      if ($totalrows != 0)
         {




      
		while($data = mysqli_fetch_assoc($rows))
		{
      
			echo "
         
    <tr>
      <th scope='col'>Id</th>
      <th scope='col'>Name</th>
      <th scope='col'>Email</th>
      <th scope='col'>City</th>
      <th scope='col'> </th>
    </tr>
  </thead>
  <tbody>
    
         <tr>
      <td scope='col'>". $data["id"]."</td>
      <td scope='col'>". $data["name"]."</td>
      <td scope='col'>". $data["email"]."</td>
      <td scope='col'>". $data["city"]."</td>
      <td><a href='deletelawyer.php?lawyerid=$data[id]'>Delete</a></td>

   
    
      ";

			}
		}
		else
		{
			echo"No Records Found";
			}
    }	
	else
	{
		echo'<h2 style="color:red"> USERNAME OR PASSWORD IS INCORRECT</h2>';	
	}
}
?>    
 </tr>
    </tbody>
    </table>
    </div>
</body>
</html>