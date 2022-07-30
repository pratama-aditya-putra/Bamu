 <?php 
include('koneksi.php');
$username = "69pratama69" ;                   
$output = "select * from score where IDuser = '$username';";
                    $query = mysqli_query($koneksi, $output);
                    while($d2 = mysqli_fetch_array($query)){
                        for($i=1;$i<=15;$i++){
                            if($i % 3 == 1){
                                echo "<tr>";
                            }
                            $temp = $d2['soal'.$i];
                            //echo "<td> <button type='button' class='btn btn-dark' style='width:100%;' onclick='window.location.href =\"$i.php\"  '>$i</button> </td>";
                            echo "$temp";
                            if($i % 3 == 0){
                                echo "</tr>";
                            }
                        }
                    }
                ?>