<?php include "template/header.php";
$username = $_SESSION['username']; ?>

<div class="container-fluid">
    <h1 class="h4 text-gray-900 mb-4" align="center"></h1>

    <!-- <h1 class="h1 mb-2 font-weight-bold text-dark-800" align="center">Pembayaran SPP</h1> -->
    <!-- Page Heading -->
    <h3 class="h5 mb-2 font-weight-bold text-dark-800" align="center">Selamat Datang di Aplikasi Pembayaran SPP</h3>
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"></h1>
    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama</th>
                                <th>Tanggal Pembayaran</th>
                                <th>Bukti Pembayaran</th>
                                <th>Cetak Bukti</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include 'config/koneksi.php';
                            $no = 1;
                            $data = mysqli_query($koneksi, "select * from buktii");
                            while ($d = mysqli_fetch_array($data)) {
                            ?>
                                <tr>
                                    <td align="center"><?php echo $no++; ?></td>
                                    <td><?php echo $d['namasiswa']; ?></td>
                                    <td><?php echo $d['tglbayar']; ?></td>
                                    <td><?php echo $d['bktbayar']; ?></td>
                                    <td align="center">
                                        <a href="" data-toggle="modal" data-target="#myModalediteo<?php echo $d['id_eo']; ?>" data-whatever=""><button class="btn btn-secondary"><i class="fas fa-print"></i></button></a>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- Begin Page Content -->

    <!-- /.container-fluid -->

</div>

<?php include "template/footer.php"; ?>