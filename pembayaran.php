
<?php
session_start();
if (!isset($_SESSION['login'])) {
    header('location:login.php');
}

?>
<?php
include 'config/koneksi.php';
$username = $_SESSION['username'];
if (isset($_SESSION['login'])) {
    $sql_query = "SELECT * FROM buktii WHERE username='$username'";
    $result = mysqli_query($koneksi, $sql_query);
    $d = mysqli_fetch_array($result);
    $nama = $d['namasiswa'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Aplikasi Pembayaran SPP</title>
    <!-- Fancy Box -->
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <script type="text/javascript" src="vendor/chart.js/Chart.min.js"></script>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

      

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <!-- <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button> -->

                    <!-- Topbar Search -->
                    <!-- <form method="POST" class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" name="search" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" value="<?php if (isset($_GET["search"])) echo $_GET["search"]; ?>">
                            <div class="input-group-append">
                                <button class="btn btn-primary" name="submit" type="submit">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form> -->

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <!-- <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i> -->
                        <!-- </a> -->
                        <!-- Dropdown - Messages -->
                        <!-- <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li> -->

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $nama; ?> </span>
                                <!-- <img class="img-profile rounded-circle" src="<?php echo "file/" . $d['foto']; ?>"> -->
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <!-- <a class="dropdown-item" href="#">
                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                        Profile
                    </a>
                    <a class="dropdown-item" href="#">
                        <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                        Settings
                    </a>
                    <a class="dropdown-item" href="#">
                        <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                        Activity Log
                    </a> -->
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
        <table style='width:800px; font-size:12pt; font-family:calibri; border-collapse: collapse;' border='0'>
        <td width='70%' align='left' style='padding-right:80px; vertical-align:top'>
            <span style='font-size:16pt'><b>Siap Bayar</b></span></br>
            Jalan-Jalan Kemana Saja Dengan Pintu Ajaib Doraemon </br>
            Telp : 0594094545
        </td>
        <td style='vertical-align:top' width='30%' align='left'>
            <b><span style='font-size:16pt'>FAKTUR PEMBAYARAN</span></b></br>
            Nama    : <?php echo $d['namasiswa']; ?></br>
            Tanggal : <?php echo date('d-M-Y'); ?> </br>
        </td>
    </table>
    
    </table>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <th>No.</th>
                            <th>Nama</th>
                            <th>Tanggal Pembayaran</th>
                            <th>Bukti Pembayaran</th>
                            <th>Pembayaran</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include 'config/koneksi.php';
                            $no = 1;
                            $idsiswa = $d['idsiswa'];
                            if (isset($_SESSION['bktbayar'])) {
                                $sql_query = "SELECT * FROM buktii WHERE idsiswa='$idsiswa'";
                                $result = mysqli_query($koneksi, $sql_query);
                                $d = mysqli_fetch_array($result);
                                $bktbayr = $d['bktbayar'];
                                if (!empty($bktbayr)) {
                                    // perintah tampil data berdasarkan periode bulan
                                    $data = mysqli_query($koneksi, "SELECT * from buktii where bktbayar=$bktbayr");
                                } else {
                                    // perintah tampil semua data
                                    $data = mysqli_query($koneksi, "SELECT * from buktii");
                                }
                            } else {
                                // perintah tampil semua data
                                $data = mysqli_query($koneksi, "SELECT * from buktii");
                            }
                            while ($d = mysqli_fetch_array($data)) {
                            ?>
                                <tr>
                                    <td align="center"><?php echo $no++; ?></td>
                                    <td><?php echo $d['namasiswa']; ?></td>
                                    <td><?php echo $d['tglbayar']; ?></td>
                                    <td id="bktbayar"><img height=130 src="<?php echo "file/" . $d['bktbayar']; ?>"></td>
                                    <td>Lunas</td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                    <script>
                        window.print();
                    </script>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->














<?php include "template/footer.php"; ?>