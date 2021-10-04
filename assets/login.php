<!DOCTYPE html>
<html>
<style>
    
body {font-family: Avantgarde, TeX Gyre Adventor, URW Gothic L, sans-serif;}
* {box-sizing: border-box}

 input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
} 

hr{
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

.container {
  padding: 16px;
  max-width: 450px;
  box-shadow: 0 0 3px 0 rgba(0, 0, 0, 0, 0.3);
  margin: 8% auto 0;
  text-align: center;
  top: 50%;
  left: 50%;
}

.input-box{
    padding: 10px;
    margin: 10px 0;
    width: 100%;
    border: 1px solid #999;
}

[type="button"]:not(:disabled) {
        cursor: pointer;
    }

.btn-dark {
    color: #fff;
    background-color: #212529;
    border-color: #212529;
}

.btn{
    color: #fff;
    background-color: #212529;
    border-color: #212529;
    border: 1px solid transparent;
    padding: .375rem .75rem;
    font-size: 1rem;
    border-radius: .25rem;
    transition-property: color, background-color, border-color, box-shadow;
    transition-duration: 0.15s, 0.15s, 0.15s, 0.15s;
    transition-timing-function: ease-in-out, ease-in-out, ease-in-out, ease-in-out;
    transition-delay: 0s, 0s, 0s, 0s;
}

[type="button"], [type="reset"], [type="submit"], button {
    -webkit-appearance: button;
}
</style>

<head> 
   <!--  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
</head>

<body>

<form style="border:1px solid #fff " action = "post">
  <div class="container">
    <h1>Log In</h1>
    <hr>

    <input type="text" class="input-box" placeholder="Enter Email" name="email" required>
    <input type="password" class="input-box" placeholder="Enter Password" name="psw" required>
    
    <a href = "../assets/food.php"><button type="submit" class="btn btn-dark">Log In</button></a>
    <hr>
    
    <p><a href="#" style="color:black">Forgot password? </a></p>

  </div>
</form>

</body>
</html>
