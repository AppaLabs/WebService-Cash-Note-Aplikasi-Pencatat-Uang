<?php

require 'koneksi.php';

// ambil data yang dikirim melalui HTTP POST 
// kemudian simpan kedalam vriable
$data_pengeluaran = (isset($_POST['pengeluaran']) ? $_POST['pengeluaran']: null);
$data_keterangan = (isset($_POST['keterangan']) ? $_POST['keterangan']: null);
$data_tanggal = (isset($_POST['tanggal']) ? $_POST['tanggal']: null);

// perintah query untuk menambahkan baris data baru pada tabel
$sql = "INSERT INTO tb_pengeluaran (pengeluaran, keterangan, tanggal)  VALUES ('$data_pengeluaran','$data_keterangan','$data_tanggal')";
$query = $conn->query($sql);

// cek apakah eksekusi query berhasil
if ($query == 1) {
	$response['msg'] = "Berhasil di tambahkan";
	$response['result'] = "true";
} else {
	$response['msg'] = "Gagal menambahkan";
	$response['result'] = "false";
}
// tampilkan response dalam bentuk data json
print_r(json_encode($response));
