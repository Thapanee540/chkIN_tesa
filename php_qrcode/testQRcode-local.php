<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "plearnja_tgr2019";

$conn = mysqli_connect($servername, $username ,$password ,$dbname);
mysqli_set_charset($conn, "utf8");

if(!$conn){
    die("connection failed : ".mysqli_connect_errno());
}

$data = "http://172.27.105.84/PI/checkin/php_qrcode/index.php?data=";
$size = "&size=7&level=Q";
$loca = "http://172.27.105.84/PI/checkin/index.php?userID=";

    
    // $result = mysqli_query($conn, $sql);
    // $row = mysqli_fetch_array($result);
$name = array();
    $sql = "SELECT ID FROM team_info";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        //echo "id: " . $row["ID"]. "<br>";
        array_push($name,$data.$loca.$row['ID'].$size);
    }
} else {
    echo "0 results";
}
$conn->close();
// print_r($name) . "<br>";

    ini_set('max_execution_time', 300); //300 seconds = 5 minutes
for($i=0 ; $i < count($name) ; $i++){
    echo "i = ".$i."<br>";
    $p = file_get_contents($name[$i]);
}

    // close cURL resource, and free up system resources
   // curl_close($ch);
?>