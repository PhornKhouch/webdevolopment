<?php
    include '../../connection/conect.php';
    session_start();
    $_baseURL='';

    if($_POST['btnSave']){
        $menID=$_POST['txtmenuID'];
        $text= $_POST['txtTextENG'];
        $textKH=$_POST['txtTextKH'];
        $Inorder=$_POST['txtInorder'];
        $Status=$_POST['txtStatus'];
        $Insert="INSERT INTO tbl_menu VALUES('$menID','$text','$textKH','$Inorder','$Status','')";
        $rs=$con->query($Insert);
        if($rs){
            $_SESSION['msg']='Insert success fully';
            $_baseURL='../../view/Menu/index.php';
        }
    }


    if($_GET['action']=="Delete"){
        $ID=$_GET['ID'];
        $DELETE= "DELETE FROM tbl_menu WHere MenuID='$ID'";
        $res=$con->query($DELETE);
        if($res){
            $_SESSION['msg']='Delete successfully';
            $_baseURL='../../view/Menu/index.php';
        }
    }
    header("location:$_baseURL");
?>