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
    .then((res) => res.text())
    .then((data) => {
      //Gets the res and makes it a data object which displays json
      console.log(data);
      EL_formRSVP.reset();

      alert("Thankyou! You have successfully RSVP!");

      document.location.href = "../index.html";
    });
});
