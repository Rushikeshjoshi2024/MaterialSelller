<!-- Login page database php code -->
<?php     
// session_start();
$conn = mysqli_connect('localhost', 'root', '', 'construction_site');  
if(!$conn) {  
    die("Failed to connect with MySQL: ". mysqli_connect_error());  
}     
session_start();
$email = $_POST['email'];  
$password = $_POST['password'];  

$sql = "SELECT `first_name`,`last_name`,`email`, `password`, `user_id`,`admin` FROM `user_info` WHERE email = '$email' and password = '$password'";  
$result = mysqli_query($conn, $sql);
$row= mysqli_fetch_assoc($result);
$name= $row['first_name'];
$lname= $row['last_name'];
$userid= $row['user_id'];
$user_type=$row['admin'];

   

        $sql = "SELECT `email`, `password`,`user_id` FROM `user_info` WHERE email = '$email' and password = '$password'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
        $_SESSION['first_name']=$name;
        $_SESSION['last_name']=$lname;
        $_SESSION['email']=$email;
        $_SESSION[`user_id`]=$userid;
        $_SESSION['admin']=$user_type;
        
          
        if($count == 1){ 
            if($user_type=='yes'){
                echo ("<script LANGUAGE='JavaScript'>
            window.alert('Welcome admin $name');
            window.location.href='admin_home.php';
            </script>");
            } 
            else{

                echo ("<script LANGUAGE='JavaScript'>
                window.alert('Welcome $name');
                window.location.href='construction_site.php';
                </script>");
            }
            
        }  
        else{  echo ("<script LANGUAGE='JavaScript'>
            window.alert('Invalid Username or Password.');
            window.location.href='login.php';
            </script>");
        }  
        mysqli_close($conn);
//   session_unset();
//   session_destroy();
   
?>
