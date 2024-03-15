<?php
include '../../root/Header.php';
include '../../connection/conect.php';

if($_GET['id']!=null){
    $ID=$_GET['id'];
    $SELECT="Select * from tbl_menu WHERE MenuID='$ID'";
    $res=$con->query($SELECT);
    $Data=$res->fetch_assoc();
    $text=$Data['Text'];
    $TextKH=$Data['MenuKH'];
    $Inorder=$Data['Inorder'];
    $st=$Data['status'];
}
?>
</head>

<body>
    <div class="container-fluid  mt-4 mx-4">
        <form action="../../model/Menu/actionEdit.php" method="post">
            <div class="row">
                <div class="col-lg-12 bg-secondary p-2">
                    <a href="index.php" class="btn btn-success"><i class="fa fa-chevron-left" aria-hidden="true"></i> Back</a>
                    <input type="submit" value="Update" name="btnUpdate" class="btn btn-success">
                </div>
                <div class="col-lg-6">
                    <label for="">MenuID</label>
                    <input type="text" name="txtmenuID" class="form-control" value="<?php echo $ID?>">
                </div>
                <div class="col-lg-6">
                    <label for="">Description</label>
                    <input type="text" name="txtTextENG" class="form-control" value="<?php echo $text?>">
                </div>
                <div class="col-lg-6">
                    <label for="">MenuKH</label>
                    <input type="text" name="txtTextKH" class="form-control" value="<?php echo $TextKH?>">
                </div>
                <div class="col-lg-6">
                    <label for="">Inorder</label>
                    <input type="text" name="txtInorder" class="form-control"value="<?php echo $Inorder?>">
                </div>
                <div class="col-lg-6">
                    <label for="">Status</label>
                    <select name="txtStatus" class="form-control">
                        <option value="" selected><?php echo $st?></option>
                        <option value="Active">Active</option>
                        <option value="InActive">InActive</option>
                    </select>
                </div>

            </div>
        </form>
    </div>
</body>

</html>