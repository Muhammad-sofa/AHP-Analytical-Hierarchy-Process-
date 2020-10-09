<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Lovely Corpin Tour & Travel</title>

    <!-- Core CSS - Include with every page -->
    <link href="sb2/css/bootstrap.min.css" rel="stylesheet">
    <link href="sb2/font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Page-Level Plugin CSS - Blank -->

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
                    <h3 class="page-header">Tambah Data Alternatif Baru</h3>
                </div>
                <!-- /.col-lg-12 -->
                <div class="col-lg-8">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <b>Panel Tambah Data Alternatif Baru</b>
                        </div>
                        <div class="panel-body">
                            <form role="form" method="post" action="tambah.php">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Alternatif</label>
                                        <input type="text" class="form-control" name="alternatif" id="alternatif" placeholder="Alternatif Lokasi">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Wisata Budaya</label>
                                        <input type="text" class="form-control" name="k1" id="k1" placeholder="Nilai Bobot">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Wisata Alam</label>
                                        <input type="text" class="form-control" name="k2" id="k2" placeholder="Nilai Bobot">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Wisata Keluarga</label>
                                        <input type="text" class="form-control" name="k3" id="k3" placeholder="Nilai Bobot">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Harga 1 jt - 3 jt</label>
                                        <input type="text" class="form-control" name="k4" id="k4" placeholder="Nilai Bobot">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Harga >3 jt</label>
                                        <input type="text" class="form-control" name="k5" id="k5" placeholder="Nilai Bobot">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Harga >5 jt</label>
                                        <input type="text" class="form-control" name="k6" id="k6" placeholder="Nilai Bobot">
                                    </div>
                                </div><!-- /.box-body -->

                                <div class="box-footer">
                                    <button type="reset" class="btn btn-info">Reset</button>
                                    <a href="alternatif.php" type="cancel" class="btn btn-warning">Batal</a>
                                    <button type="submit" class="btn btn-primary">Tambahkan</button>
                                </div>
                            </form>
                        </div>
                        <div class="panel-footer">
                            <i>Sofa</i>
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

    <!-- Page-Level Plugin Scripts - Blank -->

    <!-- SB Admin Scripts - Include with every page -->
    <script src="sb2/js/sb-admin.js"></script>

    <!-- Page-Level Demo Scripts - Blank - Use for reference -->

</body>

</html>