const guestNames = [];
const guestDiets = [];
var i;

fetch("guestList.php")
  .then((res) => res.json())
  .then((data) => {
    //console.log(data[1][1]);

    for (i = 0; i < data.length; i++) {
      guestNames.push(data[i][0]);
      guestDiets.push(data[i][1]);
    }

    console.log(guestNames);
    console.log(guestDiets);
  });
