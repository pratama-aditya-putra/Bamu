<?php
    session_start();
    include('koneksi.php');
    $i=0; $j=0;
    $temp = $_POST['temp'];
    $temp1 = "";
    $temp2 = "";
    $temp3 = "";
    for($i=0;$i<strlen($temp);$i++){
        if($temp[$i] == " "){ $j++; continue;}
        if($j == 0) $temp1 .= $temp[$i];
        else if($j == 1) $temp2 .= $temp[$i];
        else $temp3 .= $temp[$i];
    }
var_dump($temp1);
var_dump($temp2);
var_dump($temp3);
if($temp1 == "user"){
    $output = "DELETE FROM score WHERE IDuser ='$temp3';";
    $query = mysqli_query($koneksi, $output);
}
    $output = "DELETE FROM $temp1 WHERE $temp2 ='$temp3';";
    $query = mysqli_query($koneksi, $output);
    if($query){
            echo "<div style='margin-left:38%; margin-top:15%;  text-align:center; width:300px; height:200px; border:solid; border-radius:10px;'>";
            echo "<form action='admin.php' method='post'  >";
            echo "<h3 style='margin-top:15%;  text-align:center;'>Data berhasil dihapus</h3> <br/>";
            echo "<button type='submit' value='$temp1' name='daftar' id='daftar' style='margin-top:15%;  text-align:center; background-color: #21689C; font-size:18px; border-radius:5px;'>Kembali</script>";
            echo "<form>";
            echo "</div>";
    }
    else{
            echo "<script>alert('Gagal dihapus')</script>";
            echo "<script>window.location='admin.php'</script>";
    }
?>