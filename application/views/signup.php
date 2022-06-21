



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Signup</title>
  <link rel="stylesheet" href="<?php echo base_url()."assets/css/style.css"?>">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<style>
         @import url(https://fonts.googleapis.com/css?family=Roboto:400,500,300,700);
body{
  background: -webkit-linear-gradient(left, #25c481, #25b7c4);
 /* // background: linear-gradient(to right, #25c481, #25b7c4);// */
 background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(106,11,129,1) 17%, rgba(0,212,255,1) 100%);
  font-family: 'Roboto', sans-serif;
}
        
        .signup {
  max-width: 800px;
  background: rgba(255, 255, 255, 0.54);
border-radius: 16px;
box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
backdrop-filter: blur(16.1px);
-webkit-backdrop-filter: blur(16.1px);
border: 1px solid rgba(255, 255, 255, 0.3);
  
  margin: 50px auto;
  position: relative;
  align-items: center;
  text-align: center;
  justify-content: center;

}
.signup .title {
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
  width: 80%;
 

  justify-content: center;
}
.signup-form .input-text {
  display: block;
  width: 100%;
  height: 50px;
  border-width: 0 0 2px 0;
  border-color: #5543ca;
  font-size: 18px;
  line-height: 26px;
  font-weight: 400;
  background: rgba(255, 255, 255, 0.0);
border-radius: 16px;
box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
backdrop-filter: blur(0px);
-webkit-backdrop-filter: blur(0px);
margin-left: 60px;


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
  left: 80px;
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
  padding: 16px 16px;
  border: none;
  width:200px;
  cursor: pointer;
  margin-left: 150px;
}
a{
  text-decoration: none;
  color: white;
}

   </style>


</head>
<body>

<?php
echo form_open('/signup/createUser');
?>
<section class="signup">
   <h1 class="title">Get Started !</h1>
   <div class="signup-form row">
      <div class="form-field col-lg-5">
         <input id="name" class="input-text js-input" type="text" name="firstname" required>
         <label class="label" for="name">Firstname</label>
      </div>
      <div class="form-field col-lg-5 ">
         <input id="email" class="input-text js-input" type="text" name="lastname" required>
         <label class="label" for="email">Lastname</label>
      </div>
      <div class="form-field col-lg-5 ">
         <input id="company" class="input-text js-input" type="text" name="telephone" required>
         <label class="label" for="company">Telephone</label>
      </div>
       <div class="form-field col-lg-5 ">
         <input id="phone" class="input-text js-input" type="text" name="gender" required>
         <label class="label" for="phone">Gender</label>
      </div>
      <div class="form-field col-lg-5 ">
         <input id="company" class="input-text js-input" type="text" name="nationality" required>
         <label class="label" for="company">Nationality</label>
      </div>
       <div class="form-field col-lg-5">
         <input id="phone" class="input-text js-input" type="text" name="username" required>
         <label class="label" for="phone">Username</label>
      </div>
      <div class="form-field col-lg-5 ">
         <input id="phone" class="input-text js-input" type="email" name="email" required>
         <label class="label" for="phone">Email</label>
      </div>
      <div class="form-field col-lg-5">
         <input id="message" class="input-text js-input" type="text" name="password" required>
         <label class="label" for="message">Password</label>
      </div>
      <div class="form-field col-lg-10">
         <input class="submit-btn" type="submit" value="Submit">
      </div>
</div>
</section>
<?php
echo form_close();
?>

  
</body>
</html>