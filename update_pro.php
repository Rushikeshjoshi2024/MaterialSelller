
<?php
    // session_start();
    $id=$_GET['id'];
    $num=$_GET['num'];
    $conn = mysqli_connect('localhost', 'root', '', 'construction_site');  
    if(!$conn) {  
    die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }     
    $sql="UPDATE `product_info` SET `Material quantity`='$num' WHERE `Material_id`='$id'";
    $result = mysqli_query($conn, $sql);
    if($result){
    // echo"ok";
    echo ("<script LANGUAGE='JavaScript'>
            window.alert('Material quantity updated.');
            window.location.href='regd_pro.php';
            </script>"); 
    }
   
    

    ?>
