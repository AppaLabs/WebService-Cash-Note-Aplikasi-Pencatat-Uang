<?php

require 'koneksi.php';

// dapatkan data id dari parameter yg kirim melalui HTTP POST
$id_catatan = (isset($_POST['id']) ? $_POST['id']: null);

// cek apakah data catatan pengeluaran dengan id $id_catatan ada ?
$query = $conn->query("SELECT * FROM tb_pengeluaran WHERE id = '$id_catatan'");
if ($query->num_rows <= 0) { // hitung jumlah baris data yg di temukan
	// set response 
	$response['msg'] = "Catatan tidak ditemukan !";
	$response['result'] = "false";
	// hentikan proses eksekusi kode php

	print_r(json_encode($response));

	return;
}

$response['data'] = $query->fetch_assoc();


// cek apakah eksekusi query berhasil
if ($query) {
	$response['msg'] = "Catatan ditemukan";
	$response['result'] = "true";
} else {
	$response['msg'] = "Gagal mendapatkan catatan";
	$response['result'] = "false";
}
// tampilkan response dalam bentuk data json
print_r(json_encode($response));
