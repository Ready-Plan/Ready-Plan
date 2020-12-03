<?php
    echo "addCollection";
?>
<?php
include "dbConnect.php";

$name = $_POST["name"];

$newCollection["name"] = escape($mySQL,$name);
$newCollection["cards"] = [];
var_dump($newCollection);

$username = "jkyle109";

$query = "SELECT `flashcards` FROM `userssdo` WHERE `username`='$username' LIMIT 1";
$res = mysqli_query($mySQL, $query);
if (!$res) {
    printf("Error: %s\n", mysqli_error($mySQL));
    exit();
}

if ($row = mysqli_fetch_array($res)) {
    $flashcards = json_decode($row[0], true);
    array_push($flashcards, $newCollection);
    for ($x = 0; $x < count($flashcards); $x++) {
        $flashcards[$x]["name"] = escape($mySQL,$flashcards[$x]["name"]);

        for ($y = 0; $y < count($flashcards[$x]["cards"]); $y++) {
            $flashcards[$x]["cards"][$y]["question"] = escape($mySQL,$flashcards[$x]["cards"][$y]["question"]);
            $flashcards[$x]["cards"][$y]["answer"] = escape($mySQL,$flashcards[$x]["cards"][$y]["answer"]);
        }
    }

    $newdata = json_encode($flashcards);
    var_dump($newdata);

    $query = "UPDATE `userssdo` SET `flashcards`='$newdata' WHERE `username`='$username' LIMIT 1";
    $update = mysqli_query($mySQL, $query);
    if($update)
    {
        mysqli_close($mySQL);
        header("location:../flashcards.php");
        exit();
    }
    else {
        echo mysqli_error($mySQL);
    }
}
?>