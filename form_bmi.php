<?php
include "header.php";
?>
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Kalkulator BMI</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Kalkulator BMI</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">

                        <div class="card-body row">
                            <div class="col-6">
                                <form method="POST" action="hasil_bmi.php">

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Kode Pasien</label>
                                        <input placeholder="Masukan Kode" type="text" name="kode" class="form-control"
                                            aria-describedby="emailHelp">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Nama</label>
                                        <input placeholder="Masukan Nama" type="text" name="nama" class="form-control"
                                            aria-describedby="emailHelp">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Berapa tinggi Anda? (cm)</label>
                                        <input placeholder="Masukan Tinggi" type="text" name="tinggi"
                                            class="form-control" aria-describedby="emailHelp">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Berapa berat badan Anda? (kg)</label>
                                        <input placeholder="Masukan Berat" type="text" name="berat" class="form-control"
                                            id="exampleInputPassword1">
                                    </div>
                                    <div class="form-group">
                                        <label>Jenis kelamin</label>
                                        <div class="radio-group">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" value="L" name="gender"
                                                    id="pria">
                                                <label class="form-check-label" for="inlineRadio1"> Laki-laki</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" value="P" name="gender"
                                                    id="wanita">
                                                <label class="form-check-label" for="inlineRadio2"> Perempuan</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Tanggal Pemeriksaan</label>
                                        <input type="date" name="date" class="form-control" id="exampleInputPassword1">
                                    </div>
                                    <a href="hasil_bmi.php">
                                        <button name="proses" type="submit" class="btn btn-primary">Hitung</button>
                                    </a>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php
include "footer.php";
?>