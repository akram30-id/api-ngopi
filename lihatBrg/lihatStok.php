<?php 

    require '../config/connect.php';

    $response = array();

    $sql = mysqli_query($con, "SELECT a.*, b.nama_brg FROM brg_stok a LEFT JOIN brg_masuk b on a.id_brg = b.id ");
    while($a = mysqli_fetch_array($sql)){
        $b['id'] = $a['id'];
        $b['id_brg'] = $a['id_brg'];
        $b['nama_brg'] = $a['nama_brg'];
        $b['tgl_masuk'] = $a['tgl_masuk'];
        $b['jumlah'] = $a['jumlah'];
        $b['harga'] = $a['harga'];
        $b['satuan'] = $a['satuan'];
        $b['image'] = $a['image'];
        $b['nama_supplier'] = $a['nama_supplier'];

        array_push($response, $b);
    }

    echo json_encode($response);

?>