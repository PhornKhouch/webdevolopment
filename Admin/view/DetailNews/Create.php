<?php
include '../../connection/conect.php';
include '../../root/Header.php';
?>
</head>

<body>
    <div class="container-fluid  mt-4 mx-4">
        <form action="../../model/NewsHomepage/actionCreate.php" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-lg-12 bg-secondary p-2">
                    <a href="index.php" class="btn btn-success"><i class="fa fa-chevron-left" aria-hidden="true"></i> Back</a>
                    <input type="submit" value="Save" name="btnSave" class="btn btn-success">
                </div>
                <div class="col-lg-4">
                    <label for="">NewID</label>
                    <select name="txtTitle" id="txtTitle" class="form-control" onchange="handleInputChange()">
                        <?php
                            $SelectTitle="SELECT * FROM tbl_categorynews Where Status='A'";
                            $result=$con->query($SelectTitle);
                            while($data=$result->fetch_assoc()){
                                $ID=$data['']
                                ?>
                                    <option value="<?php 
                                    echo $data['id']
                                    ?>"><?php echo $data['subtitle']?></option>
                                <?php
                            }
                        ?>
                    
                        
                    </select>
                </div>
                <div class="col-lg-4">
                    <label for="">Title</label>
                    <input type="text" class="form-control" id="txtNewsID">
                </div>
                <div class="col-lg-12">
                    <label for="">Des1</label>
                    <textarea name="" id="" cols="30" rows="10" placeholder="Type your description here..." class="form-control"></textarea>
                </div>
                <div class="col-lg-12">
                    <label for="">Des2</label>
                    <textarea name="" id="" cols="30" rows="10" placeholder="Type your description here..."  class="form-control"></textarea>

                </div>
                <div class="col-lg-12">
                    <label for="">Des3</label>
                    <textarea name="" id="" cols="30" rows="10"placeholder="Type your description here..."  class="form-control"></textarea>
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
                <div class="col-xl4">

                </div>
                <div class="col-lg-4">
                    <label for="">Photo</label>
                    <input type="file" id="fileInput" name="photo" class="form-control" style="width: 100%;height: 300px;z-index:1;position: absolute;opacity: 0;">
                </div>
                <div class="col-lg-4">
                    <label for="">Photo</label>
                    <input type="file" id="fileInput1" name="photo" class="form-control" style="width: 100%;height: 300px;z-index:1;position: absolute;opacity: 0;">
                </div>
                <div class="col-lg-4">
                    <label for="">Photo</label>
                    <input type="file" id="fileInput2" name="photo" class="form-control" style="width: 100%;height: 300px;z-index:1;position: absolute;opacity: 0;">
                </div>
                
                <div class="col-xl-4 mt-4" style="transform: translateY(-50px);">
                    <img src="https://w7.pngwing.com/pngs/469/94/png-transparent-camera-logo-graphy-camera-text-camera-lens-rectangle-thumbnail.png" alt="" width="100%" id="previewIMG">
                </div>
                <div class="col-xl-4 mt-4" style="transform: translateY(-50px);">
                    <img src="https://w7.pngwing.com/pngs/469/94/png-transparent-camera-logo-graphy-camera-text-camera-lens-rectangle-thumbnail.png" alt="" width="100%" id="previewIMG1">
                </div>
                <div class="col-xl-4 mt-4" style="transform: translateY(-50px);">
                    <img src="https://w7.pngwing.com/pngs/469/94/png-transparent-camera-logo-graphy-camera-text-camera-lens-rectangle-thumbnail.png" alt="" width="100%" id="previewIMG2">
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
    GetUploadpic1();
    function GetUploadpic1() {
        let fileInput = document.getElementById('fileInput1');
        let imagepreview = document.getElementById('previewIMG1');

        fileInput.addEventListener("change", function() {
            const file = this.files[0];
            const reader = new FileReader();

            reader.addEventListener("load", function() {
                imagepreview.src = reader.result;
            })
            reader.readAsDataURL(file);
        })
    }
    GetUploadpic2();
    function GetUploadpic2() {
        let fileInput = document.getElementById('fileInput2');
        let imagepreview = document.getElementById('previewIMG2');

        fileInput.addEventListener("change", function() {
            const file = this.files[0];
            const reader = new FileReader();

            reader.addEventListener("load", function() {
                imagepreview.src = reader.result;
            })
            reader.readAsDataURL(file);
        })
    }


    function handleInputChange() {
    var textbox = document.getElementById("txtTitle");
    var data = "1";
    var txtNewsID=document.getElementById('txtNewsID')
   txtNewsID.value=textbox.textContent;
}
</script>

</html>