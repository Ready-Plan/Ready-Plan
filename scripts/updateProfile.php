<?php
    echo "updateProfile";
?>
<?php
// include "dbConnect.php";

// $question = $_POST["question"];
// $newCard["question"] = escape($mySQL,$question);
// $answer = $_POST["answer"];
// $newCard["answer"] = escape($mySQL,$answer);
// // var_dump($newCard);

// $name = $_POST["name"];

// $username = "jkyle109";

// $query = "SELECT `flashcards` FROM `userssdo` WHERE `username`='$username' LIMIT 1";
// $res = mysqli_query($mySQL, $query);
// if (!$res) {
//     printf("Error: %s\n", mysqli_error($mySQL));
//     exit();
// }

// if ($row = mysqli_fetch_array($res)) {
//     // $yy = '[{"name":"collectionName1","cards":[{"question":"1+1","answer":"2"},{"question":"2+2","answer":"4"},{"question":"4+4","answer":"8"}]},{"name":"collectionName2","cards":[{"question":"1+1+1","answer":"3"},{"question":"3+3+3","answer":"9"},{"question":"9+9+9","answer":"27"}]},{"name":"collectionName3","cards":[{"question":"1+1+1+1","answer":"4"},{"question":"4+4+4+4","answer":"16"},{"question":"16+16+16+16","answer":"64"}]}]';
//     // $flashcards = json_decode($yy, true);
//     $flashcards = json_decode($row[0], true);

//     for ($x = 0; $x < count($flashcards); $x++) {
//         if ($flashcards[$x]["name"] == $name) {
//             array_push($flashcards[$x]["cards"], $newCard);
//         }
//         $flashcards[$x]["name"] = escape($mySQL,$flashcards[$x]["name"]);

//         for ($y = 0; $y < count($flashcards[$x]["cards"]); $y++) {
//             $flashcards[$x]["cards"][$y]["question"] = escape($mySQL,$flashcards[$x]["cards"][$y]["question"]);
//             $flashcards[$x]["cards"][$y]["answer"] = escape($mySQL,$flashcards[$x]["cards"][$y]["answer"]);
//         }
//     }

//     $newdata = json_encode($flashcards);
//     var_dump($newdata);

//     $query = "UPDATE `userssdo` SET `flashcards`='$newdata' WHERE `username`='$username' LIMIT 1";
//     $update = mysqli_query($mySQL, $query);
//     if($update)
//     {
//         mysqli_close($mySQL);
//         header("location:../flashcards.php");
//         exit();
//     }
//     else {
//         echo mysqli_error($mySQL);
//     }
// }
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
