<?php
include '../../connection/conect.php';
   
session_start();
$_baseURL='';
if($_POST['action']=="Delete"){
    $ID=$_POST['id'];
    $DELETE="DELETE FROM tbl_contenthomepage WHERE id='$ID'";
    $res=$con->query($DELETE);
    if($res){
        echo 'Delete success fully';
    }
}

?>