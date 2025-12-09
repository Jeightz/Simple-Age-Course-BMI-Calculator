 <!DOCTYPE html>
 <html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href ="/Age-Course-BMI_Calculator/assest/CSS/style.css">
  <title>Age Calculator</title>
 </head>
<body style="background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), 
 url(/Age-Course-BMI_Calculator/Img/age.jpg);background-size: cover; ">  
 <h1 id="dashboardText">Welcome to Age Calculator</h1>


 <div class = "form-parent-container" >
  <div class="form-container" >
    <h1>Age Calculator</h1>
    <form action="AgeCalculator.php" method="post">
      <label for="birthdate" class = "lbl">Enter your birthdate:</label><br>
      <input type="date" id="birthdate" name="birthdate" required><br><br>
      <button type="submit"  name="submit">Calculate Age</button>
    </form>
  </div>

 </body>
 </html>
 
 