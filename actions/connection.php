<?php

$con = mysqli_connect("localhost", "root", "", "voting-system");
// Check connection - if connection fails, display error message otherwise continue
if(!$con){ 
    die (mysqli_error($con));
}
?>