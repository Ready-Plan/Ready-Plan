<?php
    echo "updateNote";
?>
<?php
include "dbConnect.php";

$text = $_POST["text"];
$text = escape($mySQL,$text);

$name = $_POST["name"];

$username = "jkyle109";

$query = "SELECT `notes` FROM `userssdo` WHERE `username`='$username' LIMIT 1";
$res = mysqli_query($mySQL, $query);
if (!$res) {
    printf("Error: %s\n", mysqli_error($mySQL));
    exit();
}
if ($row = mysqli_fetch_array($res)) {
    // $yy = '[{"name":"notebookName1","text":"notebookText1"},{"name":"notebookName2","text":"notebookText2"},{"name":"notebookName3","text":"notebookText3"}]';
    // $notebooks = json_decode($yy, true);
    $notebooks = json_decode($row[0], true);
    // $userdata = json_decode($row["userdata"], true);
    // $userdata = '[{"name":"notebookName1","text":"notebookText1"},{"name":"notebookName2","text":"notebookText2"},{"name":"notebookName3","text":"notebookText3"}]'
    // $userdata = json_decode($userdata, true);
    // $notebooks = $userdata["notes"];
    for ($x = 0; $x < count($notebooks); $x++) {
        if ($notebooks[$x]["name"] == $name) {
            $name = escape($mySQL,$name);
            $notebooks[$x]["name"] = $name;
            $notebooks[$x]["text"] = $text;
        }
        else {
            $notebooks[$x]["name"] = escape($mySQL,$notebooks[$x]["name"]);
            $notebooks[$x]["text"] = escape($mySQL,$notebooks[$x]["text"]);
        }
    }
    // $userdata["notes"] = $notebooks;
    $newdata = json_encode($notebooks);
    // $text = nl2br($text);
    
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
    // $res = mysqli_query();
    // echo $text . " " . $name;
}
?>
