<?php
include_once("libfungsi.php");
    $nama_siswa = isset ($_POST['nama_siswa']) ? $_POST['nama_siswa'] : " ";
    $mata_kuliah = isset ($_POST['matkul_siswa']) ? $_POST['matkul_siswa'] : " ";
    $nilai_uts = isset ($_POST['uts_siswa']) ? $_POST['uts_siswa'] : " ";
    $nilai_uas = isset ($_POST['uas_siswa']) ? $_POST['uas_siswa'] : " ";
    $nilai_tugas = isset ($_POST['tuprak_siswa']) ? $_POST['tuprak_siswa'] : " ";


    echo '</br>Nama : ' .$nama_siswa;
    echo '</br>Mata Kuliah : ' .$mata_kuliah;
    echo '</br>Nilai UTS : ' .$nilai_uts;
    echo '</br>Nilai UAS : ' .$nilai_uas;
    echo '</br>Nilai Tugas Praktikum : '.$nilai_tugas;
    $nilai_total = ((int)$nilai_uts+(int)$nilai_uas+(int)$nilai_tugas)/3;
    echo '<br/>Nilai Total : '.$nilai_total;
    $grade = grade($nilai_total);
    $predikat = predikat($grade);
    echo "<br/>Grade : ". $grade . " ". $predikat;
    $hasil = lulus_matkul($nilai_total);
    echo '<br/> Dinyatakan '.$hasil;

?>
