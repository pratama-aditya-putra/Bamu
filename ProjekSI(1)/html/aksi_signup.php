<?php
        include_once 'koneksi.php';
        $username = $_POST['username'];
        $password = $_POST['password'];
        $fName    = $_POST['fName'];
        $input   = mysqli_query($koneksi, "insert into user values ('$username', '$fName', '1', '$password', '0');");
        $input   = mysqli_query($koneksi, "insert into score values ('$username', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);");
        if($input)
        {
            echo "<script>alert('Username = $username berhasil ditambahkan. Silahkan kembali ke halaman Login untuk melanjutkan');
            window.location.href = 'login.php';</script>";
        }
        else
        {
            echo "<h2>Gagal menambahkan data</h2>";
            echo "<a href ='signup.php'>Kembali</a>";
        }
?>