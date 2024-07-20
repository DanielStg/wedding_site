import {
  getDatabase,
  ref,
  child,
  push,
  update,
  set,
} from "https://www.gstatic.com/firebasejs/10.12.4/firebase-database.js";
import { initializeApp } from "https://www.gstatic.com/firebasejs/10.12.4/firebase-app.js";

const firebaseConfig = {
  // ...
  // The value of `databaseURL` depends on the location of the database
  databaseURL: "https://wedding-32aed-default-rtdb.firebaseio.com/",
};

// Initialize Firebase
const app = initializeApp(firebaseConfig);

// Initialize Realtime Database and get a reference to the service
const database = getDatabase(app);

function writeUserData(name, diet) {
  const db = getDatabase();
  set(ref(db, "GuestList/" + name), {
    Diet: diet,
  });
}

const EL_formRSVP = document.querySelector("#form_rsvp");

//Add an event listener for when the form submits
EL_formRSVP.addEventListener("submit", (ev) => {
  //Prevents default form submit
  ev.preventDefault();

  //Fetch the data from the form action (submit)
  fetch(EL_formRSVP.action, {
    method: "POST", //POST method
    body: new FormData(EL_formRSVP),
  })
    .then((res) => res.json())
    .then((data) => {
      //Gets the res and makes it a data object which displays json
      console.log(data[0].name);
      console.log(data[0].diet);

      writeUserData(data[0].name, data[0].diet);
      EL_formRSVP.reset();
      alert("Thankyou! You have successfully RSVP!");
      //document.location.href = "../index.html";
    });
});
