<?php
include "dbConnect.php";
$name = $_POST["name"];
$name = mysqli_real_escape_string($mySQL,$name);
$newBook["name"] = str_replace("\\'", "''", "$name");
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
        $newname = mysqli_real_escape_string($mySQL,$notebooks[$x]["name"]);
        $notebooks[$x]["name"] = str_replace("\\'", "''", "$newname");
        $newtext = mysqli_real_escape_string($mySQL,$notebooks[$x]["text"]);
        $notebooks[$x]["text"] = str_replace("\\'", "''", "$newtext");
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