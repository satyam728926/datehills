<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
<form  action="registerdata.php" method="post">
  <div class="form">

<div class="title">Register Here</div>
<div class="subtitle">Let's create your account!</div>
<div class="input-container ic1">
  <input id="Age" class="input" type="text" placeholder=" " name="Age" />
  <div class="cut"></div>
  <label for="Age" class="placeholder" >Age</label>
</div>
<div class="input-container ic2">
  <input id="aboutyou" class="input" type="text" placeholder=" " name="aboutyou"/>
  <div class="cut"></div>
  <label for="aboutyou" class="placeholder" >aboutyou</label>
</div>
<div class="input-container ic2">
  <input id="Full name" class="input" type="text" placeholder=" " name="Full_Name"/>
  <div class="cut"></div>
  <label for="Full Name" class="placeholder" >Full Name</label>
</div>
<div class="input-container ic2">
  <input id="Username" class="input" type="text" placeholder=" " name="Username"/>
  <div class="cut cut-short"></div>
  <label for="Username" class="placeholder">Username
</div>
<div class="input-container ic2">
  <input id="password" class="input" type="password" placeholder=" " name="Password"/>
  <div class="cut cut-short"></div>
  <label for="password" class="placeholder">Password
</div>
<input type="submit"  class="submit" value="Register" name="submit" id="input_button" >
  </div>
</form>

</body>
</html>