var i = 0;

document.getElementById('butt').addEventListener('click', () => {
    var table = document.getElementById("myTable");
    var row = table.insertRow(0);
    var cell1 = row.insertCell(0);
    var cell2 = row.insertCell(1);
    var cell3 = row.insertCell(2);
    var cell4 = row.insertCell(3);
    i++;
    cell1.innerHTML = i;
    cell2.innerHTML = "Roberto A. Velasco Munguía";
    cell3.innerHTML = "Waaaaa";
    cell4.innerHTML = "deomeof";
});