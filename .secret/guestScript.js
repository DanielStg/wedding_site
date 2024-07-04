var i;
let table = document.getElementById("guestsTable");
let row;
let c1;
let c2;

fetch("guestList.php")
  .then((res) => res.json())
  .then((data) => {
    for (i = 0; i < data.length; i++) {
      row = table.insertRow(-1);
      c1 = row.insertCell(0);
      c2 = row.insertCell(1);

      c1.innerText = data[i][0];
      c2.innerText = data[i][1];
    }
  });
