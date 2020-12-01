// Add Row

var count = 4;
$("#add-row").click(function () {
    $("#table-body").append(addNewRow(count));
    count++;
});

function addNewRow(count) {
    var newrow =
        "<tr>" +
        '<th scope="row">' +
        count +
        "</th>" +
        '<td><input type="number" class="form-control" name="grade[]"></td>' +
        '<td><input type="number" class="form-control" name="weight[]"></td>' +
        "</tr>";
    return newrow;
}

// Calc Grade

$("#calculate").click(function () {
    var grades = document.getElementsByName("grade[]");
    var weights = document.getElementsByName("weight[]");

    var gradesArr = [];
    var weightsArr = [];

    var result = 0;
    var goodInput = true;
    var count = 0;

    //gets value of inputs and stores them into an array
    for (let i = 0; i < grades.length; i++) {
        gradesArr.push(grades[i].value);
        weightsArr.push(weights[i].value);
    }

    for (let i = 0; i < gradesArr.length; i++) {
        // if there are any missing grades / weights
        if (
            (gradesArr[i] != "" && weightsArr[i] == "") ||
            (gradesArr[i] == "" && weightsArr[i] != "")
        ) {
            alert("Missing Grade or Weight");
            goodInput = false;
        }
        // only adds to result if there is grade and weight
        if (gradesArr[i] != "" && weightsArr[i] != "") {
            result += parseInt(gradesArr[i]) * parseInt(weightsArr[i]);
            count += parseInt(weightsArr[i]);
        }
    }

    // calculates the and sets the final result
    if (goodInput && count > 0) {
        result = result / count;
        $("#result").val(result);
    }
});
