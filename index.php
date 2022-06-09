<?php
include "template/header.php";
$username = $_SESSION['username'];
?>


<div class="container-fluid">
    <h1 class="h4 text-gray-900 mb-4" align="center"></h1>

    <!-- <h1 class="h1 mb-2 font-weight-bold text-dark-800" align="center">Pembayaran SPP</h1> -->
    <!-- Page Heading -->
    <h3 class="h5 mb-2 font-weight-bold text-dark-800" align="center">Selamat Datang di Aplikasi Pembayaran SPP</h3>
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"></h1>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Pembayaran</h6>
        </div>
        <div class="card-body">
            <button type="button" class="btn btn-primary col-2 my-3" style="float:right" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Bayar SPP</button>

            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Bayar SPP</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Nama</label>
                                    <input type="text" class="form-control" id="recipient-name">
                                </div>

                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Tanggal</label>
                                    <input type="text" class="form-control" id="recipient-name">
                                </div>

                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Bukti Pembayaran</label>
                                    <input type="text" class="form-control" id="recipient-name">
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">BAYAR</button>
                        </div>
                    </div>
                </div>
            </div>
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
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary col-5" data-toggle="modal" data-target="#staticBackdrop">
                                        <i class="fas fa-print"></i>
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="staticBackdropLabel">Cetak</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    Klik CETAK jika ingin mencetakm faktur, jika klik Close.
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary">CETAK</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Content Row -->
    <div class="row">



    </div>
    <!-- Begin Page Content -->

    <!-- /.container-fluid -->

</div>

<?php
include "template/footer.php";
?>