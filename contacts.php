<?php
include "./scripts/dbConnect.php";

$username = "jkyle109";
$query = "SELECT `contacts` FROM `userssdo` WHERE `username`='$username' LIMIT 1";
$res = mysqli_query($mySQL, $query);
if (!$res) {
    printf("Error: %s\n", mysqli_error($mySQL));
    exit();
}
if ($row = mysqli_fetch_array($res)) {
    $contacts = json_decode($row[0], true);
    var_dump($contacts);
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
    <title>readyPlan - Contact List</title>
    <link rel="stylesheet" href="./styles/index.css">
    <link rel="stylesheet" href="./styles/contacts.css">
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
                        <a href="./canvas2.html" class="list-group-item list-group-item-action p-3 pl-4 pr-4">
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
                        <a href="./aboutUs2.html" class="list-group-item list-group-item-action p-3 pl-4 pr-4">
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
    <!-- NavBar END -->
    <div class="container-fluid outer">
        <div class="row flex-grow-1">
            <div id="sidebar-container" class="sidebar-expanded d-none d-md-block border p-0 sidebar">
                <div class="outer">
                    <a href="./contacts.php" class="list-group-item list-group-item-action p-3 pl-4 pr-4 active">
                        <div class="d-flex w-100 justify-content-start align-items-center">
                            <span class="material-icons pl-1 pr-1">contact_phone</span>
                            <h4 class="pl-1 menu-collapsed pr-3"> Contact List</h4>
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
                                    <a href="./canvas2.html" class="list-group-item list-group-item-action p-3 pl-4 pr-4">
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
                                    <a href="./aboutUs2.html" class="list-group-item list-group-item-action p-3 pl-4 pr-4">
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

            <!-- Contacts -->
            <div class="col-md col-12 border p-0 mh-100" style="background-color: #d9e2e5;">
                <div class="container-fluid justify-content-center">
                    <div class="container pt-2 col">
                        <div class="container">
                            <div class="row justify-content-md-center mt-3">
                                <div class="col-6">
                                    <h1 style="color: #262d13;"><em style="color: #556e07;">Contact</em> List</h1>
                                </div>
                                <div style="text-align: right;" class="col-6">
                                    <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#exampleModal">
                                        <i class="material-icons">add</i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="container">
                            <table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th></th>
                                        <th>

                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    for ($x = 0; $x < count($contacts); $x++) {
                                        $name = $contacts[$x]["name"];
                                        $email = $contacts[$x]["email"];
                                        $phone = $contacts[$x]["phone"];
                                        echo <<<CARD
                                            <tr>
                                                <td class="name"><img class="rounded-circle img-fluid pfp" src="./img/replace.jpg" alt="$name's profile"> $name</td>
                                                <td>$email</td>
                                                <td>$phone</td>
                                                <td>
                                                    <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#delete1">
                                                        <i class="material-icons">create</i>
                                                    </button>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-dark">
                                                        <i class="material-icons">delete</i>
                                                    </button>
                                                </td>
                                            </tr>
CARD;
                                    }
                                    ?>
                                    <!-- <tr>
                                        <td class="name"><img class="rounded-circle img-fluid pfp" src="./img/replace.jpg" alt="Dylan profile"> Dylan</td>
                                        <td>email1@ryerson.ca</td>
                                        <td>647-123-4567</td>
                                        <td>
                                            <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#delete1">
                                                <i class="material-icons">create</i>
                                            </button>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-dark">
                                                <i class="material-icons">delete</i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="name"><img class="rounded-circle img-fluid pfp" src="./img/janice.jpg" alt="Janice profile"> Janice</td>
                                        <td>j17wong@ryerson.ca</td>
                                        <td>647-234-5678</td>
                                        <td>
                                            <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#delete2">
                                                <i class="material-icons">create</i>
                                            </button>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-dark">
                                                <i class="material-icons">delete</i></td>
                                        </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="name"><img class="rounded-circle img-fluid pfp" src="./img/replace.jpg" alt="Jonathan profile"> Jonathan</td>
                                        <td>email2@ryerson.ca</td>
                                        <td>647-345-6789</td>
                                        <td>
                                            <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#delete3">
                                                <i class="material-icons">create</i>
                                            </button>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-dark">
                                                <i class="material-icons">delete</i></td>
                                        </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="name"><img class="rounded-circle img-fluid pfp" src="./img/replace.jpg" alt="Maryam profile"> Maryam</td>
                                        <td>email3@ryerson.ca</td>
                                        <td>647-456-7890</td>
                                        <td>
                                            <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#delete4">
                                                <i class="material-icons">create</i>
                                            </button>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-dark">
                                                <i class="material-icons">delete</i></td>
                                        </button>
                                        </td>
                                    </tr> -->
                                </tbody>
                            </table>
                        </div>

                        <!-- MODAL ADD CONTACT -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">New contact</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="./scripts/addContact.php" method="post" enctype="multipart/form-data">
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label for="name">Name:</label>
                                                <input name="name" type="text" class="form-control" id="fname" placeholder="Enter first name" required="required">
                                            </div>
                                            <div class="form-group">
                                                <label for="email">Email:</label>
                                                <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" required="required">
                                            </div>
                                            <div class="form-group">
                                                <label for="phone">Phone:</label>
                                                <input name="phone" type="text" class="form-control" id="phone" placeholder="Enter phone number">
                                            </div>
                                            <div class="form-group">
                                                <label for="image">Upload an image:</label>
                                                <input name="pfp" type="file" class="form-control-file" id="image">
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button name="submit" type="submit" class="btn btn-dark">Add contact</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!--MODAL EDIT CONTACT-->
                        <!-- Modal -->
                        <div class="modal fade" id="delete1" tabindex="-1" role="dialog" aria-labelledby="delete1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="delete1">Edit contact</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form>
                                            <div class="form-group">
                                                <label for="name">Name:</label>
                                                <input type="text" class="form-control" id="name" placeholder="Dylan" required="required">
                                            </div>
                                            <div class="form-group">
                                                <label for="email">Email:</label>
                                                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="email1@ryerson.ca" required="required">
                                            </div>
                                            <div class="form-group">
                                                <label for="phone">Phone:</label>
                                                <input type="text" class="form-control" id="phone" placeholder="647-123-4567">
                                            </div>
                                            <div class="form-group">
                                                <label for="image">Upload an image:</label>
                                                <input type="file" class="form-control-file" id="image">
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-dark">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
        <script src="./scripts/index.js"></script>
</body>

</html>