<!DOCTYPE html>
<html lang='en'>
 <head>
    
     <link rel="stylesheet" href="css/index.css">
     <link rel="stylesheet" href="css/theme.css">
  <title>Wedding of Loren and Daniel</title>
  <meta charset='utf-8' name="viewport" content="width=device-width, initial-scale=1">
  <style>
  </style>
 </head>
 <body>
     
     <div class="header_buttons">
        
            <a href="index.php"><button id=button_index type="button">Home</button></a>
            <a href="pages/rsvp.php"><button type="button">RSVP</button></a>
            <a href="pages/plan.html"><button type="button">Details</button></a>
            <a href="pages/query.html"><button type="button">Questions</button></a>
            <a href="index.php"><button id=button_photos type="button" onclick="alert('coming soon!')">Photos</button></a>
        

     </div>
     
     <div class="welcome_page">
         <p id="text_welcome"><b>THE WEDDING OF</b></p>
         <p><b>Loren & Daniel</b></p>
         <p><b>8th February 2025</b></p>
         <a href="pages/rsvp.php"><button id="button_rsvp" type="button">RSVP</button></a>
         
         <!-- Display the countdown timer in an element --> <!-- LATER: Load as session to avoid lag -->
         <p>The big day is in:</p>
         <p id="timer"></p>
         <script src="js/timer.js"></script>

     </div>
        
 </body>
</html>