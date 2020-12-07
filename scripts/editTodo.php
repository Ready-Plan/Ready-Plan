<?php
    echo "editTodo";
?>
<?php
include "dbConnect.php";

$type = $_POST["type"];
$task = $_POST["task"];
$state = $_POST["state"];

var_dump($state);

$username = "jkyle109";

$query = "SELECT `to-do` FROM `userssdo` WHERE `username`='$username' LIMIT 1";
$res = mysqli_query($mySQL, $query);
if (!$res) {
    printf("Error: %s\n", mysqli_error($mySQL));
    exit();
}
if ($row = mysqli_fetch_array($res)) {
    // $yy = '[{"task":"task1","state":"checked"},{"task":"task2","state":""},{"task":"task3","state":"checked"}]';
    // $tasks = json_decode($yy, true);
    $tasks = json_decode($row[0], true);

    if ($type == "add") {
        $newTask["task"] = escape($mySQL,$task);
        $newTask["state"] = escape($mySQL,$state);
        array_push($tasks, $newTask);
        for ($x = 0; $x < count($tasks); $x++) {
            $tasks[$x]["task"] = escape($mySQL,$tasks[$x]["task"]);
        }
    }
    elseif ($type == "delete") {
        for ($x = 0; $x < count($tasks); $x++) {
            $curTask = $tasks[$x]["task"];
            if ($curTask == $task) {
                unset($tasks[$x]);
            }
            else {
                $tasks[$x]["task"] = escape($mySQL,$tasks[$x]["task"]);
            }
        }
        $tasks = array_values($tasks);
    }
    elseif ($type == "state") {
        for ($x = 0; $x < count($tasks); $x++) {
            $curTask = $tasks[$x]["task"];
            $curState = $tasks[$x]["state"];
            if ($curTask == $task) {
                if ($curState == "") {
                    $tasks[$x]["state"] = "checked";
                }
                else {
                    $tasks[$x]["state"] = "";
                }
            }
            $tasks[$x]["task"] = escape($mySQL,$tasks[$x]["task"]);
        }
    }

    $newdata = json_encode($tasks);
    var_dump($newdata);

    $query = "UPDATE `userssdo` SET `to-do`='$newdata' WHERE `username`='$username' LIMIT 1";
    $update = mysqli_query($mySQL, $query);
    if($update)
    {
        mysqli_close($mySQL);
        header("location:../todoList.php");
        exit();
    }
    else {
        echo mysqli_error($mySQL);
    }
}
?>
