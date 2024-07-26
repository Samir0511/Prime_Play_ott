<?PHP


include 'config.php';

include 'connection.php';
session_start();


$user_data = $_SESSION["username"];
$messageforold_password = "Check Your Old Password";
$messageforpassword = "Password and Confirm password is not matched";
$dp = $_FILES['profile']['name'];

if($dp!=NULL)
{
if (isset($_POST['Profile_Picture'])) {

    $profile1 = "../ADMIN\Uploads\Profile_Picture/" . basename($_FILES['profile']['name']);





    $sql1 = ("UPDATE  user SET profile_picture='$dp' WHERE username='$user_data'");

    mysqli_query($conn, $sql1) or die("data not inserted");





    if (move_uploaded_file($_FILES['profile']['tmp_name'], $profile1)) {
        header("Location:Profile.php");
    } else {
        echo "error uploading";
    }
}
}
else{
    echo '<script>alert("Select File First")</script>'; 
    echo "<script type='text/javascript'>";
    echo " window.location = 'Profile.php';";

    echo "</script>";


}



if (isset($_POST['resetpassword'])) {
    
    $user_data2 = $_SESSION["username"];
    $user_pass=$_SESSION['password'];

$password = "SELECT password FROM user where username=$user_data2";

$oldpass = mysqli_query($conn, $password);

$newpassword = $_POST['New_password'];
$confirmpassword = $_POST['Confirm_password'];



$ol = $_POST['Old_password'];

    if ($ol == $user_pass) {





      
        if ($newpassword != $confirmpassword) {
            $error = true;
            echo "<script type='text/javascript'>";
            echo "alert('$messageforpassword');";
            echo " window.location = 'Profile.php';";

            echo "</script>";
        } else {


            $sql2 = ("UPDATE  user SET password='$newpassword' WHERE username='$user_data2'");

            mysqli_query($conn, $sql2) or die("data not inserted");


            header("Location:Profile.php");
        }
    } else {



        echo "<script type='text/javascript'>";
        echo "alert('$messageforold_password');";
        echo " window.location = 'Profile.php';";
        echo "</script>";
    }
}
