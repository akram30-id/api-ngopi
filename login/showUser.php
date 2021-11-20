<?php 

    require "../config/connect.php";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $response = array();
        $nama = $_POST['nama'];
        // $foto = $_POST['foto'];

        $cek = "SELECT * FROM user WHERE nama='$nama'";
        $result = mysqli_fetch_array(mysqli_query($con, $cek));

        if(isset($result)){
            $response['value'] = 1;
            $response['message'] = "Login";
            $response['nama'] = $result['nama'];
            echo json_encode($response);
        } else {
            $response['value'] = 0;
            $response['message'] = "Tidak Login";
            echo json_encode($response);
    } 
    
  }

?>