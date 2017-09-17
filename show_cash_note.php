<?php

require 'koneksi.php';

// perintah query untuk menampilkan semua baris data
// yang ada di tabel tb_pengeluaran
// dengan urutan DESCENDING (BESAR ke KECIL) berdasarkan ID catatannya
$sql = "SELECT * FROM tb_pengeluaran ORDER BY id DESC";
$query = $conn->query($sql);

// tampung response dalam array
$response = [];
$response['data'] = null;

// looping hasil eksekusi query
// lalu dimasukan kedalam Array $response['data']
foreach ($query as $key => $value) {
	$response['data'][] = $value;
}
// cek apakah eksekusi query berhasil
if ($response['data'] == null) {
	$response['msg'] = "Tidak ada catatan untuk di tampilkan";
	$response['result'] = "false";
} else {
	$response['msg'] = "Data ditemukan";
	$response['result'] = "true";
}
// tampilkan response dalam bentuk data json
print_r(json_encode($response));