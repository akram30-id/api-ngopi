<?php 

    require "../config/connect.php";

    if($_SERVER['REQUEST_METHOD'] == "POST") {
        $response = array();
        $username = $_POST['username'];
        $password = md5($_POST['password']);

        $cek = "SELECT * FROM user WHERE username='$username' and password ='$password'";
        $result = mysqli_fetch_array(mysqli_query($con, $cek));

        if(isset($result)){
            $response['value'] = 1;
            $response['message'] = "Login Berhasil\n\nHalo $username";
            $response['username'] = $result['username'];
            $response['level'] = $result['level'];
            $response['nama'] = $result['nama'];
            $response['id'] = $result['id'];
            echo json_encode($response);
        } else {
            $response['value'] = 0;
            $response['message'] = "Login Gagal\nUsername dan password tidak cocok";
            echo json_encode($response);
        }
    }

?>