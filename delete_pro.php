
<?php
    session_start();
    $id=$_GET['id'];
    $conn = mysqli_connect('localhost', 'root', '', 'construction_site');  
if(!$conn) {  
    die("Failed to connect with MySQL: ". mysqli_connect_error());  
}     
   $sql="DELETE FROM `product_info` WHERE `Material_id`='$id'";
   $result = mysqli_query($conn, $sql);
            
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('deleted');
    window.location.href='regd_pro.php';
    </script>");
    

    ?>
