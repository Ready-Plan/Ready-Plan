<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous" />
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <title>readyPlan - Profile</title>
    <link rel="stylesheet" href="./styles/index.css">
    <link rel="stylesheet" href="./styles/profile.css">
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
                    <a href="./profile.php" class="list-group-item list-group-item-action p-3 pl-4 pr-4 active">
                        <div class="d-flex w-100 justify-content-start align-items-center">
                            <span class="material-icons pl-1 pr-1">account_circle</span>
                            <h4 class="pl-3 menu-collapsed pr-5"> Profile</h4>
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
            <!-- Profile -->
            <div class="col-md col-12 border p-0 mh-100" id="profile-container">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-sm-2 pt-2">
                            <img src="./img/replace.jpg" alt="profile picture" class="img-thumbnail" />
                        </div>
                        <div class="col-sm-9">
                            <h1 style="color: #262d13;"><em style="color: #556e07;">John Doe's</em> Profile</h1>
                        </div>
                    </div>
                    <form action="" method="POST">
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Username</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="username" id="username" value="JohnDoe123">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">First Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="fname" id="fname" value="John">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Last Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="lname" id="lname" value="Doe">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">E-Mail</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="email" id="email" value="johndoe123@email.com">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Current Password</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" name="curpass" id="curpass">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">New Password</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" name="newpass" id="newpass">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Confirm Password</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" name="conpass" id="conpass">
                            </div>
                        </div>
                        <input class="btn btn-dark col-auto" type="submit" value="Save Changes">
                    </form>
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
</body>

</html>