<!DOCTYPE html>
<html lang='en'>
 <head>
     <link rel="stylesheet" href="../css/rsvp.css">
     <link rel="stylesheet" href="../css/theme.css">
  <title>RSVP</title>
  <meta charset='utf-8' name="viewport" content="width=device-width, initial-scale=1">
  <style>
  </style>
  <script src="../js/rsvp_functions.js">
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
         <form class="form_rsvp" onsubmit="WriteToFile(this)">
             <label for="name">Name</label><br>
             <input type="text" id="fname" value="first and last"><br>
             
             <br><label>Please let us know if you're coming to the reception as well as the ceremony</label><br>
             <input type="radio" id="ceremony" name="events" value="ceremony">
             <label for="ceremony">I'm only coming to the ceremony</label><br>
             <input type="radio" id="reception" name="events" value="reception">
             <label for="reception">I'm coming to both the ceremony and reception</label><br>
        
             
             <br><label>Do you have any dietry requirements?</label><br>
             <input type="checkbox" id="vegeterian" name="diet" value="vegeterian">
             <label for="noaccom">Vegeterian</label><br>
             <input type="checkbox" id="vegan" name="diet" value="vegan">
             <label for="yesaccom">Vegan</label><br>
             <input type="checkbox" id="gluten" name="diet" value="gluten free">
             <label for="yesaccom">Gluten Free</label><br>
             <input type="checkbox" id="dairy" name="diet" value="dairy free">
             <label for="yesaccom">Dairy Free</label><br>
             <input type="checkbox" id="nut" name="diet" value="nut free">
             <label for="yesaccom">Nut Free</label><br>
             <input type="checkbox" id="nut" name="diet" value="other">
             <label for="yesaccom">Other</label>
             <input type="text" id="other" name="diet" value="specify"><br>
             
             <br><input type="submit" value="RSVP"><br>

         </form>
         
    </div>
        
 </body>
</html>