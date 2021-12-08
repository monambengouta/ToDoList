<?php
$conn=mysqli_connect('localhost','root','','lindos');
if(isset($_POST['submit']))
{
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $image=$_POST['image'];
    $password_crypt=md5($password);
    $sql="insert into user(fname,lname,email,password,image) values ('$fname','$lname','$email','$password_crypt','$image')";
    mysqli_query($conn,$sql);
    header("Location:../login/login.html");
}
?>