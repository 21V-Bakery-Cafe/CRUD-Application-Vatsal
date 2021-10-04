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

<body>


<form style="border:1px solid #fff" method = "POST" action = "user.php">
  <div class="container">
    <h1>Cafe Management System</h1>
    <hr>
    <input type="hidden" name="id" value="<?php echo $id; ?>">
    <input type="text" class="input-box" placeholder="Food ID" name="foodID" required >
    <input type="text" class="input-box" placeholder="Food Name" name="foodName" required>
    <input type="text" class="input-box" placeholder="Food Price" name="foodPrice" >
    <input type="text" class="input-box" placeholder="Food Description" name="foodInfo" >

	<button class="btn" type="submit" name="cart" >Add to Cart</button>
<hr>
    
  </div>
</form>

</body>
</html>
