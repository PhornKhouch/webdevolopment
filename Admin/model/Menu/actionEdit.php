<?php
    include '../../connection/conect.php';
    session_start();
    $_baseURL='';

    if($_POST['btnUpdate']){
        $menID=$_POST['txtmenuID'];
        $text= $_POST['txtTextENG'];
        $textKH=$_POST['txtTextKH'];
        $Inorder=$_POST['txtInorder'];
        $Status=$_POST['txtStatus'];
        $UPDATE="UPDATE `tbl_menu` SET 
        `Text` = '$text', 
        `MenuKH` = '$textKH', 
        `Inorder` = '$Inorder', 
        `status` = '$Status' 
        WHERE `tbl_menu`.`MenuID` = '$menID';";
        $res=$con->query($UPDATE);
        if($res){
            $_SESSION['msg']='Updated Completed';
            $_baseURL="../../view/Menu/index.php";
        }

        header("location:$_baseURL");
    }
?>