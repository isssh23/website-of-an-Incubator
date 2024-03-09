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
        <div class="form-box login">
            <div class="form-value">
                <form action="login.php" method="post">
                    <h2>Login</h2>
                    <div class="inputbox">
                      <input type="text" required name="Name">
                      <label >Username</label>
                    </div>
                    <div class="inputbox">
                      <input type="password" required name="Password">
                      <label>Password</label>
                    </div>
                    <div class="forget">
                        <label for=""><input type="checkbox">Remember Me</label>
                      
                    </div>
                    <button name="Submit">Log in</button>
                    <div class="register">
                        <p>Don't have a account? <a href="./register.php">Register</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php
if(isset($_POST['Submit']))
{
  $Name = $_POST['Name'];
  $Password = $_POST['Password'];

  $conn= new mysqli('localhost','root','','register');
  if($conn->connect_error)
  {
    die('Connection Failed :' .$conn->connect_error);
  }
  else
  {
    $stmt= $conn->prepare("select * from reg where Name=?");
    $stmt->bind_param("s",$Name);
    $stmt->execute();
    $stmt_result=$stmt->get_result();
    if($stmt_result->num_rows>0)
    {
      $data= $stmt_result->fetch_assoc();
      if($data['Password'] === $Password)
      {
        ?>
        <script>
          
        swal({
        title: "Congratulation.",
        text: "Login Successful...",
        icon: "success",
      }).then(function() {
      window.location.href = "http://localhost/IP%20Project/apply.html";
    });
    </script>
      <?php
      }
      else{
        ?>
        <script>
        swal({
        title: "OOPS.",
        text: "Invalid Password",
        icon: "error",
    });
    </script>
        <?php
      }
    }
    else{
      ?>
      <script>
        swal({
        title: "OOPS.",
        text: "Invalid Information",
        icon: "error",
    });
    </script>
      <?php
    }

  }  

 $stmt->close();
 $conn->close();
}
?>

    
</body>
</html>