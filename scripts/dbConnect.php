<?php
// $servername = "localhost";
// $username = "root";
// $password = "EuSkYq19NAkjAyTM";
// $database = "demosdo";

$servername = "sql206.epizy.com";
$username = "epiz_27378709";
$password = "Qb5UavFhtbu8xjw";
$database = "epiz_27378709_SDO";

// Create connection
$mySQL = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$mySQL) {
    die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully <br>";

function escape ($mySQL, $string){
    $string = mysqli_real_escape_string($mySQL,$string);
    $string = str_replace("\\'", "''", "$string");
    return $string;
}
?>
<!--

to-do:
[{"task":"task1","state":"checked"},{"task":"task2","state":""},{"task":"task3","state":"checked"}]

flashcards:
[{"name":"collectionName1","cards":[{"question":"1+1","answer":"2"},{"question":"2+2","answer":"4"},{"question":"4+4","answer":"8"}]},{"name":"collectionName2","cards":[{"question":"1+1+1","answer":"3"},{"question":"3+3+3","answer":"9"},{"question":"9+9+9","answer":"27"}]},{"name":"collectionName3","cards":[{"question":"1+1+1+1","answer":"4"},{"question":"4+4+4+4","answer":"16"},{"question":"16+16+16+16","answer":"64"}]}]

contacts:
[{"name":"contactName1","email":"contactEmail1","phone":"contactNumber1","pfp":null},
{"name":"contactName2","email":"contactEmail2","phone":"contactNumber2","pfp":null},
{"name":"contactName3","email":"contactEmail3","phone":"contactNumber3","pfp":null}]

notes:
[{"name":"notebookName1","text":"notebookText1"},{"name":"notebookName2","text":"notebookText2"},{"name":"notebookName3","text":"notebookText3"}]

planner:
["Sunday Plans", "Monday Plans", "Tuesday Plans", "Wednesday Plans", "Thursday Plans", "Friday Plans", "Saturday Plans"]

-->