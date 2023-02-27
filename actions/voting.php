<?php
session_start();
include('connection.php');

$votes = $_POST['groupvotes'];
$totalvotes = $votes + 1;

$gid = $_POST['groupid'];
$uid = $_SESSION['id'];

// update the table - num of votes and status
$updatevotes = mysqli_query($con, "update `user-data` set votes='$totalvotes' where id='$gid'");
$updatestatus = mysqli_query($con, "update `user-data` set status=1 where id='$uid'");

if($updatevotes and $updatestatus){
    $getgroups = mysqli_query($con, "Select username, photo, votes, id from `user-data` where standard='group'");
    $groups = mysqli_fetch_all($getgroups, MYSQLI_ASSOC);
    $_SESSION['groups'] = $groups;
    $_SESSION['status'] = 1;

    echo '<script>
    alert("Voting successful!");
    window.location="../partials/dashboard.php";
    </script>';

}else{
    echo '<script>
    alert("Technical error! Vote after sometime");
    window.location="../partials/dashboard.php";
    </script>';
}


?>