<?php

$conn = mysqli_connect("", "", "", ""); // add your local mysql db credentials

if(!$conn){
    die("<script>alert('Connection Failed.')</script>");
}
?>