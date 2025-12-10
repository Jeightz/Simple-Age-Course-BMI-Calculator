
<?php

$result = "BMI Calculator";
if(isset($_POST['submit'])){
  $height = $_POST["height"] / 100;
  $weight = $_POST["weight"] ;
  $total = $weight / ($height * $height);
  $total =round($total ,2);
  if($total <= 18.5){
    $result = "your BMI is $total, you are underweight";
  }elseif($total >= 18.6 && $total <= 24.9 ){
    $result = "your BMI is $total, you are Normal";
  }elseif($total >= 25 && $total <= 29.9){
    $result = "your BMI is $total, you are overweight";
  }else{
    $result = "your BMI is $total, you are obbese";
  }
}
?>

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

 <h1 id="dashboardText"><?php  echo $result; ?></h1>
  
 <div class = "form-parent-container" >
  <div class="form-container">
    <h1>BMI Calculator</h1>
    <form action="BMI-Calculator.php" method="post">
      <label >Enter Height And Width</label><br>
      <input type="text" class="input" name = "height" placeholder="Height(CM)" require><br>
      <input type="text" class="input" name = "weight" placeholder="Weight(WG)" require><br>
      <button type = "submit" name = "submit" >Calculate</button>
    </form>
  </div>
  </div>
</body>
</html>

