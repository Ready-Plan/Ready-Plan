<?php
    echo "updatePlanner";
?>
<?php
include "dbConnect.php";

for ($i = 0; $i<7; $i++) {
    $text = $_POST["$i"];
    $planner[$i] = escape($mySQL,$text);
}
var_dump($planner);

$username = "jkyle109";

$newdata = json_encode($planner);
var_dump($newdata);

$query = "UPDATE `userssdo` SET `planner`='$newdata' WHERE `username`='$username' LIMIT 1";
$update = mysqli_query($mySQL, $query);
if($update)
{
    mysqli_close($mySQL);
    header("location:../weekplanner.php");
    exit();
}
else {
    echo mysqli_error($mySQL);
}  
?>