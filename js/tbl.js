document.addEventListener('mousemove',createTbl());

var i = 0;
function createTbl(){
    var table = document.getElementById("myTable");
    var row = table.insertRow(0);
    var cell1 = row.insertCell(0);
    var cell2 = row.insertCell(1);
    var cell3 = row.insertCell(2);
    i++;
    cell1.innerHTML = i;
    cell2.innerHTML = "NEW CELL"+i;
    cell3.innerHTML = "Waaaaa";
}