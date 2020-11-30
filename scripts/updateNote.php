<?php
include "dbConnect.php";

$text = $_POST["text"];
$text = mysqli_real_escape_string($mySQL,$text);
$text = str_replace("\\'", "''", "$text");

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
            $name = mysqli_real_escape_string($mySQL,$name);
            $name = str_replace("\\'", "''", "$name");
            $notebooks[$x]["name"] = $name;
            $notebooks[$x]["text"] = $text;
        }
        else {
            $newname = mysqli_real_escape_string($mySQL,$notebooks[$x]["name"]);
            $notebooks[$x]["name"] = str_replace("\\'", "''", "$newname");
            $newtext = mysqli_real_escape_string($mySQL,$notebooks[$x]["text"]);
            $notebooks[$x]["text"] = str_replace("\\'", "''", "$newtext");
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
<!-- [{"name":"notebookName1","text":"notebookText1"},{"name":"notebookName2","text":"notebookText2"},{"name":"notebookName3","text":"notebookText3"}] -->
<!-- {"to-do":[{"task":"task","state":"state"}],"notes":[{"name":"notebookName1","text":"notebookText1"},{"name":"notebookName2","text":"notebookText2"},{"name":"notebookName3","text":"notebookText3"}],"contacts":[{"name":"contactName","email":"contactEmail","phone":"contactNumber","pfp":null}],"flashcards":[{"name":"collectionName","cards":[{"question":"1+1","answer":"2"}]}]} -->

<!-- userdata:
{"to-do":[{"task":"task","state":"state"}],"notes":[{"name":"notebookName1","text":"notebookText1"},{"name":"notebookName2","text":"notebookText2"},{"name":"notebookName3","text":"notebookText3"}],"contacts":[{"name":"contactName","email":"contactEmail","phone":"contactNumber","pfp":null}],"flashcards":[{"name":"collectionName","cards":[{"question":"1+1","answer":"2"}]}]}

to-do:
[{"task":"task1","state":"checked"},{"task":"task2","state":""},{"task":"task3","state":"checked"}]

flashcards:
[{"name":"collectionName1","cards":[{"question":"1+1","answer":"2"},{"question":"2+2","answer":"4"},{"question":"4+4","answer":"8"}]},{"name":"collectionName2","cards":[{"question":"1+1+1","answer":"3"},{"question":"3+3+3","answer":"9"},{"question":"9+9+9","answer":"27"}]},{"name":"collectionName3","cards":[{"question":"1+1+1+1","answer":"4"},{"question":"4+4+4+4","answer":"16"},{"question":"16+16+16+16","answer":"64"}]}]

contacts:
[{"name":"contactName1","email":"contactEmail1","phone":"contactNumber1","pfp":null},
{"name":"contactName2","email":"contactEmail2","phone":"contactNumber2","pfp":null},
{"name":"contactName3","email":"contactEmail3","phone":"contactNumber3","pfp":null}]

notes:
[{"name":"notebookName1","text":"notebookText1"},{"name":"notebookName2","text":"notebookText2"},{"name":"notebookName3","text":"notebookText3"}] -->
