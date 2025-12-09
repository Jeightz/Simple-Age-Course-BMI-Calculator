<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BMI Calculator</title>
  <link rel = "stylesheet" href ="/Age-Course-BMI_Calculator/assest/CSS/style.css">
</head>
<body style="background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), 
 url(/Age-Course-BMI_Calculator/Img/bmi.jpg);background-size: cover; "> 
 
 <h1 id="dashboardText">Welcome To BMI Calculator</h1>
  
 <div class = "form-parent-container" >
  <div class="form-container">
    <h1>BMI Calculator</h1>
    <form action="BMI-Calculator.php" method="post">
      <label >Enter Height And Width</label><br>
      <input type="text" class="input" placeholder="Height" require><br>
      <input type="text" class="input" placeholder="Weight" require><br>
      <button type = "submit" name = "submit" >Calculate</button>




    </form>



  </div>
  </div>
</body>
</html>