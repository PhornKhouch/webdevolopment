<?php
    include '../../connection/conect.php';
   
    session_start();
    $_baseURL='';

    if($_POST['btnUpdate']){
        $id=$_POST['txtID'];
        $title=$_POST['txtTitle'];
        $SubTitle= $_POST['txtSubtitle'];
        $Cate=$_POST['txtCategroy'];
        $Inorder=$_POST['txtInorder'];
        $Postdate=$_POST['txtPostdate'];
        $status=$_POST['txtStatus'];

        //upload pic
        $img_name=$_FILES['photo']['name'];
        $tmp_name=$_FILES['photo']['tmp_name'];
        $folder='../../Upload/NewHomepage/';
        move_uploaded_file($tmp_name,$folder.$img_name);
        $Insert="UPDATE `tbl_contenthomepage` SET 
        `title` = '$title', 
        `SubTitle` = '$SubTitle', 
        `MenuID` = '$Cate', 
        `Inorder` = '$Inorder', 
        `status` = '$status', 
        `postdate` = '$Postdate' 
        WHERE `tbl_contenthomepage`.`id` = 'txtID';";
        $rs=$con->query($Insert);
        if($rs){
            $_SESSION['msg']='Updated success fully';
            $_baseURL='../../view/NewsHomepage/index.php';
        }
    }
    header("location:$_baseURL");

?>
