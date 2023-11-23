<?php 
session_start();
if($_POST){
    include "koneksi.php";
    
    $qry_get_produk=mysqli_query($conn,"select * from produk where id_produk = '".$_GET['id_produk']."'");
    $data_produk=mysqli_fetch_array($qry_get_produk);
    $_SESSION['cart'][]=array(
        'id_produk'=>$data_produk['id_produk'],
        'nama_produk'=>$data_produk['nama_produk'],
        'qty'=>$_POST['beli']
    );
}
header('location: keranjang.php?id_produk='.$_GET['id_produk']);
// session_start();
//     if($_POST){
//         include "koneksi.php";
        
//         // $qry_get_buku=mysqli_query($conn,"select * from buku where id_buku= ".$_GET['id_buku']);
//         // $dt_buku=mysqli_fetch_array($qry_get_buku);
//         // $_SESSION['cart'][]=array(
//         //     'id_buku'=>$dt_buku['id_buku'],
//         //     'nama_buku'=>$dt_buku['nama_buku'],
//         //     'qty'=>$_POST['jumlah_pinjam']

//         $qry_get_produk=mysqli_query($conn,"SELECT * FROM produk where id_produk = '".$_GET['id_produk']."'");
//         $data_produk=mysqli_fetch_array($qry_get_produk);
//         $qty = $_POST['beli'];
//         $_SESSION['cart'][]=array(
//             'id_produk'=>$data_produk['id_produk'],
//             'foto_produk'=>$data_produk['foto_produk'],
//             'nama_produk'=>$data_produk['nama_produk'],
//             'qty'=>$_POST['beli']
//         );
//     }
//     header('location: keranjang.php');
?>
