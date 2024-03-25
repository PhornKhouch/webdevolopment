<?php
    include '../../connection/conect.php';
    include '../../root/Header.php';
    session_start();
?>
</head>
<body>
<div class="container-fluid bg-secondary mt-4 mx-4 p-2 ">
        <a href="Create.php" class="btn btn-success"> <i class="fa fa-plus" aria-hidden="true"></i> Add</a>
    </div>


    <div class="container-fluid  mt-4 mx-4 p-2 ">
        <div class="row">
            <div class="col-xl-12">
                <?php
                if (isset($_SESSION['msg']) != null) {
                ?>
                    <div class="alert alert-primary" role="alert">
                        <?php
                        echo $_SESSION['msg'];
                        session_destroy();
                        ?>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </div>


    <div class="container-fluid  mt-4  " style="margin-right: 20px;overflow-x:hidden;">
        <table id="example" class="table  table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>SubTitle</th>
                    <th>Category</th>
                    <th>Inorder</th>
                    <th>Status</th>
                    <th>PostDate</th>
                    <th>Photo</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $SELECT = "Select * from tbl_contenthomepage";
                $res = $con->query($SELECT);
                $i=1;
                while ($data = $res->fetch_assoc()) {
                ?>
                    <tr>
                        <td><?php echo $i++?></td>
                        <td><?php echo $data['title'] ?></td>
                        <td><?php echo $data['SubTitle'] ?></td>
                        <td>
                            <?php 
                                // $selectDES="SELECT MenuKH FROM `tbl_menu` WHERE MenuID='".$data['MenuID']."'";
                                // $res=$con->query($selectDES);
                                // $DesCate=$res->fetch_assoc();
                                echo $data['SubTitle'];
                            ?>
                        </td>
                        <td><?php echo $data['Inorder'] ?></td>
                        <td><?php echo $data['status'] ?></td>
                        <td><?php echo date("Y-m-d", strtotime($data['postdate']));?></td>
                        <td>
                            <img src="../../Upload/NewHomepage/<?php echo $data['photo'] ?>" alt="" width="100px">
                        </td>
                        <td>
                            <button  onclick="Delete('<?php echo $data['id']?>')" class="btn btn-success">Delete</button>
                            <a href="Edit.php?id=<?php echo $data['id'] ?>" class="btn btn-success">Edit</a>
                        </td>
                    </tr>
                <?php
                }
                ?>


            </tbody>

        </table>
    </div>
</body>
<?php
    include '../../root/DataTable.php';
?>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    function testAlert(msg){
        Swal.fire({
        title: "Good job!",
        text: msg,
        icon: "success"
        });
    }
    

    function Delete(id){
        $.ajax({
            url:'../../model/NewsHomepage/actionDelete.php',
            type:'post',
            data:{
                id:id,
                action:"Delete"

            },
            success:function(res){
                testAlert(res);
            }
        })
    }
</script>
</html>