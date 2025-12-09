<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Course Calculator</title>
  <link rel = "stylesheet" href ="/Age-Course-BMI_Calculator/assest/CSS/style.css">
</head>
 <body style="background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), 
 url(/Age-Course-BMI_Calculator/Img/grade.jpg);background-size: cover; ">

 <h1 id="dashboardText">Welcome to Course Calculator</h1>
<div class = "form-parent-container" >
  <div class="form-container" >
    <h1>Course Calculator</h1>
    <form action="CourseCalculator.php" method="post">
      <label >Enter your grades:</label><br>
      <input type="text" placeholder= "enter grade 1" name="grade1"  class ="input"required><br>
      <input type="text" placeholder= "enter grade 2" name="grade2" class ="input"required><br>
      <input type="text" placeholder= "enter grade 3" name="grade3" class ="input"required><br>
      <input type="text" placeholder= "enter grade 4" name="grade4" class ="input"required><br>
      <input type="text" placeholder= "enter grade 5" name="grade5" class ="input"required><br>
      <input type="text" placeholder= "enter grade 6" name="grade6" class ="input"required><br>
      <input type="text" placeholder= "enter grade 7" name="grade7" class ="input"required><br>
      <button type="submit"  name="submit">Calculate Course Grade</button>
    </form>
  </div>
</div>
</body>
</html>