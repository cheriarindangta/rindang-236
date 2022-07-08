var selectedRow = null;
function onFormSubmit(e) {
    event.preventDefault();
    var formData = readFormData();
    if (selectedRow == null) {
        insertNewRecord(formData);
    } else {
        updateRecord(formData);
    }
    resetForm();
}

function readFormData() {
    var formData = {};
    formData["rating"] = document.getElementById("rating").value;
    formData["bandnama"] = document.getElementById("bandnama").value;
    formData["judul"] = document.getElementById("judul").value;
    formData["tahun"] = document.getElementById("tahun").value;
    return formData;
}

//insert data
function insertNewRecord(data) {
    var table = document.getElementById("storeList").getElementsByTagName('tbody')[0];
    var newRow = table.insertRow(table.length);
    var cell1 = newRow.insertCell(0);
    cell1.innerHTML = data.rating;
    var cell2 = newRow.insertCell(1);
    cell2.innerHTML = data.bandnama;
    var cell3 = newRow.insertCell(2);
    cell3.innerHTML = data.judul;
    var cell4 = newRow.insertCell(3);
    cell4.innerHTML = data.tahun;
    var cell5 = newRow.insertCell(4);
    cell5.innerHTML = '<button onClick="onEdit(this)">Edit</button> <button onClick="onDelete(this)">Delete</button>'
}

//edit data
function onEdit(td) {
    selectedRow = td.parentElement.parentElement;
    document.getElementById('rating').value = selectedRow.cells[0].innerHTML;
    document.getElementById('bandnama').value = selectedRow.cells[1].innerHTML;
    document.getElementById('judul').value = selectedRow.cells[2].innerHTML;
    document.getElementById('tahun').value = selectedRow.cells[3].innerHTML;
}

function updateRecord(formData){
    selectedRow.cells[0].innerHTML = formData.rating;
    selectedRow.cells[1].innerHTML = formData.bandnama;
    selectedRow.cells[2].innerHTML = formData.judul;
    selectedRow.cells[3].innerHTML = formData.tahun;
}

//delete
function onDelete(td){
    if(confirm('Do you really want to delete this review?')){
        row = td.parentElement.parentElement;
        document.getElementById('storeList').deleteRow(row.rowIndex);
    }
    resetForm();
}

//reset
function resetForm(){
    document.getElementById('rating').value = '';
    document.getElementById('bandnama').value = '';
    document.getElementById('judul').value = '';
    document.getElementById('tahun').value = '';
}

$(document).ready(function () {
    $("#searching").on("keyup", function () {
        var value = $(this).val().toLowerCase();
        $("#myTable tr").filter(function () {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
});

//sort movie
$('body').on('click', '#btnSort', function () {
    console.log("called");
    $('#myTable tr').sort(function (a, b) {
        return $(b).find('#bandnama').text().toLowerCase() < $(a).find('#bandnama').text().toLowerCase() ? 1 : -1
    }).appendTo("#myTable")
})

//sort rating
$('body').on('click', '#btnSortrate', function () {
    console.log("called");
    $('#myTable tr').sort(function (a, b) {
        return $(b).find('#rating').text().toLowerCase() < $(a).find('#rating').text().toLowerCase() ? 1 : -1
    }).appendTo("#myTable")
})