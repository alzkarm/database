<?php
/**
 * Export to PHP Array plugin for PHPMyAdmin
 * @version 5.2.1
 */

/**
 * Database `projectpbo`
 */

/* `projectpbo`.`barang` */
$barang = array(
  array('id_barang' => '25','kode_barang' => 'B002','nama_barang' => 'Chicken Wings','stok_barang' => '7','harga_barang' => '10000','harga_jual_barang' => '12000'),
  array('id_barang' => '29','kode_barang' => 'B007','nama_barang' => 'Pizza','stok_barang' => '232','harga_barang' => '32','harga_jual_barang' => '32'),
  array('id_barang' => '31','kode_barang' => 'B008','nama_barang' => 'mojarela','stok_barang' => '404','harga_barang' => '50000','harga_jual_barang' => '30000'),
  array('id_barang' => '34','kode_barang' => 'B009','nama_barang' => 'pizza','stok_barang' => '10','harga_barang' => '12000','harga_jual_barang' => '14000')
);

/* `projectpbo`.`pembelian` */
$pembelian = array(
  array('id' => '14','no_trans' => '092092','kode_sup' => 'P003','nama_sup' => 'Alzkar','tgl' => '3322','nama_barang' => 'pizza','harga' => '32','jumlah' => '2','total' => '64'),
  array('id' => '15','no_trans' => '12345','kode_sup' => 'P009','nama_sup' => 'Reical','tgl' => '12-12-2026','nama_barang' => 'pizza ','harga' => '32','jumlah' => '2','total' => '64'),
  array('id' => '16','no_trans' => '12345','kode_sup' => 'P009','nama_sup' => 'daffa','tgl' => '12-12-2026','nama_barang' => 'pizza ','harga' => '32','jumlah' => '2','total' => '64')
);

/* `projectpbo`.`penjualan` */
$penjualan = array(
);

/* `projectpbo`.`supplier` */
$supplier = array(
  array('id_supplier' => '54','kode_sup' => 'P009','nama_sup' => 'Reical','tlpn' => '0897657676','email' => 'reickal gmail','alamat' => 'monas'),
  array('id_supplier' => '55','kode_sup' => 'P002','nama_sup' => 'azkar','tlpn' => '08999999','email' => 'alzkar@gmail.com','alamat' => 'jl yarsi')
);

/* `projectpbo`.`user` */
$user = array(
  array('id' => '1','username' => 'admin','password' => 'admin')
);
