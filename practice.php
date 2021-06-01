<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <title>Sample</title>
</head>
<body>
<form method="post">
<table border="3"> 
<tr>
    <td>FirstName</td>
    <td><input type="text" name="fname" placeholder="Enter your Firstame" ></td>
</tr>

<tr>
    <td>SurName</td>
    <td><input type="text" name="sname" placeholder="Enter your Surname" ></td>
</tr>

<tr>
    <td>Email</td>
    <td><input type="text" name="email" placeholder="Enter your Email" ></td>
</tr>

<tr>
    <td>PhoneNumber</td>
    <td><input type="text" name="pno" placeholder="Enter your Phonenumber" ></td>
</tr>

<tr>
    <th colspan="2"><input type="submit" name="submit" value="submit"></th>
</tr>
</table>

<?php
$conn = mysqli_connect("localhost","root","","olo");
if(isset($_POST['submit']))
{
$fname = $_POST['fname'];
$sname = $_POST['sname'];
$email = $_POST['email'];
$pno = $_POST['pno'];

$sql = "insert into sample (fname,sname,email,pno) values('$fname','$sname','$email','$pno');";

if(mysqli_query($conn,$sql))
{
    echo "done";
}
else{
    echo "notdone";
}
}
?>

</form>
    
</body>
</html>