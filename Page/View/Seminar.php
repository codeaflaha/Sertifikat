<!doctype html>
<html lang="en">
<!-- Mirrored from demos.creative-tim.com/material-dashboard-pro/examples/forms/regular.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Mar 2017 21:33:48 GMT -->
<head>
    <?php 
        require '../Include/Header.php';
        require '../Include/Connect/Connections.php'
    ?>
    
</head>

<body>
    <div class="wrapper">
        <?php require '../Include/SideBar.php'; ?>        
        <div class="main-panel">
            <?php require '../Include/NavPanel.php';?>
            <div class="content">
            <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-header-icon" data-background-color="purple">
                                    <i class="material-icons">assignment</i>
                                </div>
                                <div class="card-content">
                                    <h4 class="card-title">Data Peserta
                                    </h4>
                                    <div class="toolbar">
                                        <!--        Here you can write extra buttons/actions for the toolbar              -->
                                    </div>
                                    <div class="material-datatables">                                       
                                        <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>Nama Seminar</th>
                                                    <th>Tanggal Seminar</th>
                                                    <th>Keterangan</th>
                                                    <th class="disabled-sorting text-right">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                                 $query = "SELECT * FROM seminar";
                                                 $data  = $con->query($query);
                                                 While ($row = mysqli_fetch_object($data))
                                                {
                                                    $date = date('d F Y', strtotime($row->tgl_pelaksana))
                                                ?>
                                                <tr>
                                                    <td><?php echo $row->nama_seminar; ?></td>
                                                    <td><?php echo  $date;?></td>
                                                    <td><?php echo "-" ?></td>
                                                    <td class="text-right">
                                                        <a href="#" class="btn btn-simple btn-info btn-icon like"><i class="material-icons">favorite</i></a>
                                                        <a href="#" class="btn btn-simple btn-warning btn-icon edit"><i class="material-icons">dvr</i></a>
                                                        <a href="#" class="btn btn-simple btn-danger btn-icon remove"><i class="material-icons">close</i></a>
                                                    </td>
                                                </tr>
                                                <?php 
                                                }
                                                $con -> close();
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- end content-->
                            </div>
                            <!--  end card  -->
                        </div>
                        <!-- end col-md-12 -->
                    </div>
                    <!-- end row -->
                </div>
            </div>
            <?php include_once '../Include/Footer.php'; ?>
        </div>
    </div>
    <!-- <?php include_once '../Include/SideBarTools.php'; ?> -->
</body>
<!--   Core JS Files   -->
<?php require '../Include/Js.php'; ?>
<!-- Mirrored from demos.creative-tim.com/material-dashboard-pro/examples/forms/regular.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Mar 2017 21:33:48 GMT -->
</html>