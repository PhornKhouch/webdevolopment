<?php
    include '../../connection/conect.php';
   
    session_start();
    $_baseURL='';

    if($_POST['btnSave']){
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
        $Insert="INSERT INTO `tbl_contenthomepage` (`id`, `title`, `SubTitle`, `MenuID`, `Inorder`, `status`, `photo`, `postdate`) 
        VALUES (NULL, '$title', '$SubTitle', '$Cate', '$Inorder', '$status', '$img_name', '$Postdate');";
        $rs=$con->query($Insert);
        if($rs){
            $_SESSION['msg']='Insert success fully';
            $_baseURL='../../view/NewsHomepage/index.php';
        }
    }

    if($_GET['action']=="Delete"){
        $ID=$_GET['id'];
        $DELETE="DELETE FROM tbl_contenthomepage WHERE id='$ID'";
        $res=$con->query($DELETE);
        if($rs){
            $_SESSION['msg']='Delete success fully';
            $_baseURL='../../view/NewsHomepage/index.php';
        }
    }
    header("location:$_baseURL");

?>
