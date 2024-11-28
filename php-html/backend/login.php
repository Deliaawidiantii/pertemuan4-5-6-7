<?php
if(isset($_POST["email"]) && isset($_POST["password"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Bisa tambahkan validasi password di sini
    if($email === "admin@admin.com" && $password === "admin") {
    header("location:../dashboard.php");
    exit();

    } else {
        echo "<p>email atau password salah!</p>";
    }
}
?>
