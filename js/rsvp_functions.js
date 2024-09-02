

const EL_formRSVP = document.querySelector("#form_rsvp");
        
//Add an event listener for when the form submits
// addEventListener("type", func());
// (ev) => {} is creating function
EL_formRSVP.addEventListener("submit", (ev) => { 

    //Prevents default form submit
    ev.preventDefault();

    //Fetch the data from the form action (submit)
    fetch(EL_formRSVP.action, {
        method: 'POST', //POST method
        body: new FormData(EL_formRSVP), //Turns form data into JSON string
    
    }).then(res => res.json()).then(data =>{ //Gets the res and makes it a data object which displays json

        EL_formRSVP.reset();

        alert("Thankyou! You have successfully RSVP!");

        document.location.href = "../index.php";
    });
    
    
});


//  EXPLORE THIS JQUERY LATER - Might be simpler of above -->
//  $(document).ready(function(){
// var $form = $('form');
// $form.submit(function(){
//     $.post($(this).attr('action'), $(this).serialize(), function(response){
//             // do something here on success
//     },'json');
//     return false;
// });
// });

// // this is the id of the form
// $("#idForm").submit(function(e) {

//     e.preventDefault(); // avoid to execute the actual submit of the form.

//     var form = $(this);
//     var actionUrl = form.attr('action');
    
//     $.ajax({
//         type: "POST",
//         url: actionUrl,
//         data: form.serialize(), // serializes the form's elements.
//         success: function(data)
//         {
//         alert(data); // show response from the php script.
//         }
//     });
    
// });