<?php
  include("server.php");
  include("redirect.php");
  ?>


<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Members Only Login Page</title>
  </head>
  <body>
    <div id="form">
    <h1>Members Only Login Page</h1>
    <form name="form" action="index.php" onsubmit="return isvalid()" method="POST">
      <label>Username: </label>
      <input type="text" id="user" name="user"><br><br>
      <label>Password: </label>
      <input type="password" id="pass" name="pass"><br><br>
      <input type="submit" id="btn" value="Login" name = "submit"/>
    </form>
    </div>

    <script>
    function isvalid(){
                var user = document.form.user.value;
                var  = document.form.pass.value;
                if(username.length=="" && password.length==""){
                    alert(" Username and password field is empty!!!");
                    return false;
                }
                else if(username.length==""){
                    alert(" Username field is empty!!!");
                    return false;
                }
                else if(password.length==""){
                    alert(" Password field is empty!!!");
                    return false;
                }
                
            }
        </script>

  </body>
</html>