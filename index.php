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
                            <form action="" method="POST" enctype="multipart/form-data" role="form">
                                <div class="form-group">
                                    <label for="idsiswa" class="col-form-label">Nama :</label>
                                    <input type="text" class="form-control" name="namasiswa" readonly value="<?php echo $d['namasiswa']; ?>">
                                    <input type="hidden" name="idsiswa" value="<?php echo $d['idsiswa']; ?>">
                                    <input type="hidden" name="idadmin" value="<?php echo $d['idadmin']; ?>">
                                </div>

                                <div class="form-group">
                                    <label for="tglbayar" class="col-form-label">Tanggal Pembayaran :</label>
                                    <input type="date" class="form-control" name="tglbayar">
                                </div>

                                <div class="form-group">
                                    <label for="bktbayar" class="col-form-label">Upload Bukti Pembayar :</label>
                                    <input type="file" class="form-control" name="bktbayar">
                                </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" name="simpan" class="btn btn-primary">Bayar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" onSubmit="validasi()">
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
                        $idadmin = $_SESSION['id'];
                        if (isset($_SESSION['status'])) {
                            $sql_query = "SELECT * FROM buktii WHERE idadmin='$idadmin'";
                            $result = mysqli_query($koneksi, $sql_query);
                            $d = mysqli_fetch_array($result);
                            $idsiswa = $d['idsiswa'];
                            if (!empty($idsiswa)) {
                                // perintah tampil data berdasarkan periode bulan
                                $data = mysqli_query($koneksi, "SELECT * from buktii where idsiswa=$idsiswa");
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
                                <td id="bktbayar"><img height=130 src="<?php echo "file/" . $d['bktbayar']; ?>" data-fancybox="Image"></td>
                                <td align="center">
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary col-5" data-toggle="modal" data-target="#staticBackdrop <?php echo $d['bktbayar']; ?>" data-whatever="<?php echo $d['bktbayar']; ?>">
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
                                                    Klik CETAK jika ingin mencetak faktur, jika tidak klik Close.
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                   <a target="" href="pembayaran.php"><button type="submit" name="cetak" class="btn btn-primary">CETAK</button></a>
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

    <!-- Begin Page Content -->

    <!-- /.container-fluid -->

</div>

<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (isset($_POST['simpan'])) {
    // menangkap data yang di kirim dari form
    $idsiswa        = $_POST['idsiswa'];
    $tglbayar            = $_POST['tglbayar'];

    $idadmin = $_POST['idadmin'];

    // menangkap foto
    $fileName               = $_FILES['bktbayar']['name'];
    $tmpNama                = $_FILES['bktbayar']['tmp_name'];

    // Simpan di Folder Gambar
    copy($tmpNama, "file/" . $fileName);
    // menginput data ke database
    $query = mysqli_query($koneksi, "INSERT into spp values('','$idsiswa','$tglbayar','$fileName','$idadmin')") or die(mysqli_error($koneksi));
    echo "<script> alert ('Data Behasil di Tambahkan');
    document.location='index.php';

</script>";
}
?>


<?php
include "template/footer.php";
?>