<?php
$nama = $_POST['nama'];
$mapel = $_POST['mapel'];
$kelas = $_POST['kelas'];
$catatan = $_POST['note'];

$pesan = "
FORMULIR PESANAN JOKI
――――――――――――――――――――――
- Nama : ".$nama."
- Mapel : ".$mapel."
- Kelas : ".$kelas."
- Catatan : ".$catatan."
";

$encodePesan = urlencode($pesan);

$nomor = "628123456789"; // ubah pake nomor whatsapp awalan 62
$url = "https://api.whatsapp.com/send?phone={$nomor}&text={$encodePesan}";

header("Location: $url");
exit();
