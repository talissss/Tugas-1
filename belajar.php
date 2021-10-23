<?php
$nama = "Tsalis Maulidiyah";
$umur = 20;
$asalkampus = 'Universitas Gajayana Malang';

echo "Halo, perkenalkan namaku".$nama.",aku berusia".$umur."tahun. Sekarang aku kuliah di ".$asalkampus;
?>


<br>
<br>

<?php
function nama_hewan($hewan){
	echo "Saya memelihara $hewan<br>"; 
}

nama_hewan("Buaya");
nama_hewan("Buaya");
nama_hewan("Buaya");
nama_hewan("Buaya");
?>

<br>
<br>

<?php
$nilai = 80;
if($nilai > 75)
{
	echo "Selamat Anda Lulus";
}
else
{
	echo "Maaf Anda Tidak Lulus";
}
?>