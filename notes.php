<?php
include "./scripts/dbConnect.php";

// if (isset($_POST["notebookName3"])) {
//     echo $_POST["notebookName3"];
// }

// echo "Connected successfully <br>";
$username = "jkyle109";
$query = "SELECT `notes` FROM `userssdo` WHERE `username`='$username' LIMIT 1";
$res = mysqli_query($mySQL, $query);
if (!$res) {
    printf("Error: %s\n", mysqli_error($mySQL));
    exit();
}
if ($row = mysqli_fetch_array($res)) {
    $notebooks = json_decode($row[0], true);
    // var_dump($notebooks);
    // $fname = $row["fname"];
    // $lname = $row["lname"];
    // $username = $row["username"];
    // $email = $row["email"];
    // $password = $row["password"];
    // $jsondata = $row["userdata"];
    // $userdata = json_decode($row["userdata"], true);
    // $notebooks = $userdata["notes"];
    // for($x = 0; $x < count($notebooks); $x++) {

    // Append 
    // echo $notebookName . $notebookText;
    // }
    // $notebookName = $userdata["notes"][0][0];
    // $notebookText = $userdata["notes"][0][1];
    // echo implode(" ",$tts);
    // $notes = $userdata["notes"];
    // echo count($notes);
    // for($x = 0; $x < $arrlength; $x++) {
    //     echo $cars[$x];
    //     echo "<br>";
    // }

    // echo "First Name: " . $fname;
}
// echo $res["userdata"]
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous" />
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <title>readyPlan</title>
    <link rel="stylesheet" href="./styles/index.css">
    <link rel="stylesheet" href="./styles/flashcards.css">
    <script type="text/javascript">
        // function save(name, index) {
        //     let eleId = "notebook-" + index;
        //     let newtext = document.getElementById(eleId).value;
        //     console.log(newtext);
        // }
        // let somethin = '';
        // console.log(somethin);
    </script>

