<?php
session_start();
include('connection.php');

//use POST to access the form data from login page in the frontend and store in variables. Use FILES instead of POST to access the photo data
$username = $_POST['username'];
$mobile = $_POST['mobile'];
$password = $_POST['password'];
$std = $_POST['std'];

//query to check if the user exists in the database by checking the username, mobile number and password given above with the data in the database (column names)
$sql = "Select * from `user-data` where username='$username' and mobile='$mobile' and password='$password' and standard='$std'";

// execute the query and store the result in a variable
$result = mysqli_query($con, $sql);

// check if the query is executed successfully. If num of rows is greater than 0, it means the user exists in the database. If not, redirect to login page with error message
if(mysqli_num_rows($result) > 0){
    // if the user exists, store some of the data in a variable
    $sql = "Select username, photo, votes, id from `user-data` where standard='group'";
    // execute the query and store the result in a variable
    $resultgroup = mysqli_query($con, $sql);
    //if the groups exists, fetch all the groups in db and store in a variable
    if(mysqli_num_rows($resultgroup) > 0){
        $groups = mysqli_fetch_all($resultgroup, MYSQLI_ASSOC);
        // once user has logged in, redirect to vote page with the groups data, use session you can use groups session variable in another file without including the file with $groups var
        $_SESSION['groups'] = $groups;
    }
    //fetch data of single user who logged in above
    $data = mysqli_fetch_array($result);
    //store the data in session variables
    $_SESSION['id'] = $data['id'];
    $_SESSION['status'] = $data['status'];
    $_SESSION['data'] = $data;

    //redirect to vote/dashboard page
    echo '<script>
    window.location = "../partials/dashboard.php";
    </script>';

}else{
    echo '<script>
    alert("User does not exist. Try again!");
    window.location = "../";
    </script>';
}


?>