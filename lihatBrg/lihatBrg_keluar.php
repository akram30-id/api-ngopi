<?php 

    require '../config/connect.php';

    $response = array();

    $sql = mysqli_query($con, "SELECT a.*, b.nama_brg FROM brg_keluar a LEFT JOIN brg_stok b on a.id_brg = b.id ");
    while($a = mysqli_fetch_array($sql)){
        $b['id'] = $a['id'];
        $b['id_brg'] = $a['id_brg'];
        $b['nama_brg'] = $a['nama_brg'];
        $b['tgl_keluar'] = $a['tgl_keluar'];
        $b['jumlah'] = $a['jumlah'];
        $b['satuan'] = $a['satuan'];

        array_push($response, $b);
    }

    echo json_encode($response);

?>