<?php 

    require "../config/connect.php";

    if($_SERVER['REQUEST_METHOD'] == "POST") {
        $response = array();
        $email = $_POST['email'];
        $password = md5($_POST['password']);

        $cek = "SELECT * FROM user WHERE email='$email' and password ='$password'";
        $result = mysqli_fetch_array(mysqli_query($con, $cek));

        if(isset($result)){
            $response['value'] = 1;
            $response['message'] = "login berhasil";
            $response['username'] = $result['username'];
            $response['level'] = $result['level'];
            $response['nama'] = $result['nama'];
            $response['id'] = $result['id'];
            echo json_encode($response);
        } else {
            $response['value'] = 0;
            $response['message'] = "Login Gagal";
            echo json_encode($response);
        }
    }

?>