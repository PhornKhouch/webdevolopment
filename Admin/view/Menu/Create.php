<?php
include '../../root/Header.php';
include '../../connection/conect.php';
?>
</head>

<body>
    <div class="container-fluid  mt-4 mx-4">
        <form action="../../model/Menu/actionCreate.php" method="post">
            <div class="row">
                <div class="col-lg-12 bg-secondary p-2">
                    <a href="index.php" class="btn btn-success"><i class="fa fa-chevron-left" aria-hidden="true"></i> Back</a>
                    <input type="submit" value="Save" name="btnSave" class="btn btn-success">
                </div>
                <div class="col-lg-6">
                    <label for="">MenuID</label>
                    <input type="text" name="txtmenuID" class="form-control">
                </div>
                <div class="col-lg-6">
                    <label for="">Description</label>
                    <input type="text" name="txtTextENG" class="form-control">
                </div>
                <div class="col-lg-6">
                    <label for="">MenuKH</label>
                    <input type="text" name="txtTextKH" class="form-control">
                </div>
                <div class="col-lg-6">
                    <label for="">Inorder</label>
                    <input type="text" name="txtInorder" class="form-control">
                </div>
                <div class="col-lg-6">
                    <label for="">Status</label>
                    <select name="txtStatus" class="form-control">
                        <option value="Active">Active</option>
                        <option value="InActive">InActive</option>
                    </select>
                </div>

            </div>
        </form>
    </div>
</body>

</html>