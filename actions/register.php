<?php
include('connection.php');

//use POST to access the form data from register page in the frontend and store in variables. Use FILES instead of POST to access the photo data
$username = $_POST['username'];
$mobile = $_POST['mobile'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];
$image = $_FILES['photo']['name']; //photo and name of the photo
$tmp_name = $_FILES['photo']['tmp_name']; //temporary name of the photo
$std = $_POST['std'];

// check if the password and confirm password are same. If not, redirect to register page with error message. If they do, proceed to next step

if($password !=$cpassword){
    echo ',<script>
    alert("Passwords do not match. Try again!");
    window.location = "../partials/registration.php";
    </script>';
}else{
    //move the photo to the images folder
    move_uploaded_file($tmp_name, "../uploads/$image");
    $sql = "insert into `user-data` (username, mobile, password, photo, standard, status, votes) values('$username', '$mobile', '$password', '$image', '$std', 0, 0)";

    //check if the query is executed successfully. If not, redirect to register page with error message. If it is, redirect to login page with success message
    $result = mysqli_query($con, $sql);
    if($result){
        echo '<script>
        alert("Registration Successful!");
        window.location = "../";
        </script>';
    }else{
        die(mysqli_error($con));
    }

}


?>