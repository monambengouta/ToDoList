<?php
$conn=mysqli_connect('localhost','root','','lindos');
if(isset($_POST['submit']))
{
    $text=$_POST['texts'];
    $date=$_POST['date'];
    $sql="insert into todolist (text,date) values ('$text','$date')";
    mysqli_query($conn,$sql);
    header("Location: ../ToDoListApp/ToDoList.html");
}
?>