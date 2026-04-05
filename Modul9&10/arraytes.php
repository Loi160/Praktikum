<?php
$arrJurusan = [
"Loisa Vanica Saragih" => "Informatika", "Malona" => "Informatika",
"Michaela" => "Ilmu Komunikasi",
];
echo $arrJurusan["Loisa Vanica Saragih"] . "<br>"; echo $arrJurusan['Michaela'] . "<br>";

$arrEmail = [];
$arrEmail["Loisa Vanica Saragih"] = "loi@example.com";
$arrEmail["Malona"] = "lona@example.com";
$arrEmail["Michaela"] = "michaela@example.com";

echo $arrEmail["Loisa Vanica Saragih"] . "<br>"; echo $arrEmail['Michaela'] . "<br>";
?>
