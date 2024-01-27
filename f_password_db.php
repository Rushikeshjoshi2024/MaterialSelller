<!---------------------------------------------- Forgot password database php code ------------------------------------->
<?php
    $conn=mysqli_connect('localhost','root','','construction_site');
     if(!$conn){
         die("Connection failed. Please try again.".mysqli_connect_error());
     } 
        $email = $_POST['email'];  
        $password = $_POST['oldpassword'];  
      
        $sql = "SELECT `email`, `password` FROM `user_info` WHERE email = '$email' and password = '$password'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);   
          
        if($count == 1){    
            $sql="UPDATE `user_info` SET `password`='$_POST[newpassword]' WHERE email='$_POST[email]'";
            $result=mysqli_query($conn,$sql);
            if($result){
            echo ("<script LANGUAGE='JavaScript'>
            window.alert('Your password changed successfully. Go to login page.');
            window.location.href='login.php';
            </script>"); 
            }   
        }
       else{
         echo ("<script LANGUAGE='JavaScript'>
         window.alert('Failed to change password.Please try again.');
         window.location.href='f_password.php';
         </script>");  
       }
 mysqli_close($conn);

 ?>