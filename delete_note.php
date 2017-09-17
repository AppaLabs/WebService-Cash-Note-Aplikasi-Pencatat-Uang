<?php

require 'koneksi.php';

// dapatkan data id dari parameter yg kirim melalui HTTP POST
$id_catatan = (isset($_POST['id']) ? $_POST['id']: null);

// cek apakah data catatan pengeluaran dengan id $id_catatan ada ?
$query_cek = $conn->query("SELECT id FROM tb_pengeluaran WHERE id = '$id_catatan'");
if ($query_cek->num_rows <= 0) { // hitung jumlah baris data yg di temukan
	// set response 
	$response['msg'] = "Catatan tidak ditemukan !";
	$response['result'] = "false";
	// hentikan proses eksekusi kode php

	print_r(json_encode($response));

	return;
}
// perintah untuk hapus baris data
$sql = "DELETE FROM tb_pengeluaran
		WHERE id = '$id_catatan'";
$query = $conn->query($sql);


// cek apakah eksekusi query berhasil
if ($query == 1) {
	$response['msg'] = "Berhasil di hapus";
	$response['result'] = "true";
} else {
	$response['msg'] = "Gagal menghapus";
	$response['result'] = "false";
}
// tampilkan response dalam bentuk data json
print_r(json_encode($response));
