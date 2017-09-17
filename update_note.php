<?php

require 'koneksi.php';

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

$data_pengeluaran = (isset($_POST['pengeluaran']) ? $_POST['pengeluaran']: null);
$data_keterangan = (isset($_POST['keterangan']) ? $_POST['keterangan']: null);
$data_tanggal = (isset($_POST['tanggal']) ? $_POST['tanggal']: null);

$sql = "UPDATE tb_pengeluaran 
		SET pengeluaran = '$data_pengeluaran',
		keterangan = '$data_keterangan',
		tanggal = '$data_tanggal'
		WHERE id = '$id_catatan'";

$query = $conn->query($sql);

if ($query == 1) {
	$response['msg'] = "Berhasil di update";
	$response['result'] = "true";
} else {
	$response['msg'] = "Gagal men-update";
	$response['result'] = "false";
}

print_r(json_encode($response));
