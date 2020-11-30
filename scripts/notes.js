function save(name, index) {
    let id = "notebook-" + index;
    let value = document.getElementById(id).value;
    console.log(value);
    window.location.href = "./scripts/updateNote.php?type=notes?name=" + name + "?value=" + value;
}