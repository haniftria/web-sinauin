<?php

include ('config.php');

$n = $_POST['jum']; // membaca jumlah data

// looping
for ($i=1; $i<=$n; $i++)
{
    $id_pilihan_soal = $_POST ['id_pilihan_soal'];
	$id_mata_pelajaran = $_POST ['id_mata_pelajaran'];
	$materi= $_POST ['materi'];
	$que = $_POST ['que'.$i];
	$pilihan_a = $_POST ['pilihan_a'.$i];
	$pilihan_b = $_POST ['pilihan_b'.$i];
	$pilihan_c = $_POST ['pilihan_c'.$i];
	$pilihan_d = $_POST ['pilihan_d'.$i];
	$pilihan_e = $_POST ['pilihan_e'.$i];
	$ans = $_POST ['ans'.$i];
	$userans = $_POST ['userans'.$i];

    if ((!empty($que)) && (!empty($ans)))
    {
       $query = "INSERT INTO pilihan_soal(id_pilihan_soal,id_mata_pelajaran,materi,que,pilihan_a,pilihan_b,pilihan_c,pilihan_d,pilihan_e,ans,userans) VALUES ('$id_pilihan_soal', '$id_mata_pelajaran', '$materi', '$que', '$pilihan_a', '$pilihan_b', '$pilihan_c', '$pilihan_d', '$pilihan_e', '$ans', '$userans')";
       $hasil = mysqli_query($conn,$query) or die (mysqli_error($conn));

       if ($hasil) echo '<script> alert("Data Berhasil Disimpan");
						location="buatsoal2.php?"
						</script>';
       else echo "Input data gagal<br>";
    }
}

?>