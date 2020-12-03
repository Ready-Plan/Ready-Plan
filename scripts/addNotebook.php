<?php
    echo "addNotebook";
?>
<?php
include "dbConnect.php";

$name = $_POST["name"];

$newBook["name"] = escape($mySQL,$name);
$newBook["text"] = "";
var_dump($newBook);

$username = "jkyle109";

$query = "SELECT `notes` FROM `userssdo` WHERE `username`='$username' LIMIT 1";
$res = mysqli_query($mySQL, $query);
if (!$res) {
    printf("Error: %s\n", mysqli_error($mySQL));
    exit();
}

if ($row = mysqli_fetch_array($res)) {
    $notebooks = json_decode($row[0], true);
    array_push($notebooks, $newBook);

    for ($x = 0; $x < count($notebooks); $x++) {
        $notebooks[$x]["name"] = escape($mySQL,$notebooks[$x]["name"]);
        $notebooks[$x]["text"] = escape($mySQL,$notebooks[$x]["text"]);
    }

    $newdata = json_encode($notebooks);
    var_dump($newdata);

    $query = "UPDATE `userssdo` SET `notes`='$newdata' WHERE `username`='$username' LIMIT 1";
    $update = mysqli_query($mySQL, $query);
    if($update)
    {
        mysqli_close($mySQL);
        header("location:../notes.php");
        exit();
    }
    else {
        echo mysqli_error($mySQL);
    }
}
?>