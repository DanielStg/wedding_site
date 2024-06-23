<!DOCTYPE html>
<html lang='en'>
 <head>
     <link rel="stylesheet" href="../css/rsvp.css">
     <link rel="stylesheet" href="../css/theme.css">
  <title>RSVP</title>
  <meta charset='utf-8' name="viewport" content="width=device-width, initial-scale=1">
  <style>
  </style>
  <script>
  </script>
 </head>
 <body>
<?php echo "RSVP PHP!"; ?>
         <div class="header_buttons">
        
            <a href="../index.php"><button id=button_index type="button">Home</button></a>
            <a href="../pages/rsvp.html"><button id=button_rsvp type="button">RSVP</button></a>
            <a href="../pages/plan.html"><button id=button_plan type="button">Details</button></a>
            <a href="../pages/query.html"><button id=button_queries type="button">Questions</button></a>
            <a href="../index.html"><button id=button_photos type="button" onclick="alert('coming soon!')">Photos</button></a>
        

     </div>
     <div class="rsvp_page">
         <p id="text_rsvp"><b>RSVP PAGE</b></p>

         <!-- Name, ceremony/reception, require accomodation, -->
         <form class="form_rsvp" id="form_rsvp" method="post" action="../php/rsvp_scripts.php">
             <label for="name">Name</label><br>
             <input type="text" name="fname" autocomplete="off" placeholder="first name"><br>
             
             <br><label>Please let us know if you're coming to the reception as well as the ceremony</label><br>
             <input type="radio" name="events" value="ceremony">
             <label for="ceremony">I'm only coming to the ceremony</label><br>
             <input type="radio" name="events" value="reception">
             <label for="reception">I'm coming to both the ceremony and reception</label><br>
        
             
             <br><label>Do you have any dietry requirements?</label><br>
             
             <input type="checkbox" name="diet" value="none">
             <label>None</label><br>
             <input type="checkbox" name="diet" value="vegeterian">
             <label>Vegeterian</label><br>
             <input type="checkbox" name="diet" value="vegan">
             <label>Vegan</label><br>
             <input type="checkbox" name="diet" value="gluten free">
             <label>Gluten Free</label><br>
             <input type="checkbox" name="diet" value="dairy free">
             <label>Dairy Free</label><br>
             <input type="checkbox" name="diet" value="nut free">
             <label>Nut Free</label><br>
            
            <!-- TODO
                * Allow selection of multiple diety reqs
                * Stay on page or redirect after submission

-->
              
             <br><input id="button_submit" class="btn btn-sucess" type="submit" value="RSVP"><br>

            <!-- <div class="form-group">
            <label>
                <span>Username</span>
                <input placeholder="Username" autocomplete="off" type="text" name="username">
            </label>
        </div>
        <div class="form-group">
            <label>
                <span>Password</span>
                <input placeholder="Password" autocomplete="off" type="password" name="password">
            </label>
        </div>
        <input id="button1" class="btn btn-success" type="submit" value="Login"> 
-->
         </form>

         <script>
            //Create a const and select the form
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
                }).then(res => res.json()).then(data =>{
                    console.log(data);
                });
                
                
            });
                //.then(res => res.json()).then(data => { //res.json takes result json and creates js object from it
                    // Hide the form                        Takes that object
                    //EL_formRSVP.hidden = true;
                    // Show the user name
                    //document.querySelector("[data-fname]").textContent = data.fname;
                //});
            //});
        </script> 
                <!-- EXPLORE THIS JQUERY LATER - Might be simpler of above -->
                <!-- $(document).ready(function(){
                var $form = $('form');
                $form.submit(function(){
                    $.post($(this).attr('action'), $(this).serialize(), function(response){
                            // do something here on success
                    },'json');
                    return false;
                });
                });
                
                // this is the id of the form
                $("#idForm").submit(function(e) {

                    e.preventDefault(); // avoid to execute the actual submit of the form.

                    var form = $(this);
                    var actionUrl = form.attr('action');
                    
                    $.ajax({
                        type: "POST",
                        url: actionUrl,
                        data: form.serialize(), // serializes the form's elements.
                        success: function(data)
                        {
                        alert(data); // show response from the php script.
                        }
                    });
                    
                });-->
    </div>
        
 </body>
</html>