<!DOCTYPE html>
<html>
  <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registration Form</title>
        <link rel="stylesheet" href="css/normalize.css">
        <link href='http://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>
    
<form action="includes/insertdata.php" method="post">
      
        <h1>Synapse Registration Form</h1>
        
        <fieldset>
          
         <label>Name:</label><input type="text" id="name" placeholder="JOHN DOE" name="name" required>         
          <label>Email:</label>
          <input type="email" id="mail" placeholder="abcde@email.com" name="email" required>        
         <label>Contact Number:</label>
         <input type="number" id="contact" placeholder="235 256 2365"  name="contact" required>  
         <label>College Name:</label>  <input type="text" id="college" placeholder="COLLEGE NAME" name="college" required>
          <label>Faculty:</label>  <input type="text" id="faculty" placeholder="MBBS,BDS, NURSING,............." name="faculty" required> 
         <label>Batch:</label>
        <select id="batch" name="batch">
            <option value=""></option>
            <option value="First Year">First Year</option>
            <option value="Second Year">Second Year</option>
            <option value="Third Year">Third Year</option>
            <option value="Fourth Year">Fourth Year</option>
            <option value="Final Year">Final Year</option>
           </option>          
        </select> 

          <label>Want to participate in::</label>
          <input type="checkbox"  value="Football" name="event[]"><label class="light">Football&nbsp;&nbsp;</label>&nbsp;&nbsp;&nbsp;
          <input type="checkbox" value="2"  name="event[]"><label class="light">Cricket</label>&nbsp;&nbsp;
          <input type="checkbox" value="3"  name="event[]"><label class="light">Basket&nbsp;Ball</label>&nbsp;&nbsp;
          <input type="checkbox" value="4"  name="event[]"><label class="light">Volley&nbsp;Ball</label>&nbsp;&nbsp;
          <input type="checkbox" value="5"  name="event[]"><label class="light">Table&nbsp;Tennis</label>&nbsp;&nbsp;</br>
          <input type="checkbox" value="6" name="event[]"><label class="light">Badminton&nbsp;</label>
          <input type="checkbox" value="7"  name="event[]"><label class="light">Futsal&nbsp;/&nbsp;Criscal&nbsp;&nbsp;&nbsp;</label>
          <input type="checkbox" value="8"  name="event[]"><label class="light">Chess&nbsp;&nbsp;&nbsp;&nbsp;</label>
          <input type="checkbox" value="9"  name="event[]"><label class="light">Computer&nbsp;Gamming</label><br/>
          <input type="checkbox" value="10"  name="event[]"><label class="light">Literary&nbsp;Events</label>&nbsp;&nbsp;&nbsp;&nbsp;
          <input type="checkbox" value="11"  name="event"><label class="light">Cultural&nbsp;Events</label>


          
         <label>Photo:</label>
         <input type="file" id="photo" placeholder="photo"  name="photo">
        <label>Voucher Photo:</label><input type="file" id="Vphoto" placeholder="Vphoto"  name="Vphoto">
        
        
          
        </fieldset>
        <button type="submit">Register</button>
      </form>
      
    </body>
</html>