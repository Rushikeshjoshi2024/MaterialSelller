<!-- Signup page database php code -->
<?php
session_start();

$userid1=$_SESSION[`user_id`];
    $conn=mysqli_connect('localhost','root','','construction_site');
     if(!$conn){
         die("Connection failed. Please try again.".mysqli_connect_error());
     }
     $bill=$_FILES['mat_p_bill']['name'];
     $Type=$_FILES['mat_p_bill']['type'];
     $temp=$_FILES['mat_p_bill']['tmp_name'];
     $billExt=explode('.',$bill);
     $AllowExt= strtolower(end($billExt));
     $Allow=array('jpg','jpeg','png');
     $Target="image/".$bill;

     $photo=$_FILES['mat_photo']['name'];
     $Type=$_FILES['mat_photo']['type'];
     $temp1=$_FILES['mat_photo']['tmp_name'];
     $photoExt=explode('.',$photo);
     $AllowExt= strtolower(end($photoExt));
     $Allow=array('jpg','jpeg','png');
     $Target1="image/".$photo;
     $id= uniqid();
     $sql="INSERT INTO `product_info`(`First name`, `Last name`, `State`, `City`, `Zip`, `Address`, `Mobile number`, `E-mail id`, `Material name`,`Material category`,`Material_id`, `Material brand`, `Material quantity`, `Purchased date`, `Purchased price`, `Selling price`, `Material color`, `Material diameter`, `Material weight`,`Material bill`,`Material photo`, `Material information`, `acc_user_id`) VALUES ('$_POST[f_name]','$_POST[l_name]','$_POST[state]','$_POST[city]','$_POST[zip]','$_POST[f_address]','$_POST[m_number]','$_POST[e_address]','$_POST[mat_name]','$_POST[mat_cat]','$id','$_POST[mat_brand]','$_POST[mat_quantity]','$_POST[p_date]','$_POST[mat_p_price]','$_POST[mat_s_price]','$_POST[mat_color]','$_POST[mat_diameter]','$_POST[mat_weight]','$bill','$photo','$_POST[mat_info]','$userid1')";

     $result=mysqli_query($conn,$sql);
     move_uploaded_file($temp,$Target);
     move_uploaded_file($temp1,$Target1);
     if($result){
        echo ("<script LANGUAGE='JavaScript'>
        window.alert('Your registration done successfully. Please save your product id : $id');
        window.location.href='construction_site.php';
        </script>");
     }   
     else{
        echo ("<script LANGUAGE='JavaScript'>
        window.alert('Registration failed.Please register again.');
        window.location.href='product_reg.php';
        </script>");
        echo "failed".mysqli_error($conn);
 }


 ?>


