<?php
echo "addContact";
?>
<?php
include "dbConnect.php";

$name = $_POST["name"];
$newContact["name"] = escape($mySQL,$name);
$email = $_POST["email"];
$newContact["email"] = escape($mySQL,$email);
$phone = $_POST["phone"];
$newContact["phone"] = escape($mySQL,$phone);
// $pfp = $_POST["pfp"];
$pfp = null;
$newContact["pfp"] = $pfp;


// // Initialize message variable
// $msg = "";

// // If upload button is clicked ...
// $path = ini_get('upload_tmp_dir');
// echo $path;
// if (isset($_POST['upload'])) {
//     // Get image name
//     $image = time() . '-' . $_FILES['image']['name'];
//     // Get text
//     // $image_text = mysqli_real_escape_string($db, $_POST['image_text']);

//     // image file directory
//     $target = 'C:\xampp\htdocs\cps530\SDO\images\\'.basename($image);
//     echo basename($target);

//     if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
//         $msg = "Image uploaded successfully";
//     }else{
//         $msg = "Failed to upload image";
//     }
    
// }
// echo $msg;

$username = "jkyle109";

$query = "SELECT `contacts` FROM `userssdo` WHERE `username`='$username' LIMIT 1";
$res = mysqli_query($mySQL, $query);
if (!$res) {
    printf("Error: %s\n", mysqli_error($mySQL));
    exit();
}
if ($row = mysqli_fetch_array($res)) {
    $contacts = json_decode($row[0], true);
    array_push($contacts, $newContact);
    for ($x = 0; $x < count($contacts); $x++) {
        $contacts[$x]["name"] = escape($mySQL,$contacts[$x]["name"]);
        $contacts[$x]["email"] = escape($mySQL,$contacts[$x]["email"]);
        $contacts[$x]["phone"] = escape($mySQL,$contacts[$x]["phone"]);
    }

    $newdata = json_encode($contacts);
    var_dump($newdata);

    $query = "UPDATE `userssdo` SET `contacts`='$newdata' WHERE `username`='$username' LIMIT 1";
    $update = mysqli_query($mySQL, $query);
    if ($update) {
        mysqli_close($mySQL);
        header("location:../contacts.php");
        exit();
    } else {
        echo mysqli_error($mySQL);
    }
}
?>