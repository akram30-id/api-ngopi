<?php 

    require '../config/connect.php';

    $response = array();

    $sql = mysqli_query($con, "SELECT a.*, b.kecamatan FROM bahan_baku a LEFT JOIN branch b on a.id_branch = b.id");
    while($a = mysqli_fetch_array($sql)){
        $b['id'] = $a['id'];
        $b['id_branch'] = $a['id_branch'];
        $b['nama_barang'] = $a['nama_barang'];
        $b['jumlah'] = $a['jumlah'];
        $b['satuan'] = $a['satuan'];
        $b['harga_beli'] = $a['harga_beli'];
        $b['harga_satuan'] = $a['harga_satuan'];
        $b['tgl'] = $a['tgl'];
        $b['kecamatan'] = $a['kecamatan'];

        array_push($response, $b);
    }

    echo json_encode($response);

?>