
        
        <?php
include("db/db.php");

if(isset($_POST['c'])){
    $ci = $_POST['c'];
    $query = "SELECT * FROM states WHERE country_id = $ci";
    $result = $con->query($query);

    $output = '<option value="" disabled selected>-Select state-</option>';
    while($row = $result->fetch_assoc()){
        $state .= '<option value="'.$row['id'].'">'.$row['name'].'</option>';
    }
    echo $state;
}
?>
