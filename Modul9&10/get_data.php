<?php

$data_mahasiswa = [ "2311102280" => [
"nama" => "Loisa Vanica Saragih", "jurusan" => "Informatika",
"email" => "loi@example.com"
],
"2311102210" => [
"nama" => "Malona", "jurusan" => "Informatika",	
 
	"email" => "lona@example.com"
],
"2312345678" => [
"nama" => "Michaela",
"jurusan" => "Ilmu Komunikasi", "email" => "michaela@example.com"
]
];

if (isset($_POST['nim'])) {
$nim = $_POST['nim'];

if (array_key_exists($nim, $data_mahasiswa)) { echo json_encode($data_mahasiswa[$nim]);
} else {
echo json_encode([
"nama" => "Tidak ditemukan", "jurusan" => "-",
"email" => "-"
]);
}
}
?>	