<body class="outer">
    <nav class="navbar navbar-expand-md navbar-light bg-dark border" id="top-nav">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">
            <img src="./img/lightlogo.png" height="30" class="d-inline-block align-top" alt="">
        </a>
        <a class="d-block d-md-none" href="#">
            <img src="./img/replace.jpg" class=" rounded-circle img-thumbnail ml-auto" alt="..." width="50" height="50" alt="" loading="lazy">
        </a>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ml-auto">

                <!-- This menu is hidden in bigger devices with d-sm-none. 
                    The sidebar isn't proper for smaller screens imo, so this dropdown menu can keep all the useful sidebar itens exclusively for smaller screens  -->
                <li class="nav-item d-sm-block d-md-none">
                    <ul class="list-group flex-column mb-3 pt-3">
                        <a href="./gradeCalc.html" class="list-group-item list-group-item-action p-3 pl-4 pr-4">
                            <div class="d-flex justify-content-start align-items-center">
                                <span class="material-icons">calculate</span>
                                <span class="pl-1"> Grade Calculator</span>
                            </div>
                        </a>
                        <a href="./calendar.html" class="list-group-item list-group-item-action p-3 pl-4 pr-4">
                            <div class="d-flex w-100 justify-content-start align-items-center">
                                <span class="material-icons">today</span>
                                <span class="pl-1"> Calendar</span>
                            </div>
                        </a>
                        <a href="./todoList.html" class="list-group-item list-group-item-action p-3 pl-4 pr-4">
                            <div class="d-flex w-100 justify-content-start align-items-center">
                                <span class="material-icons">assignment_turned_in</span>
                                <span class="pl-1"> To-Do List</span>
                            </div>
                        </a>
                        <a href="./contacts.html" class="list-group-item list-group-item-action p-3 pl-4 pr-4">
                            <div class="d-flex w-100 justify-content-start align-items-center">
                                <span class="material-icons">contact_phone</span>
                                <span class="pl-1"> Contact List</span>
                            </div>
                        </a>
                        <a href="./notes.php" class="list-group-item list-group-item-action p-3 pl-4 pr-4">
                            <div class="d-flex w-100 justify-content-start align-items-center">
                                <span class="material-icons">description</span>
                                <span class="pl-1"> Notes</span>
                            </div>
                        </a>
                        <a href="./flashcards.php" class="list-group-item list-group-item-action p-3 pl-4 pr-4">
                            <div class="d-flex w-100 justify-content-start align-items-center">
                                <span class="material-icons">style</span>
                                <span class="pl-1"> Flashcards</span>
                            </div>
                        </a>
                        <a href="./canvas.html" class="list-group-item list-group-item-action p-3 pl-4 pr-4">
                            <div class="d-flex w-100 justify-content-start align-items-center">
                                <span class="material-icons">gesture</span>
                                <span class="pl-1"> Sketch Book</span>
                            </div>
                        </a>
                        <a href="./resources.html" class="list-group-item list-group-item-action p-3 pl-4 pr-4">
                            <div class="d-flex w-100 justify-content-start align-items-center">
                                <span class="material-icons">emoji_objects</span>
                                <span class="pl-1"> Resourses</span>
                            </div>
                        </a>
                        <a href="./profile.html" class="list-group-item list-group-item-action p-3 pl-4 pr-4">
                            <div class="d-flex w-100 justify-content-start align-items-center">
                                <span class="material-icons">account_circle</span>
                                <span class="pl-1"> Profile</span>
                            </div>
                        </a>
                        <a href="./aboutUs.html" class="list-group-item list-group-item-action p-3 pl-4 pr-4">
                            <div class="d-flex w-100 justify-content-start align-items-center">
                                <span class="material-icons">help</span>
                                <span class="pl-1"> About Us</span>
                            </div>
                        </a>
                    </ul>
                </li>
                <!-- Smaller devices menu END -->
            </ul>
            <a class="d-none d-md-block" href="./profile.html">
                <img src="./img/replace.jpg" class=" rounded-circle img-thumbnail ml-auto" alt="..." width="50" height="50" alt="" loading="lazy">
            </a>
        </div>
    </nav>
    <div class="container-fluid outer">
        <div class="row flex-grow-1">
            <div id="sidebar-container" class="sidebar-expanded d-none d-md-block border p-0 sidebar">
                <div class="outer">
                    <a href="./notes.php" class="list-group-item list-group-item-action p-3 pl-4 pr-4 active">
                        <div class="d-flex w-100 justify-content-start align-items-center">
                            <span class="material-icons pl-1 pr-1">description</span>
                            <h4 class="pl-3 menu-collapsed pr-5"> Notes</h4>
                        </div>
                    </a>
                    <div class="row flex-grow-1 w-100">
                        <div class="col">
                            <div class="idk p-0 overflow-auto border-bottom">
                                <ul class="list-group flex-column overflow-auto">
                                    <a href="#" data-toggle="sidebar-colapse" class="list-group-item list-group-item-action pl-4 pr-4">
                                        <div class="d-flex w-100 justify-content-start align-items-center">
                                            <span id="toggleId" class="material-icons">arrow_back</span>
                                            <span class="pl-1 menu-collapsed"> Collapse</span>
                                        </div>
                                    </a>
                                    <a href="./gradeCalc.html" class="list-group-item list-group-item-action p-3 pl-4 pr-4">
                                        <div class="d-flex justify-content-start align-items-center">
                                            <span class="material-icons">calculate</span>
                                            <span class="pl-1 menu-collapsed"> Grade Calculator</span>
                                        </div>
                                    </a>
                                    <a href="./calendar.html" class="list-group-item list-group-item-action p-3 pl-4 pr-4">
                                        <div class="d-flex w-100 justify-content-start align-items-center">
                                            <span class="material-icons">today</span>
                                            <span class="pl-1 menu-collapsed"> Calendar</span>
                                        </div>
                                    </a>
                                    <a href="./todoList.html" class="list-group-item list-group-item-action p-3 pl-4 pr-4">
                                        <div class="d-flex w-100 justify-content-start align-items-center">
                                            <span class="material-icons">assignment_turned_in</span>
                                            <span class="pl-1 menu-collapsed"> To-Do List</span>
                                        </div>
                                    </a>
                                    <a href="./contacts.html" class="list-group-item list-group-item-action p-3 pl-4 pr-4">
                                        <div class="d-flex w-100 justify-content-start align-items-center">
                                            <span class="material-icons">contact_phone</span>
                                            <span class="pl-1 menu-collapsed"> Contact List</span>
                                        </div>
                                    </a>
                                    <a href="./notes.php" class="list-group-item list-group-item-action p-3 pl-4 pr-4">
                                        <div class="d-flex w-100 justify-content-start align-items-center">
                                            <span class="material-icons">description</span>
                                            <span class="pl-1 menu-collapsed"> Notes</span>
                                        </div>
                                    </a>
                                    <a href="./flashcards.php" class="list-group-item list-group-item-action p-3 pl-4 pr-4">
                                        <div class="d-flex w-100 justify-content-start align-items-center">
                                            <span class="material-icons">style</span>
                                            <span class="pl-1 menu-collapsed"> Flashcards</span>
                                        </div>
                                    </a>
                                    <a href="./canvas.html" class="list-group-item list-group-item-action p-3 pl-4 pr-4">
                                        <div class="d-flex w-100 justify-content-start align-items-center">
                                            <span class="material-icons">gesture</span>
                                            <span class="pl-1 menu-collapsed"> Sketch Book</span>
                                        </div>
                                    </a>
                                    <a href="./resources.html" class="list-group-item list-group-item-action p-3 pl-4 pr-4">
                                        <div class="d-flex w-100 justify-content-start align-items-center">
                                            <span class="material-icons">emoji_objects</span>
                                            <span class="pl-1 menu-collapsed"> Resourses</span>
                                        </div>
                                    </a>
                                    <a href="./profile.html" class="list-group-item list-group-item-action p-3 pl-4 pr-4">
                                        <div class="d-flex w-100 justify-content-start align-items-center">
                                            <span class="material-icons">account_circle</span>
                                            <span class="pl-1 menu-collapsed"> Profile</span>
                                        </div>
                                    </a>
                                    <a href="./aboutUs.html" class="list-group-item list-group-item-action p-3 pl-4 pr-4">
                                        <div class="d-flex w-100 justify-content-start align-items-center">
                                            <span class="material-icons">help</span>
                                            <span class="pl-1 menu-collapsed"> About Us</span>
                                        </div>
                                    </a>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Notebooks -->
            <div class="col-md-2 col-12 border p-0">
                <div class="outer">
                    <div class="pt-2">
                        <h4 class="text-center">Notebooks</h4>
                        <hr>
                    </div>
                    <div class="row flex-grow-1 w-100">
                        <div class="col">
                            <div class="idk p-0 overflow-auto border-bottom">

                                <ul class="nav nav-pills flex-column mb-3" id="pills-tab" role="tablist">
                                    <?php
                                    $notebookName = $notebooks[0]["name"];
                                    echo <<<CARD
                                            <li class="nav-item" role="presentation">
                                                <a class="nav-link active ml-2 mr-2" data-toggle="pill" href="#pills-0" role="tab">$notebookName</a>
                                            </li>
                                            CARD;
                                    for ($x = 1; $x < count($notebooks); $x++) {
                                        $notebookName = $notebooks[$x]["name"];
                                        // $notebookText = $userdata["notes"][$x]["text"];
                                        // Append 
                                        // echo $notebookName . $notebookText;
                                        echo  <<<CARD
                                                <li class="nav-item" role="presentation">
                                                    <a class="nav-link ml-2 mr-2" data-toggle="pill" href="#pills-$x" role="tab">$notebookName</a>
                                                </li>
                                                CARD;
                                    }
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Notebook Button -->
                    <div>
                        <!-- Add Button -->
                        <div class="row justify-content-around p-2">
                            <div class="col-auto">
                                <button type="button" class="btn btn-dark " data-toggle="modal" data-target="#collectionModal">
                                    Add Notebook
                                </button>
                            </div>
                        </div>
                        <!-- Notebook Modal -->
                        <div class="modal fade" id="collectionModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="collectionModal" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="./scripts/updateNotebooks.php" method="post">
                                        <div class="modal-body">

                                            <div class="form-group">
                                                <label for="collectionName">Notebook Name: </label>
                                                <input type="text" name="name" class="form-control" placeholder="Enter notebook name...">
                                            </div>


                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-dark">Save</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Cards -->
            <div class="tab-content col-md col-12 p-2 border" id="pills-tabContent">
                <?php
                $notebookName = $notebooks[0]["name"];
                $notebookText = $notebooks[0]["text"];
                echo <<<CARD
                        <div class="tab-pane fade show active outer" id="pills-0" role="tabpanel">
                            <div class="outer">
                                <div>
                                    <h4 class="text-center">$notebookName</h4>
                                    <hr>
                                </div>
                            
                                    <form action="./scripts/updateNote.php" method="post" class="outer">
                                        <div class="col p-0">
                                            <!-- Collapse -->
                                            <textarea name="text" class="form-control h-100" id="notebook-0" placeholder="Type here...">$notebookText</textarea>

                                        </div>
                                        <!-- Buttons -->
                                        <div>
                                            <div class="row justify-content-right pt-2 mw-100 ">
                                                <div class="col-2 ">
                                                    <button name="name" value="$notebookName" type="button " class="btn btn-dark ">
                                                        Save
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                            </div>
                        </div>
                        CARD;
                for ($x = 1; $x < count($notebooks); $x++) {
                    $notebookName = $notebooks[$x]["name"];
                    $notebookText = $notebooks[$x]["text"];
                    echo  <<<CARD
                            <div class="tab-pane fade show outer" id="pills-$x" role="tabpanel">
                                <div class="outer">
                                    <div>
                                        <h4 class="text-center">$notebookName</h4>
                                        <hr>
                                    </div>
                                
                                        <form action="./scripts/updateNote.php" method="post" class="outer">
                                            <div class="col p-0">
                                                <!-- Collapse -->
                                                <textarea name="text" class="form-control h-100" id="notebook-$x" placeholder="Type here...">$notebookText</textarea>

                                            </div>
                                            <!-- Buttons -->
                                            <div>
                                                <div class="row justify-content-right pt-2 mw-100 ">
                                                    <div class="col-2 ">
                                                        <button name="name" value="$notebookName" type="button " class="btn btn-dark ">
                                                            Save
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                </div>
                            </div>
                            CARD;
                }
                ?>
            </div>
        </div>


    </div>
    <!-- <div>
                footer
            </div> -->

    </div>
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js " integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj " crossorigin="anonymous "></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js " integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx " crossorigin="anonymous "></script>
    <script src="./scripts/index.js "></script>
    <script src="./scripts/notes.js"></script>
</body>

</html>