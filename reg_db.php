<!-- Signup page database php code -->
<?php
    $conn=mysqli_connect('localhost','root','','construction_site');
     if(!$conn){
         die("Connection failed. Please try again.".mysqli_connect_error());
     }
     $uid= uniqid();
     $sql="INSERT INTO `user_info`(`first_name`, `last_name`,`email`, `mobile_number`, `password`,`user_id`,`admin`) VALUES ('$_POST[first_name]','$_POST[last_name]','$_POST[emailid]','$_POST[phone]','$_POST[pass]','$uid','$_POST[admin]')";
        //   $sql="INSERT INTO `login`(`Username`, `Password`, `Mobile number`) VALUES ('$_POST[unam]','$_POST[pann]','$_POST[num]')";

     $result=mysqli_query($conn,$sql);
     if($result){
        echo ("<script LANGUAGE='JavaScript'>
        window.alert('Your registration done successfully. Your user id is:$uid. Please login.');
        window.location.href='login.php';
        </script>");
     }   
     else{
        echo ("<script LANGUAGE='JavaScript'>
        window.alert('Registration failed.Please register again.');
        window.location.href='reg.php';
        </script>");
        echo "failed".mysqli_error($conn);
 }
 mysqli_close($conn);

 ?>


