<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Signup</title>
    <link rel="stylesheet" href="login.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
<div class="login-section">
  <div class="form-box register">
    <form method="post">

        <h2>Register</h2>

        <div class="inputbox">
            <input type="text" required name="Name">
            <label >Username</label>
        </div>
        <div class="inputbox">
            <input type="email" required name="Email">
            <label >Email</label>
        </div>
        <div class="inputbox">
            <input type="password" required name="Password">
            <label>Password</label>
        </div>
        <div class="inputbox">
            <input type="password" required name="Password1">
            <label>Confirm Password</label>
        </div>
        <div class="forget">
            <label for=""><input type="checkbox" required>I agree with this statement</label>
        </div>
        <button class="btn" name="Submit" onclick="openPopup()">Register</button>
        <div class="register">
            <p>Already Have An Account? <a href="./login.php">Login</a></p>
        </div>
    </form>
  </div>
</div>

<?php
if(isset($_POST['Submit']))
{
  $Name = $_POST['Name'];
  $Email = $_POST['Email'];
  $Password = $_POST['Password'];
  $Password1 = $_POST['Password1'];

  $conn= new mysqli('localhost','root','','register');
  if($conn->connect_error)
  {
    die('Connection Failed :' .$conn->connect_error);
  }
  else
  {
    $query=$conn->prepare("select * from reg where Name=?");
    $query->bind_param("s",$Name);
    $query->execute();
    $query_result=$query->get_result();
      if($query_result->num_rows>0)
      {
      ?>
      <script>
        swal({
        title: "OOPS",
        text: "Can't use this Username.It already exixts",
        icon: "error",
    });
    </script>  
      <?php
      }
      elseif(!filter_var($Email,FILTER_VALIDATE_EMAIL)){
        ?>
        <script>
        swal({
        title: "OOPS",
        text: "Not Valid Email...",
        icon: "error",
    });
    </script>  

        <?php

      }
      elseif($Password!= $Password1)
      {
        ?>
        <script>
        swal({
        title: "OOPS",
        text: "Password does not match with Confirm Password",
        icon: "error",
    });
    </script>  

        <?php
      }
      else{
        $stmt= $conn->prepare("insert into reg(Name,Email,Password) values(?,?,?)");
        $stmt->bind_param("sss",$Name, $Email, $Password);
        $stmt->execute();
     if($stmt)
     {
     ?>
     <script>
        swal({
        title: "Registration Successful.",
        text: "Data Inserted...",
        icon: "success",
    }).then(function() {
      window.location.href = "http://localhost/IP%20Project/index.html"; 
    });
    </script>

    <?php
     }
    }
    }
    $query->close();
    $conn->close();
  }
?>


</body>
</html>