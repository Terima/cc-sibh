<?php
if(!empty($_POST["login"])){
require_once("koneksi.php");
session_name("verify");
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST")
{
$admin = $pdo_conn->prepare('SELECT * FROM admin WHERE username = :username and password= :password');
$admin->execute(array(
                  ':username' => $_POST['username'],
                  ':password' => $_POST['password']
                  ));

$row = $admin->fetch(PDO::FETCH_ASSOC);
if(empty($row['username']))
{
    echo '<script type="text/javascript">'; 
            echo 'alert("Login gagal !");'; 
            echo 'window.location.href = "masuk.php";';
            echo '</script>';
}
else 
{
        $_SESSION['login_user'] = $_POST['username'];
        header('location: indexadmin.php');
}
}
}

?>