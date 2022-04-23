<?php
include "header.php";
?>
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Hasil BMI</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="form_bmi.php">Kalkulator BMI</a></li>
                        <li class="breadcrumb-item active">Hasil BMI</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card ">
                        <div class="card-body">
                            <?php
                            require_once "class_bmi.php";
                            require_once "class_pasien.php";
                            require_once "class_bmipasien.php";
                            
                            $psn1 = new Pasien('P001', 'Ahmad');
                            $psn1->gender = 'L';
                            $psn2 = new Pasien('P002', 'Rina');
                            $psn2->gender = 'P';
                            $psn3 = new Pasien('P003', 'Lutfi');
                            $psn3->gender = 'L';

                            $bmi1 = new BMI(69.8, 169);
                            $bmi2 = new BMI(55.3, 165);
                            $bmi3 = new BMI(45.2, 171);

                            $bmipas1 = new BMIPasien($bmi1, $psn1, '2022-01-10');
                            $bmipas2 = new BMIPasien($bmi2, $psn2, '2022-01-10');
                            $bmipas3 = new BMIPasien($bmi3, $psn3, '2022-01-11');

                            if (isset($_POST['proses'])) {
                                
                                $proses = $_POST['proses'];
                                $tinggi = $_POST['tinggi'];
                                $berat = $_POST['berat'];
                                $gender = $_POST['gender'];
                                $kode = $_POST['kode'];
                                $nama = $_POST['nama'];
                                $tgl = $_POST['date'];

                                $bmi4 = new BMI($berat, $tinggi);
                                $psn4 = new Pasien($kode, $nama);
                                $kel = $psn4->gender = $gender;

                                $status = $bmi4->nilaiBMI();

                                $bmipas4 = new BMIPasien($bmi4, $psn4, $tgl);
                                $arr = [$bmipas1,$bmipas2,$bmipas3,$bmipas4];
                            }

                            ?>

                            <h2 class="text-center text-bold">BMI Anda adalah <b
                                    class="text-primary"><?=$bmi4->nilaiBMI()?></b></h2>

                            <?php
                            if ($bmi4->statusBMI() == 'Kekurangan Berat Badan') { ?>
                            <h3 class="text-center text-bold">Dengan Status <g class="text-warning">
                                    <?=$bmi4->statusBMI()?></g>
                            </h3>

                            <?php    
                            } else if ($bmi4->statusBMI() == 'Normal (Ideal)')  { ?>
                            <h3 class="text-center text-bold">Dengan Status <g class="text-success">
                                    <?=$bmi4->statusBMI()?></g>
                            </h3>

                            <?php    
                            } else if ($bmi4->statusBMI() == 'Kelebihan berat badan')  { ?>
                            <h3 class="text-center text-bold">Dengan Status <g class="text-primary">
                                    <?=$bmi4->statusBMI()?></g>
                            </h3>
                            <?php    
                            } else if ($bmi4->statusBMI() == 'Kegemukan (Obesitas)')  { ?>
                            <h3 class="text-center text-bold">Dengan Status <g class="text-danger">
                                    <?=$bmi4->statusBMI()?></g>
                            </h3>
                            <?php    
                            } ?>


                            <a href="form_bmi.php" class="text-white btn btn-success btn-sm text-decoration-none"><i
                                    class="fas fa-redo"></i>
                                Hitung
                                Ulang</a>

                            <table class="table table-bordered mt-3" width="100%">
                                <thead class="bg-secondary">
                                    <tr>
                                        <th>No</th>
                                        <th>Tanggal Periksa</th>
                                        <th>Kode Pasien</th>
                                        <th>Nama Pasien</th>
                                        <th>Gender</th>
                                        <th>Berat (kg)</th>
                                        <th>Tinggi (cm)</th>
                                        <th>Nilai BMI</th>
                                        <th>Status BMI</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $nomor=1;
                                    foreach($arr as $obj){
                                    ?>
                                    <tr>
                                        <td><?=$nomor?></td>
                                        <td><?=$obj->tanggal?></td>
                                        <td><?=$obj->pasien->kode?></td>
                                        <td><?=$obj->pasien->nama?></td>
                                        <td><?=$obj->pasien->gender?></td>
                                        <td><?=$obj->bmi->berat?></td>
                                        <td><?=$obj->bmi->tinggi?></td>
                                        <td><?=$obj->bmi->nilaiBMI()?></td>
                                        <td><?=$obj->bmi->statusBMI()?></td>
                                    </tr>
                                    <?php
                                        $nomor++;
                                    }
                                    ?>
                                </tbody>
                            </table>
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