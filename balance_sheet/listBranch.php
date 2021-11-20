<?php 

    require '../config/connect.php';

    $response = array();

    $sql = mysqli_query($con, "SELECT a.*, b.kecamatan, b.image FROM balance_sheet a LEFT JOIN branch b on a.id_branch = b.id");
    while($a = mysqli_fetch_array($sql)){
        $b['id'] = $a['id'];
        $b['id_branch'] = $a['id_branch'];
        $b['tgl'] = $a['tgl'];
        $b['pemasukan'] = $a['pemasukan'];
        $b['pengeluaran'] = $a['pengeluaran'];
        $b['modal'] = $a['modal'];
        $b['kecamatan'] = $a['kecamatan'];
        $b['image'] = $a['image'];

        array_push($response, $b);
    }

    echo json_encode($response);

?>