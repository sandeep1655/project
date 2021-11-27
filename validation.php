<?php
$fname=$_POST['fname'];
if(srlen($fname)<3)
{
echo "enter fname";
}

$servername="localhost";
$username ="root";
$password ="";
$dbname="ppp";
$conn=new mysqli($servername,$username,$password,$dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{
echo "Connected successfully";
}
$sql = "insert into user(fname)
values('$fname')";
if ($conn->query($sql) === TRUE) {
    include 'login.html';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
echo "<center><h2> Sign in Success as<br>".$uname."<br>Please Login</h2></center>"; 
$conn-> close();	