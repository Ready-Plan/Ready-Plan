<?php
include "./scripts/dbConnect.php";

$username = "jkyle109";
$query = "SELECT `flashcards` FROM `userssdo` WHERE `username`='$username' LIMIT 1";
$res = mysqli_query($mySQL, $query);
if (!$res) {
    printf("Error: %s\n", mysqli_error($mySQL));
    exit();
}
if ($row = mysqli_fetch_array($res)) {
    $flashcards = json_decode($row[0], true);
    // var_dump($flashcards);
}
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
    <title>readyPlan - Flashcards</title>
    <link rel="stylesheet" href="./styles/index.css">
    <link rel="stylesheet" href="./styles/flashcards.css">
</head>

<body class="outer">
    <nav class="navbar navbar-expand-md navbar-light bg-dark border" id="top-nav">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="./">
            <img src="./img/lightlogo.png" height="30" class="d-inline-block align-top" alt="">
        </a>
        <a class="d-block d-md-none" href="./profile.php">
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
                        <a href="./weekplanner.php" class="list-group-item list-group-item-action p-3 pl-4 pr-4">
                            <div class="d-flex w-100 justify-content-start align-items-center">
                                <span class="material-icons">today</span>
                                <span class="pl-1"> Week Planner</span>
                            </div>
                        </a>
                        <a href="./todoList.php" class="list-group-item list-group-item-action p-3 pl-4 pr-4">
                            <div class="d-flex w-100 justify-content-start align-items-center">
                                <span class="material-icons">assignment_turned_in</span>
                                <span class="pl-1"> To-Do List</span>
                            </div>
                        </a>
                        <a href="./contacts.php" class="list-group-item list-group-item-action p-3 pl-4 pr-4">
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
                        <a href="./profile.php" class="list-group-item list-group-item-action p-3 pl-4 pr-4">
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
            <a class="d-none d-md-block" href="./profile.php">
                <img src="./img/replace.jpg" class=" rounded-circle img-thumbnail ml-auto" alt="..." width="50" height="50" alt="" loading="lazy">
            </a>
        </div>
    </nav>
    <div class="container-fluid outer">
        <div class="row flex-grow-1">
            <div id="sidebar-container" class="sidebar-expanded d-none d-md-block border p-0 sidebar">
                <div class="outer">
                    <a href="./flashcards.php" class="list-group-item list-group-item-action p-3 pl-4 pr-4 active">
                        <div class="d-flex w-100 justify-content-start align-items-center">
                            <span class="material-icons pl-1 pr-1">style</span>
                            <h4 class="pl-1 menu-collapsed pr-3"> Flashcards</h4>
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
                                    <a href="./weekplanner.php" class="list-group-item list-group-item-action p-3 pl-4 pr-4">
                                        <div class="d-flex w-100 justify-content-start align-items-center">
                                            <span class="material-icons">today</span>
                                            <span class="pl-1 menu-collapsed"> Week Planner</span>
                                        </div>
                                    </a>
                                    <a href="./todoList.php" class="list-group-item list-group-item-action p-3 pl-4 pr-4">
                                        <div class="d-flex w-100 justify-content-start align-items-center">
                                            <span class="material-icons">assignment_turned_in</span>
                                            <span class="pl-1 menu-collapsed"> To-Do List</span>
                                        </div>
                                    </a>
                                    <a href="./contacts.php" class="list-group-item list-group-item-action p-3 pl-4 pr-4">
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
                                    <a href="./profile.php" class="list-group-item list-group-item-action p-3 pl-4 pr-4">
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

            <!-- Collections -->
            <div class="col-md-2 col-12 border p-0">
                <div class="outer">
                    <div class="pt-2">
                        <h4 class="text-center">Collections</h4>
                        <hr>
                    </div>
                    <div class="row flex-grow-1 w-100">
                        <div class="col">
                            <div class="idk p-0 overflow-auto border-bottom">
                                <ul class="nav nav-pills flex-column mb-3" id="pills-tab" role="tablist">
                                    <?php
                                    $collectionName = $flashcards[0]["name"];
                                    echo <<<CARD
                                                <li class="nav-item" role="presentation">
                                                    <a class="nav-link active ml-2 mr-2" data-toggle="pill" href="#pills-0" role="tab">$collectionName</a>
                                                </li>
                                            CARD;
                                    for ($x = 1; $x < count($flashcards); $x++) {
                                        $collectionName = $flashcards[$x]["name"];

                                        echo  <<<CARD
                                                    <li class="nav-item" role="presentation">
                                                        <a class="nav-link ml-2 mr-2" data-toggle="pill" href="#pills-$x" role="tab">$collectionName</a>
                                                    </li>
                                                CARD;
                                    }
                                    ?>

                                    <!-- <li class="nav-item" role="presentation">
                                            <a class="nav-link active ml-2 mr-2" data-toggle="pill" href="#pills-CPS109" role="tab">CPS109</a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link ml-2 mr-2" data-toggle="pill" href="#pills-CPS213" role="tab">CPS213</a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link ml-2 mr-2" data-toggle="pill" href="#pills-MTH310" role="tab">MTH310</a>
                                        </li> -->
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Collection Button -->
                    <div>
                        <!-- Add Button -->
                        <div class="row justify-content-around p-2">
                            <div class="col-auto">
                                <button type="button" class="btn btn-dark " data-toggle="modal" data-target="#collectionModal">
                                    Add Collection
                                </button>
                            </div>
                        </div>
                        <!-- Collection Modal -->
                        <div class="modal fade" id="collectionModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="collectionModal" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="staticBackdropLabel">CPS109</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="./scripts/addCollection.php" method="post">
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label for="collectionName">Collection Name: </label>
                                                <input type="text" name="name" class="form-control" placeholder="Enter collection name...">
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
                $collectionName = $flashcards[0]["name"];
                $collectionCards = $flashcards[0]["cards"];
                $x = 0;
                echo <<<CARD
                            <div class="tab-pane fade show active outer" id="pills-$x" role="tabpanel">
                                <div class="outer">
                                    <div>
                                        <h4 class="text-center">$collectionName Cards</h4>
                                        <hr>
                                    </div>
                                    <div class="outer">
                                        <div class="col p-0 iii">
                                            <!-- Collapse -->
                                            <div class="idk overflow-auto">
                                                <div class="accordion" id="accordion-$x">
                        CARD;
                for ($y = 0; $y < count($collectionCards); $y++) {
                    $q = $collectionCards[$y]["question"];
                    $a = $collectionCards[$y]["answer"];
                    echo  <<<CARD
                                <div class="card">
                                    <div class="card-header" id="heading-$y">
                                        <h2 class="mb-0">
                                            <div class="btn btn-link btn-block text-left" data-toggle="collapse" data-target="#collapse-$y">
                                                $q
                                            </div>
                                        </h2>
                                    </div>

                                    <div id="collapse-$y" class="collapse" data-parent="#accordion-$x">
                                        <div class="card-body">
                                            $a
                                        </div>
                                    </div>
                                </div>
                            CARD;
                }
                echo <<<CARD
                                    </div>
                                </div>
                            </div>
                            <!-- Buttons -->
                            <div>
                                <!-- Button trigger modal -->
                                <div class="row justify-content-around pt-2 mw-100">
                                    <div class="col-2 mr-0 p-0">
                                        <button type="button" class="btn btn-dark " data-toggle="modal" data-target="#flashcardModal-$x">
                                            Start Quiz
                                        </button>
                                    </div>
                                    <div class="col-2 p-0">
                                        <button type="button" class="btn btn-dark " data-toggle="modal" data-target="#questionModal-$x">
                                            Add Card
                                        </button>
                                    </div>
                                </div>

                                <!-- Question Modal -->
                                <div class="modal fade" id="questionModal-$x" data-backdrop="static" data-keyboard="false" tabindex="-1">
                                    <div class="modal-dialog modal-dialog-centered modal-xl">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">$collectionName</h5>
                                                <button type="button" class="close" data-dismiss="modal">
                                                    <span>&times;</span>
                                                </button>
                                            </div>
                                            <form action="./scripts/addCard.php" method="post">
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <label>Question: </label>
                                                        <textarea class="form-control" name="question" rows="3"></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Answer: </label>
                                                        <textarea class="form-control" name="answer" rows="3"></textarea>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button name="name" value="$collectionName" type="submit" class="btn btn-dark" >Save</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- Quiz Modal -->
                                <div class="modal fade" id="flashcardModal-$x" data-backdrop="static" data-keyboard="false" tabindex="-1">
                                    <div class="modal-dialog modal-dialog-centered modal-xl">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">$collectionName</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span>&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body bg-dark">

                                                <div id="carouselControls-$x" class="carousel slide" data-interval="false">
                                                    <div class="carousel-inner">
                        CARD;
                $q = $collectionCards[0]["question"];
                $a = $collectionCards[0]["answer"];
                echo <<<CARD
                            <div class="carousel-item active">
                                <section class="flashcard-container container p-0 w-75">
                                    <div class="flashcard" onclick="flip()">
                                        <div class="front">$q</div>
                                        <div class="back">$a</div>
                                    </div>
                                </section>
                            </div>
                        CARD;
                for ($y = 1; $y < count($collectionCards); $y++) {
                    $q = $collectionCards[$y]["question"];
                    $a = $collectionCards[$y]["answer"];
                    echo <<<CARD
                                <div class="carousel-item">
                                    <section class="flashcard-container container p-0 w-75">
                                        <div class="flashcard" onclick="flip()">
                                            <div class="front">$q</div>
                                            <div class="back">$a</div>
                                        </div>
                                    </section>
                                </div>
                            CARD;
                }
                echo <<<CARD
                                                                    <a class="carousel-control-prev" href="#carouselControls-$x" role="button" data-slide="prev">
                                                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                                        <span class="sr-only">Previous</span>
                                                                    </a>
                                                                    <a class="carousel-control-next" href="#carouselControls-$x" role="button" data-slide="next">
                                                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                                        <span class="sr-only">Next</span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        CARD;
                for ($x = 1; $x < count($flashcards); $x++) {
                    $collectionName = $flashcards[$x]["name"];
                    $collectionCards = $flashcards[$x]["cards"];

                    echo <<<CARD
                                <div class="tab-pane fade show outer" id="pills-$x" role="tabpanel">
                                    <div class="outer">
                                        <div>
                                            <h4 class="text-center">$collectionName Cards</h4>
                                            <hr>
                                        </div>
                                        <div class="outer">
                                            <div class="col p-0 iii">
                                                <!-- Collapse -->
                                                <div class="idk overflow-auto">
                                                    <div class="accordion" id="accordion-$x">
                            CARD;
                    for ($y = 0; $y < count($collectionCards); $y++) {
                        $q = $collectionCards[$y]["question"];
                        $a = $collectionCards[$y]["answer"];
                        echo  <<<CARD
                                    <div class="card">
                                        <div class="card-header" id="heading-$y">
                                            <h2 class="mb-0">
                                                <div class="btn btn-link btn-block text-left" data-toggle="collapse" data-target="#collapse-$y">
                                                    $q
                                                </div>
                                            </h2>
                                        </div>

                                        <div id="collapse-$y" class="collapse" data-parent="#accordion-$x">
                                            <div class="card-body">
                                                $a
                                            </div>
                                        </div>
                                    </div>
                                CARD;
                    }
                    echo <<<CARD
                                        </div>
                                    </div>
                                </div>
                                <!-- Buttons -->
                                <div>
                                    <!-- Button trigger modal -->
                                    <div class="row justify-content-around pt-2 mw-100">
                                        <div class="col-2 mr-0 p-0">
                                            <button type="button" class="btn btn-dark " data-toggle="modal" data-target="#flashcardModal-$x">
                                                Start Quiz
                                            </button>
                                        </div>
                                        <div class="col-2 p-0">
                                            <button type="button" class="btn btn-dark " data-toggle="modal" data-target="#questionModal-$x">
                                                Add Card
                                            </button>
                                        </div>
                                    </div>

                                    <!-- Question Modal -->
                                    <div class="modal fade" id="questionModal-$x" data-backdrop="static" data-keyboard="false" tabindex="-1">
                                        <div class="modal-dialog modal-dialog-centered modal-xl">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">$collectionName</h5>
                                                    <button type="button" class="close" data-dismiss="modal">
                                                        <span>&times;</span>
                                                    </button>
                                                </div>
                                                <form action="./scripts/addCard.php" method="post">
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <label>Question: </label>
                                                            <textarea class="form-control" name="question" rows="3"></textarea>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Answer: </label>
                                                            <textarea class="form-control" name="answer" rows="3"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        <button name="name" value="$collectionName" type="submit" class="btn btn-dark" >Save</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Quiz Modal -->
                                    <div class="modal fade" id="flashcardModal-$x" data-backdrop="static" data-keyboard="false" tabindex="-1">
                                        <div class="modal-dialog modal-dialog-centered modal-xl">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">$collectionName</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span>&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body bg-dark">

                                                    <div id="carouselControls-$x" class="carousel slide" data-interval="false">
                                                        <div class="carousel-inner">
                            CARD;
                    $q = $collectionCards[0]["question"];
                    $a = $collectionCards[0]["answer"];
                    echo <<<CARD
                                <div class="carousel-item active">
                                    <section class="flashcard-container container p-0 w-75">
                                        <div class="flashcard" onclick="flip()">
                                            <div class="front">$q</div>
                                            <div class="back">$a</div>
                                        </div>
                                    </section>
                                </div>
                            CARD;
                    for ($y = 1; $y < count($collectionCards); $y++) {
                        $q = $collectionCards[$y]["question"];
                        $a = $collectionCards[$y]["answer"];
                        echo count($collectionCards);
                        echo <<<CARD
                                    <div class="carousel-item">
                                        <section class="flashcard-container container p-0 w-75">
                                            <div class="flashcard" onclick="flip()">
                                                <div class="front">$q</div>
                                                <div class="back">$a</div>
                                            </div>
                                        </section>
                                    </div>
                                CARD;
                    }
                    echo <<<CARD
                                                                        <a class="carousel-control-prev" href="#carouselControls-$x" role="button" data-slide="prev">
                                                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                                            <span class="sr-only">Previous</span>
                                                                        </a>
                                                                        <a class="carousel-control-next" href="#carouselControls-$x" role="button" data-slide="next">
                                                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                                            <span class="sr-only">Next</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            CARD;
                }
                ?>
                <!-- <div class="tab-pane fade show active outer" id="pills-CPS109" role="tabpanel">
                            <div class="outer">
                                <div>
                                    <h4 class="text-center">CPS109 Cards</h4>
                                    <hr>
                                </div>
                                <div class="outer">
                                    <div class="col p-0"> -->
                <!-- Collapse -->
                <!-- <div class="idk overflow-auto border-bottom">
                                            <div class="accordion" id="accordionExample">
                                                <div class="card">
                                                    <div class="card-header" id="heading-1">
                                                        <h2 class="mb-0">
                                                            <div class="btn btn-link btn-block text-left" data-toggle="collapse" data-target="#collapse-1" aria-expanded="true" aria-controls="collapse-1">
                                                                Who coded this page?
                                                            </div>
                                                        </h2>
                                                    </div>

                                                    <div id="collapse-1" class="collapse show" aria-labelledby="heading-1" data-parent="#accordionExample">
                                                        <div class="card-body">
                                                            Jonathan
                                                        </div>
                                                    </div>
                                                </div>



                                                <div class="card">
                                                    <div class="card-header" id="heading-1">
                                                        <h2 class="mb-0">
                                                            <div class="btn btn-link btn-block text-left" data-toggle="collapse" data-target="#collapse-1" aria-expanded="true" aria-controls="collapse-1">
                                                                Who coded this page?
                                                            </div>
                                                        </h2>
                                                    </div>

                                                    <div id="collapse-1" class="collapse show" aria-labelledby="heading-1" data-parent="#accordionExample">
                                                        <div class="card-body">
                                                            Jonathan
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header" id="heading-1">
                                                        <h2 class="mb-0">
                                                            <div class="btn btn-link btn-block text-left" data-toggle="collapse" data-target="#collapse-1" aria-expanded="true" aria-controls="collapse-1">
                                                                Who coded this page?
                                                            </div>
                                                        </h2>
                                                    </div>

                                                    <div id="collapse-1" class="collapse show" aria-labelledby="heading-1" data-parent="#accordionExample">
                                                        <div class="card-body">
                                                            Jonathan
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header" id="heading-1">
                                                        <h2 class="mb-0">
                                                            <div class="btn btn-link btn-block text-left" data-toggle="collapse" data-target="#collapse-1" aria-expanded="true" aria-controls="collapse-1">
                                                                Who coded this page?
                                                            </div>
                                                        </h2>
                                                    </div>

                                                    <div id="collapse-1" class="collapse show" aria-labelledby="heading-1" data-parent="#accordionExample">
                                                        <div class="card-body">
                                                            Jonathan
                                                        </div>
                                                    </div>
                                                </div>



                                                <div class="card">
                                                    <div class="card-header" id="heading-2">
                                                        <h2 class="mb-0">
                                                            <div class="btn btn-link btn-block text-left collapsed" data-toggle="collapse" data-target="#collapse-2" aria-expanded="true" aria-controls="collapse-2">
                                                                What is a for loop?
                                                            </div>
                                                        </h2>
                                                    </div>

                                                    <div id="collapse-2" class="collapse" aria-labelledby="heading-2" data-parent="#accordionExample">
                                                        <div class="card-body">
                                                            I don't know. You tell me.
                                                        </div>
                                                    </div>
                                                </div> -->
                <!-- </div>
                                        </div>
                                    </div> -->

                <!-- Buttons -->
                <!-- <div> -->
                <!-- Button trigger modal -->
                <!-- <div class="row justify-content-around pt-2 mw-100">
                                            <div class="col-2 mr-0 p-0">
                                                <button type="button" class="btn btn-dark " data-toggle="modal" data-target="#flashcardModal">
                                                    Start Quiz
                                                </button>
                                            </div>
                                            <div class="col-2 p-0">
                                                <button type="button" class="btn btn-dark " data-toggle="modal" data-target="#questionModal">
                                                    Add Card
                                                </button>
                                            </div>
                                        </div> -->

                <!-- Question Modal -->
                <!-- <div class="modal fade" id="questionModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="questionModal" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-xl">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="staticBackdropLabel">CPS109</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form>
                                                            <div class="form-group">
                                                                <label for="question">Question: </label>
                                                                <textarea class="form-control" id="question" rows="3"></textarea>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="answer">Answer: </label>
                                                                <textarea class="form-control" id="answer" rows="3"></textarea>
                                                            </div>
                                                        </form>

                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-dark" data-dismiss="modal">Save</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> -->

                <!-- Quiz Modal -->
                <!-- <div class="modal fade" id="flashcardModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="flashcardModal" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-xl">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="staticBackdropLabel">CPS109</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body bg-dark">

                                                        <div id="carouselExampleControls" class="carousel slide" data-interval="false">
                                                            <div class="carousel-inner">
                                                                <div class="carousel-item active">
                                                                    <section class="flashcard-container container p-0 w-75">
                                                                        <div class="flashcard" onclick="flip()">
                                                                            <div class="front">Who made this page?</div>
                                                                            <div class="back">Jonathan</div>
                                                                        </div>
                                                                    </section>
                                                                </div>
                                                                <div class="carousel-item">
                                                                    <img src="..." class="d-block w-100" alt="...">
                                                                </div>
                                                                <div class="carousel-item">
                                                                    <img src="..." class="d-block w-100" alt="...">
                                                                </div>
                                                            </div>
                                                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                                <span class="sr-only">Previous</span>
                                                            </a>
                                                            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                                <span class="sr-only">Next</span>
                                                            </a>
                                                        </div>


                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> -->
                <!-- </div>
                                </div>
                            </div>
                        </div> -->


                <div class="tab-pane fade" id="pills-CPS213" role="tabpanel">
                    <h3 class="text-center">CPS213 Cards</h3>
                    <hr>
                    <div class="accordion" id="accordionExample">
                        <div class="card">
                            <div class="card-header" id="heading-1">
                                <h2 class="mb-0">
                                    <div class="btn btn-link btn-block text-left" data-toggle="collapse" data-target="#collapse-1" aria-expanded="true" aria-controls="collapse-1">
                                        Who coded this page?
                                    </div>
                                </h2>
                            </div>

                            <div id="collapse-1" class="collapse show" aria-labelledby="heading-1" data-parent="#accordionExample">
                                <div class="card-body">
                                    Jonathan
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="heading-2">
                                <h2 class="mb-0">
                                    <div class="btn btn-link btn-block text-left collapsed" data-toggle="collapse" data-target="#collapse-2" aria-expanded="true" aria-controls="collapse-2">
                                        What is a for loop?
                                    </div>
                                </h2>
                            </div>

                            <div id="collapse-2" class="collapse" aria-labelledby="heading-2" data-parent="#accordionExample">
                                <div class="card-body">
                                    I don't know. You tell me.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-MTH310" role="tabpanel">
                    <h3 class="text-center">MTH310 Cards</h3>
                    <hr>
                    <div class="accordion" id="accordionExample">
                        <div class="card">
                            <div class="card-header" id="heading-1">
                                <h2 class="mb-0">
                                    <div class="btn btn-link btn-block text-left" data-toggle="collapse" data-target="#collapse-1" aria-expanded="true" aria-controls="collapse-1">
                                        Who coded this page?
                                    </div>
                                </h2>
                            </div>

                            <div id="collapse-1" class="collapse show" aria-labelledby="heading-1" data-parent="#accordionExample">
                                <div class="card-body">
                                    Jonathan
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="heading-2">
                                <h2 class="mb-0">
                                    <div class="btn btn-link btn-block text-left collapsed" data-toggle="collapse" data-target="#collapse-2" aria-expanded="true" aria-controls="collapse-2">
                                        What is a for loop?
                                    </div>
                                </h2>
                            </div>

                            <div id="collapse-2" class="collapse" aria-labelledby="heading-2" data-parent="#accordionExample">
                                <div class="card-body">
                                    I don't know. You tell me.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <!-- <div>
                footer
            </div> -->

    </div>
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="./scripts/index.js"></script>
    <script src="./scripts/flashcards.js"></script>
</body>

</html>