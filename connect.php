<?php
session_start();
error_reporting(E_ALL);
$hostname = "localhost";
$user = "root";
$password = "";
$database = "worker";

$conn = mysqli_connect($hostname, $user, $password, $database);

if($conn){
    echo "databaseconnected" . mysqli_connect_error();
}

if(isset($_POST['login'])){

if(isset($_POST['uname']) && isset($_POST['pass2'])) {

    function validate($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
}

$uname = validate($_POST['uname']);
$pass2 = validate($_POST['pass2']);

if(empty($uname)) {
    header ("location: index.php?error=User Name is required");
    exit();
}
else if(empty($pass2)) {
    header ("location: index.php?error=Password is required");
    exit();
}
//   checking data from db table
$sql = "SELECT * FROM worktb WHERE uname='$uname' AND pass2='$pass2'";

$result = mysqli_query($conn,  $sql);

if(mysqli_num_rows($result) === 1) {
    $row = mysqli_fetch_assoc($result);
    
    if($row['uname'] === $uname && $row['pass2'] === $pass2) {

        $_SESSION['uname'] = $row['uname'];
        $_SESSION['pass2'] = $row['pass2'];
        $_SESSION['id'] = $row['id'];

        header("location: home.php");
        exit();
    } 
    else{
        header ("location: index.php?error=Incorrect password or user name");
        exit();
    }
}
else{
    header ("location: index.php?error=Account not found");
    exit();
}
}
?>