<?php 

    require '../config/connect.php';

    $response = array();

    $sql = mysqli_query($con, "SELECT a.*, b.nama FROM pesanan a LEFT JOIN user b on a.id_pg = b.id");
    while($a = mysqli_fetch_array($sql)){
        $b['id'] = $a['id'];
        $b['id_pg'] = $a['id_pg'];
        $b['pemesan'] = $a['pemesan'];
        $b['barang'] = $a['barang'];
        $b['jumlah'] = $a['jumlah'];
        $b['harga'] = $a['harga'];
        $b['tgl'] = $a['tgl'];
        $b['alamat'] = $a['alamat'];
        $b['telp'] = $a['telp'];
        $b['invoice'] = $a['invoice'];
        $b['status'] = $a['status'];
        $b['nama'] = $a['nama'];
        $b['total'] = $a['total'];

        array_push($response, $b);
    }

    echo json_encode($response);

?>