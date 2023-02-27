<?php
//get all the session
session_start();

// destroy all the session
session_destroy();

// then redirect to homepage
header('location:../'); 
?>