<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./Login.css">
</head>
<body>
    <style>
      @import url(https://fonts.googleapis.com/css?family=Roboto:400,500,300,700);
body{
  background: -webkit-linear-gradient(left, #25c481, #25b7c4);
 /* // background: linear-gradient(to right, #25c481, #25b7c4);// */
 background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(106,11,129,1) 17%, rgba(0,212,255,1) 100%);
  font-family: 'Roboto', sans-serif;
}
        
        .login {
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
.login .title {
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

.login-form .form-field {
  position: relative;
  margin: 32px 0;
  width: 80%;
 

  justify-content: center;
}
.login-form .input-text {
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
.login-form .input-text:focus {
  outline: none;
}
.login-form .input-text:focus + .label,
.contact-form .input-text.not-empty + .label {
  -webkit-transform: translateY(-24px);
          transform: translateY(-24px);
}
.login-form .label {
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
.login-form .submit-btn {
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
<section class="login">
   <h1 class="title">Login</h1>
   <form class="login-form row">
      <div class="form-field col-lg-12">
         <input id="name" class="input-text js-input" type="text" required>
         <label class="label" for="name">Username</label>
      </div>
      <div class="form-field col-lg-12 ">
         <input id="email" class="input-text js-input" type="password" required>
         <label class="label" for="email">Password</label>
      </div>
      <div class="form-field col-lg-12">
         <button class="submit-btn" type="submit" value="Continue"><a href="<?= base_url('/products/getProducts') ?>">Continue</a></button>
      </div>
   </form>
</section>
      
    
</body>
</html>