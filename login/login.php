<?php
session_start();
$conn=mysqli_connect('localhost','root','','lindos');
$userFound=true;
if(isset($_GET['submit']))
{
    $email=$_GET['email'];
    $password=$_GET['password'];
    $password=md5($password);
    $sql="select email,password from user where email='$email' and password='$password';";
    $result=mysqli_query($conn,$sql);
    $rowsNumber=mysqli_num_rows($result);

    if($rowsNumber>0)
    {    
        $_SESSION['user']=$login;
        header("Location: ../ToDoListApp/ToDoList.html");
    } else
    {
        header("Location: ../login/login.html");
    }  
}
        

?>