<?php 
include ('./input-data-nilai-config.php');
$data=mysqli_query($mysqli,"DELETE FROM siswa_nilai WHERE nis='".$_GET["nis"]."'");
header("location:input-data-nilai.php");
?>