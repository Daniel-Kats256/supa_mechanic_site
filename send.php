<?php
$fname=$_POST['fname'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$place=$_POST['place'];
$challenge=$_POST['challenge'];
$comment=$_POST['comment'];
if(empty($fname)){
    header ("location: contact.php?error=Full names required");
    exit();
}
else if(empty($phone)){
    header ("location: contact.php?error=phone number is required");
    exit();
}
else if(empty($place)){
    header ("location: contact.php?error=whats your current");
    exit();
}
else if(empty($challenge)){
    header ("location: contact.php?error=whats your challenge");
    exit();
}
//connection
if(!empty($fname) || !empty($phone) || !empty($email) || !empty($place) || !empty($challenge) || !empty($comment) )
{
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "contacts";

    //creatimg connection
    $conn = new mysqli ($host, $username, $password, $database);

    if(mysqli_connect_error()){
        die('connect error ('. mysqli_connect_error() .')'. mysqli_connect_error());
    }

    else{
        $SELECT = "SELECT fname from contact_tb where fname = ? limit 1";
        $INSERT = "INSERT Into contact_tb ( fname , phone , email , place , challenge , comment ) values(?,?,?,?,?,?)";

        //prepare statement
        $stmt = $conn->prepare($SELECT);
        $stmt->bind_param("s", $fname);
        $stmt->execute();
        $stmt->bind_result($fname);
        $stmt->store_result();
        $rnum = $stmt->num_rows;

        //checking username
        if ($rnum==0) {
            $stmt->close();
            $stmt = $conn->prepare($INSERT);
            $stmt->bind_param("ssssss", $fname, $phone, $email, $place, $challenge, $comment);
            $stmt->execute();
            header("location: contact.php?error=**Thank you for choosing Supa Tech Mechanics");
             exit(); 
        }
        else{
            header ("location: contact.php?error=Someone already addressed this issue");
            exit();
        }
        $stmt->close();
        $conn->close();
        
    }
}

else {
    header ("location: register.php?error=All fields are required");
    exit();
    
}
?> 