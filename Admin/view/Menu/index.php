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
                    <th>MenuID</th>
                    <th>Text</th>
                    <th>TextKH</th>
                    <th>Inorder</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $SELECT = "Select * from tbl_menu";
                $res = $con->query($SELECT);
                while ($data = $res->fetch_assoc()) {
                ?>
                    <tr>
                        <td><?php echo $data['MenuID'] ?></td>
                        <td><?php echo $data['Text'] ?></td>
                        <td style='font-family: "Battambang", system-ui;'><?php echo $data['MenuKH'] ?></td>
                        <td><?php echo $data['Inorder'] ?></td>
                        <td><?php echo $data['status'] ?></td>
                        <td>
                            <a href="Edit.php?id=<?php echo $data['MenuID'] ?>" class="btn btn-success"><i class="fa-solid fa-file-pen"></i></a>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <i class="fa fa-trash" aria-hidden="true"></i>
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Waining</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <b>Do you want to Delete this Data? MenuID=<?php echo $data['MenuID'] ?></b>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <a href="../../model/Menu/actionCreate.php?ID=<?php echo $data['MenuID'] ?>&&action=Delete" type="button" class="btn btn-primary">Okay</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
</html>