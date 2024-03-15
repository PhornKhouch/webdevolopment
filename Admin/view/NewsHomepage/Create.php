<?php
include '../../connection/conect.php';
include '../../root/Header.php';
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
                <div class="col-lg-4">
                    <label for="">Title</label>
                    <input type="text" name="txtTitle" class="form-control">
                </div>
                <div class="col-lg-4">
                    <label for="">Subtitle</label>
                    <input type="text" name="txtSubtitle" class="form-control">
                </div>
                <div class="col-lg-4">
                    <label for="">Category</label>
                    <select name="txtCategroy" id="" class="form-control">
                        <?php
                        $SELECT = "SELECT * FROM tbl_menu Where Status='Active'";
                        $result = $con->query($SELECT);
                        while ($Menu = $result->fetch_assoc()) {
                        ?>
                            <option value="<?php echo $Menu['MenuID'] ?>"><?php echo $Menu['MenuKH'] ?></option>
                        <?php
                        }
                        ?>

                    </select>

                </div>
                <div class="col-lg-4">
                    <label for="">Inorder</label>
                    <input type="text" name="txtInorder" class="form-control">
                </div>
                <div class="col-lg-4">
                    <label for="">PostDate</label>
                    <input type="date" id="txtPostdate" name="txtPostdate" class="form-control" value="">
                </div>
                <div class="col-lg-4">
                    <label for="">Status</label>
                    <select name="txtStatus" class="form-control">
                        <option value="Active">Active</option>
                        <option value="InActive">InActive</option>
                    </select>
                </div>
                <div class="col-lg-4">
                    <label for="">Photo</label>
                    <input type="file" id="fileInput" name="photo" class="form-control">
                </div>
                <div class="col-xl-8">

                </div>
                <div class="col-xl-4 mt-4">
                    <img src="https://w7.pngwing.com/pngs/469/94/png-transparent-camera-logo-graphy-camera-text-camera-lens-rectangle-thumbnail.png" alt="" width="100%" id="previewIMG">
                </div>
            </div>
        </form>
    </div>
</body>
<script>
    getCurrentDate()

    function getCurrentDate() {
        var currentDate = new Date();

        // Get the current date components
        var year = currentDate.getFullYear();
        var month = currentDate.getMonth() + 1; // Months are zero-indexed, so we add 1
        var day = currentDate.getDate();

        // Format the date as desired
        var formattedDate = year + '-' + month + '-' + day;
        var txtPostdate = document.getElementById('txtPostdate');
        //alert(formattedDate)
        //txtPostdate.value=formattedDate;
    }

    GetUploadpic();
    function GetUploadpic() {
        let fileInput = document.getElementById('fileInput');
        let imagepreview = document.getElementById('previewIMG');

        fileInput.addEventListener("change", function() {
            const file = this.files[0];
            const reader = new FileReader();

            reader.addEventListener("load", function() {
                imagepreview.src = reader.result;
            })
            reader.readAsDataURL(file);
        })
    }
</script>

</html>