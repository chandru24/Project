
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>jQuery validation plug-in - dynamic forms demo</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<style>

        @import url("https://fonts.googleapis.com/css?family=Open+Sans");

/* Styles */
* {
  margin: 0;
  padding: 0;
}

body {
  font-family: "Open Sans";
  font-size: 14px;
}

.container {
  width: 500px;
  margin: 25px auto;
}

form {
  padding: 20px;
  background: #41f4d6;
  color: #0f2d3a;
  -moz-border-radius: 4px;
  -webkit-border-radius: 4px;
  border-radius: 4px;
}
form label,
form input,
form button {
  border: 0;
  margin-bottom: 3px;
  display: block;
  width: 100%;
}
form input {
  height: 25px;
  line-height: 25px;
  background: #fff;
  color: #000;
  padding: 0 6px;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}
form button {
  height: 30px;
  line-height: 30px;
  background: #1f607c;
  color: #fff;
  margin-top: 10px;
  cursor: pointer;
}
form .error {
  color: #ff0000;
}

</style>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
<script>

       
$(function()                                                        
{                                              
    $("form[name='registration']").validate(
    {                                                               // Initialize form validation on the registration form.
        rules: 
        {            
            firstname: "required",
            lastname: "required",                                    // It has the name attribute "registration"
            email: 
            {
                required: true,
                email: true                                          // Specify validation rule       
            },
            password: 
            {
                required: true,
                minlength: 5
            }
        },
    
        messages: 
        {
            firstname: "Please enter your firstname",                 // Specify validation error messages
            lastname: "Please enter your lastname",
            password: 
            {
                required: "Please provide a password",
                minlength: "Your password must be at least 5 characters long"
            },
            email: "Please enter a valid email address"
        },
    
        submitHandler: function(form)                                  // Make sure the form is submitted to the destination defined
        {                                                              // in the "action" attribute of the form when valid
            form.submit();                                          
        }                                                               
    });
});        

</script>

    <div class="container">
  <h2 class="text-center">Dynamic Form Validation - jQuery</h2>
  <form method="post" action="<?php echo base_url("index.php/Welcome/saveForm"); ?>" name="registration">

    <label for="firstname">First Name</label>
    <input type="text" name="firstname" id="firstname" placeholder="FirstName"/><br>

    <label for="lastname">Last Name</label>
    <input type="text" name="lastname" id="lastname" placeholder="LastName"/><br>

    <label for="email">Email</label>
    <input type="email" name="email" id="email" placeholder="abc@xyz.com"/><br>

    <label for="password">Password</label>
    <input type="password" name="password" id="password" placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;"/><br>

    <button type="submit">Register</button>

  </form>
</div>
</body>
</html>
