<?php 

    require '../config/connect.php';

    $response = array();

    $sql = mysqli_query($con, "SELECT a.*, b.kategori FROM menu a LEFT JOIN kategori_menu b on a.id_kat = b.id");
    while($a = mysqli_fetch_array($sql)){
        $b['id'] = $a['id'];
        $b['id_kat'] = $a['id_kat'];
        $b['nama'] = $a['nama'];
        $b['stok'] = $a['stok'];
        $b['harga'] = $a['harga'];
        $b['deskripsi'] = $a['deskripsi'];
        $b['kategori'] = $a['kategori'];
        $b['foto'] = $a['foto'];

        array_push($response, $b);
    }

    echo json_encode($response);
