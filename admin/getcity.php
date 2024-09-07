<?php
include("db/db.php");

if(isset($_POST['s'])){
    $state_id = $_POST['s'];
    $query = "SELECT * FROM cities WHERE state_id = $state_id";
    $result = $con->query($query);

    $output = '<option value="" disabled selected>-Select City-</option>';
    while($row = $result->fetch_assoc()){
        $city .= '<option value="'.$row['id'].'">'.$row['name'].'</option>';
    }
    echo $city;
}
?>
