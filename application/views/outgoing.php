<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./outgoing.css">
    <style>
         .get-started {
  max-width: 800px;
  margin: 50px auto;
  position: relative;

}
.get-started .title {
  text-align: center;
  text-transform: uppercase;
  letter-spacing: 3px;
  font-size: 3.2em;
  line-height: 48px;
  padding-bottom: 48px;
     color: #5543ca;
    background: #5543ca;
    background: -moz-linear-gradient(left,#f4524d  0%,#5543ca 100%) !important;
    background: -webkit-linear-gradient(left,#f4524d  0%,#5543ca 100%) !important;
    background: linear-gradient(to right,#f4524d  0%,#5543ca  100%) !important;
    -webkit-background-clip: text !important;
    -webkit-text-fill-color: transparent !important;
}

.signup-form .form-field {
  position: relative;
  margin: 32px 0;
}
.signup-form .input-text {
  display: block;
  width: 100%;
  height: 36px;
  border-width: 0 0 2px 0;
  border-color: #5543ca;
  font-size: 18px;
  line-height: 26px;
  font-weight: 400;
}
.signup-form .input-text:focus {
  outline: none;
}
.signup-form .input-text:focus + .label,
.contact-form .input-text.not-empty + .label {
  -webkit-transform: translateY(-24px);
          transform: translateY(-24px);
}
.signup-form .label {
  position: absolute;
  left: 20px;
  bottom: 11px;
  font-size: 18px;
  line-height: 26px;
  font-weight: 400;
  color: #5543ca;
  cursor: text;
  transition: -webkit-transform .2s ease-in-out;
  transition: transform .2s ease-in-out;
  transition: transform .2s ease-in-out, 
  -webkit-transform .2s ease-in-out;
}
.signup-form .submit-btn {
  display: inline-block;
  background-color: #000;
   background-image: linear-gradient(125deg,#a72879,#064497);
  color: #fff;
  text-transform: uppercase;
  letter-spacing: 2px;
  font-size: 16px;
  padding: 8px 16px;
  border: none;
  width:200px;
  cursor: pointer;
}

    </style>
</head>
<body>
<section class="get-started">
   <h1 class="title">Register Outgoing</h1>
   <?php
echo form_open('/outgoing/createoutgoing');
?>
   <div class="signup-form row">
      <div class="form-field col-lg-12">
         <input id="name" class="input-text js-input" type="text" name="productId" required>
         <label class="label" for="name">Product ID</label>
      </div>
      <div class="form-field col-lg-12 ">
         <input id="number" class="input-text js-input" type="text" name="quantity" required>
         <label class="label" for="email">Quantity</label>
      </div>
      <div class="form-field col-lg-12">
         <input class="submit-btn" type="submit" value="Continue">
      </div>
</div>
<?php
echo form_close();
?>
</section>

   
    
</body>
</html>