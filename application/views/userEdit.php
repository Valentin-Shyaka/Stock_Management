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


</head>
<body>

<?php
echo form_open('/signup/updateUser/'.$user->userId, array("method"=>"post"));
?>
<section class="signup">
   <h1 class="title">Get Started !</h1>
   <div class="signup-form row">
      <div class="form-field col-lg-6">
         <input id="name" class="input-text js-input" type="text" value="<?= $user->firstName ?>" name="firstname" required>
         <label class="label" for="name">Firstname</label>
      </div>
      <div class="form-field col-lg-6 ">
         <input id="email" class="input-text js-input" type="text" value="<?php echo $user->lastName ?>" name="lastname" required>
         <label class="label" for="email">Lastname</label>
      </div>
      <div class="form-field col-lg-6 ">
         <input id="company" class="input-text js-input" type="text" value="<?php echo $user->telephone ?>" name="telephone" required>
         <label class="label" for="company">Telephone</label>
      </div>
       <div class="form-field col-lg-6 ">
         <input id="phone" class="input-text js-input" type="text" value="<?php echo $user->gender ?>" name="gender" required>
         <label class="label" for="phone">Gender</label>
      </div>
      <div class="form-field col-lg-6 ">
         <input id="company" class="input-text js-input" type="text" value="<?php echo $user->nationality ?>" name="nationality" required>
         <label class="label" for="company">Nationality</label>
      </div>
       <div class="form-field col-lg-6 ">
         <input id="phone" class="input-text js-input" type="text" value="<?php echo $user->username ?>" name="username" required>
         <label class="label" for="phone">Username</label>
      </div>
      <div class="form-field col-lg-6 ">
         <input id="phone" class="input-text js-input" type="email" value="<?php echo $user->email ?>" name="email" required>
         <label class="label" for="phone">Email</label>
      </div>
      <div class="form-field col-lg-6">
         <input id="message" class="input-text js-input" type="text" value="<?php echo $user->password ?>" name="password" required>
         <label class="label" for="message">Password</label>
      </div>
      <div class="form-field col-lg-12">
         <input class="submit-btn" type="submit" value="Submit">
      </div>
</div>
</section>
<?php
echo form_close();
?>

  
</body>
</html>