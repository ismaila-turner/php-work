<?php
session_start();

$con= mysqli_connect("localhost","root");

mysqli_select_db($con,'logsystem');


$name= $_POST['user'];
$tel=$_POST['telephone'];
$gen=$_POST['gender'];
$email=$_POST['email'];
$pass=$_POST['password'];
$add=$_POST['address'];
$date=$_POST['date'];

$s="select * from system where name= '$name'";
$result=mysqli_query($con, $s);

$num=mysqli_num_rows($result);

if($num==1){
    echo"user Already Taken";

}else{
    $reg="insert into system (name, telephone, gender,email,password,address,date) value('$name', '$tel', '$gen', '$email','$pass','$add', '$date')";
    mysqli_query($con,$reg);
    echo"registration successfull";
}
?>

