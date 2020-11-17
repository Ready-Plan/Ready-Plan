var count=4;
$("#add-row").click(function(){
    $("#table-body").append(addNewRow(count));
    count++;
});

function addNewRow(count){
    var newrow=
    '<tr>'+
        '<th scope="row">'+count+'</th>'+
        '<td><input type="number" class="form-control" name="grade[]"></td>'+
        '<td><input type="number" class="form-control" name="weight[]"></td>'+
    '</tr>';
return newrow;
}