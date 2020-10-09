<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Lovely Corpin Tour & Travel >> Alternatif</title>

    <!-- Core CSS - Include with every page -->
    <link href="sb2/css/bootstrap.min.css" rel="stylesheet">
    <link href="sb2/font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Page-Level Plugin CSS - Tables -->
    <link href="sb2/css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">

    <!-- SB Admin CSS - Include with every page -->
    <link href="sb2/css/sb-admin.css" rel="stylesheet">

</head>

<body>

    <div id="wrapper">

        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Lovely Corpin Tour & Travel</a>
            </div>
            <!-- /.navbar-header -->
        </nav>
        <!-- /.navbar-static-top -->

        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="active">
                        <a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="kriteria.php"><i class="fa fa-table fa-fw"></i> Data Kriteria</a>
                    </li>
                    <li>
                        <a href="alternatif.php"><i class="fa fa-edit fa-fw"></i> Data Alternatif</a>
                    </li>
                    <li>
                        <a href="analisa.php"><i class="fa fa-files-o fa-fw"></i> Hasil Analisa</a>
                    </li>
                </ul>
                <!-- /#side-menu -->
            </div>
            <!-- /.sidebar-collapse -->
        </nav>
        <!-- /.navbar-static-side -->

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">Data Alternatif</h3>
                </div>
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <b>Panel Alternatif Lokasi</b>
                        </div>
                        <?php
                        include 'config.php';
                        $kriteria = $mysqli->query("select * from alternatif");
                        if (!$kriteria) {
                            echo $mysqli->connect_errno . " - " . $mysqli->connect_error;
                            exit();
                        }
                        $i = 0;
                        ?>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Alternatif</th>
                                            <th>Kriteria 1</th>
                                            <th>Kriteria 2</th>
                                            <th>Kriteria 3</th>
                                            <th>Kriteria 4</th>
                                            <th>Kriteria 5</th>
                                            <th>Kriteria 6</th>
                                            <th>Option</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $i = 1;
                                        while ($row = $kriteria->fetch_assoc()) {
                                            echo '<tr>';
                                            echo '<td>' . $i++ . '</td>';
                                            echo '<td>' . $row["alternatif"] . '</td>';
                                            echo '<td>' . $row["k1"] . '</td>';
                                            echo '<td>' . $row["k2"] . '</td>';
                                            echo '<td>' . $row["k3"] . '</td>';
                                            echo '<td>' . $row["k4"] . '</td>';
                                            echo '<td>' . $row["k5"] . '</td>';
                                            echo '<td>' . $row["k6"] . '</td>';
                                            echo '<td><!--a href="#"><i class="fa fa-search"></i></a-->';
                                            ?>
                                            <a href="edit-alternatif.php?id=<?php echo $row['id_alternatif']; ?>" class="btn btn-primary"><i class="fa fa-pencil"></i> Edit</a>
                                            <a href="hapus.php?id=<?php echo $row['id_alternatif']; ?>" onClick="return confirm('Menghapus data Alternatif ke-<?php echo $i - 1; ?> Lokasi <?php echo $row['alternatif']; ?> ?');" class="btn btn-danger"><i class="fa fa-times"></i> Delete</a></td>
                                        <?php
                                            echo '</tr>';
                                        }
                                        ?>
                                    </tbody>
                                </table>
                                <a class='btn btn-primary' href='tambah-alternatif.php'> Tambah Data Alternatif</a>
                            </div>

                            <!-- /.table-responsive -->
                            <!--a class='btn btn-primary' href='#'> Tambah Data Kriteria</a-->
                        </div>
                        <div class="panel-footer">
                            <br>
                            <center>
                                <p>Keterangan</p>
                                <table border="1">
                                    <tr>
                                        <td>
                                            <center> Kriteria 1</center>
                                        </td>
                                        <td>
                                            <center>Harga terhadap fasilitas</center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <center>Kriteria 2</center>
                                        </td>
                                        <td>
                                            <center>Harga terhadap banyak tujuan wisata</center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <center>Kriteria 3</center>
                                        </td>
                                        <td>
                                            <center>Harga terhadap lama wisata</center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <center>Kriteria 4</center>
                                        </td>
                                        <td>
                                            <center>Fasilitas terhadap banyak tujuan wisata</center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <center>Kriteria 5</center>
                                        </td>
                                        <td>
                                            <center>Fasilitas terhadap lama wisata</center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <center>Kriteria 6</center>
                                        </td>
                                        <td>
                                            <center>Banyak tujuan wisata terhadap lama wisata</center>
                                        </td>
                                    </tr>
                                </table>
                            </center>
                        </div>
                        <div class="panel-footer">
                            <i>16410100029 Muhammad Sofa Yuliansyah</i>
                        </div>
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Core Scripts - Include with every page -->
    <script src="sb2/js/jquery-1.10.2.js"></script>
    <script src="sb2/js/bootstrap.min.js"></script>
    <script src="sb2/js/plugins/metisMenu/jquery.metisMenu.js"></script>

    <!-- Page-Level Plugin Scripts - Tables -->
    <script src="sb2/js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="sb2/js/plugins/dataTables/dataTables.bootstrap.js"></script>

    <!-- SB Admin Scripts - Include with every page -->
    <script src="sb2/js/sb-admin.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
        $(document).ready(function() {
            $('#dataTables-example').dataTable();
        });
    </script>

</body>

</html>