<?php

$db = mysqli_connect("localhost","root","","pokusy");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

?>