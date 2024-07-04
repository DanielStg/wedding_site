document.addEventListener("DOMContentLoaded", function () {
  fetch("../php/guests.json")
    .then((response) => response.json())
    .then((data) => {
      const dataDisplay = document.getElementById("guestsData");
      console.log(data[0].guest.diet);

      var table = document.getElementById("guestsTable");

      for (let i = 0; i < data.length; i++) {
        var row = table.insertRow();
        var nameCell = row.insertCell(0);
        var eventCell = row.insertCell(1);
        var dietCell = row.insertCell(2);

        nameCell.innerHTML = data[i].guest.fname;
        eventCell.innerHTML = data[i].guest.events;
        dietCell.innerHTML = data[i].guest.diet;
      }
    })
    .catch((error) => console.error("Error fetching JSON data:", error));
});
