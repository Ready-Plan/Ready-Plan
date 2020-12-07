function formValidator(){
    var newPass = document.getElementById("newpass");
    var conPass = document.getElementById("conpass");
    if(!matching(newPass.value, conPass.value)) {
        alert("Passwords Do Not Match");
        newPass.focus();
        newPass.value = "";
        conPass.value = "";
        return false;
    }
}

function matching(str1, str2){
    if (str1 == str2) {
        return true;
    } else {
        return false;
    }
}