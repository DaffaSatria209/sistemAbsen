<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>

<div class="grid-container">
<div></div>

<div><label for="uname"><b>Username :</b></label>
<input type="text" id=uname placeholder="Enter Username" name="uname" required>
<br>
<label for="psw"><b>Password :</b></label>
<input type="password" id=pswd placeholder="Enter Password" name="password" required>
</div>

<div></div>
<div></div>

<div>
  <button id= "uname" onclick=loginuser() type="button"> Login </button>
  
</div>

<script>
  function loginuser(){
    const getval = document.getElementById("uname");
    const getpas =document.getElementById("pswd");
    
    if (getval.value == "pemimpin.kelompok" && getpas.value !== null){
        document.location.href= 'menuAbsen.php'

    } else if(getval.value == "pemimpin.apel" && getpas.value !== null){
        document.location.href= 'menuRekap.php'
    } 
  }
  
</script>

</body>
</html>

