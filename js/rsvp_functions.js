const EL_formRSVP = document.querySelector("#form_rsvp");

//Add an event listener for when the form submits
// addEventListener("type", func());
// (ev) => {} is creating function
EL_formRSVP.addEventListener("submit", (ev) => {
  //Prevents default form submit
  ev.preventDefault();

  //Fetch the data from the form action (submit)
  fetch(EL_formRSVP.action, {
    method: "POST", //POST method
    body: new FormData(EL_formRSVP), //Turns form data into JSON string
  })
    .then((res) => res.json())
    .then((data) => {
      //Gets the res and makes it a data object which displays json

      EL_formRSVP.reset();

      alert("Thankyou! You have successfully RSVP!");

      document.location.href = "../index.html";
    });
});
