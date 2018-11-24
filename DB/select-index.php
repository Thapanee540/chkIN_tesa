<?php
    include("conn/conn.php");
    
    $sql = "SELECT ti.ID, ti.Team_ID, ti.NameThai, ti.SizeShirt,tr.Team_Name,tr.University FROM team_register tr INNER JOIN team_info ti ON tr.Team_ID = ti.Team_ID where '$user_id' = ti.ID";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    // echo "I am select-index : ".$row['TeamName']." : ".$row['University'];
	
    ?>