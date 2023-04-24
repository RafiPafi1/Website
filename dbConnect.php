<?php 

$conn = mysqli_connect("localhost","root","","portfoliodb");

if(mysqli_connect_error())
{
    echo "Error connecting to the database";
}
?>