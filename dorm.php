<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dorm_room";
$table_name = "reservation";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Query to count the entries
$maleQuery = "SELECT COUNT(*) as maleCount FROM reservation WHERE gender = 'male'";
$maleResult = $conn->query($maleQuery);
$maleCount = mysqli_fetch_assoc($maleResult)['maleCount'];
$tot_m=100;
$vac_m=$tot_m - $maleCount;

// Query to count females
$femaleQuery = "SELECT COUNT(*) as femaleCount FROM reservation WHERE gender = 'female'";
$femaleResult =$conn->query($femaleQuery);
$femaleCount = mysqli_fetch_assoc($femaleResult)['femaleCount'];
$tot_f=100;
$vac_f=$tot_f - $femaleCount;


$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Innovation Hub</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <link rel="stylesheet" type="text/css" href="dorm.css">
  </head>
  <style>
    .line{
    width: 100%;
    height: 6px;
    margin: 5px auto 7px auto;
    background-color: white;
}
    .content p
{
    text-align: justify;
    margin-left: 35px;
    margin-right: 35px;
}
   .title h1
{
    margin-top: 5px;
    margin-left: 370px;
    font-size: 60px;
    font-family: Cambria;
    font-weight: bold;
    color: #234e7c;
}
.container
{
    height: 100vh;
    width: 600vh;
    margin-left: px;
    background-image: url(f1.png);
    background-size: cover;
    background-position: center;

    background-repeat: no-repeat;
    transition: 5s;
    animation-name: animate;
    animation-direction: alternate-reverse;
    animation-play-state: running;
    animation-timing-function: ease-in-out;
    animation-duration: 50s;
    animation-fill-mode: forwards;
    animation-iteration-count: infinite;
}
.dorm{
  width: 350px;
  height:50px;
  border-color: #000080;
  border-radius: 15px;
    border-width: 15px;
  background-color: #234e7c;
  justify-content: center;
  color:white;
  line-height:50px;

}
input[type="button"]
{
  width: 350px;
  border-radius: 1px solid #ddd;
  border-radius: 15px;
  font-family :cambria;
  outline: 0;
  padding: 7px;
  background-color: #fff;
  box-shadow: insert 1px 1px 5px rgba(0,0,0,0.3);
}
    </style>
  <body>
    <section id="nav-bar">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
              <a class="navbar-brand" href="#" style="pointer-events: none;"><img src="navigation.png"></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="home1.html"><b> Home </b></a>
                    
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="serve.html"><b> Services </b></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="http://localhost/IP%20Project/events1.php"><b> Events </b></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="team.html"><b> Our Team</b></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="office_form.html"><b> Marketing </b></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="startup.html"><b> Startup </b></a>
                  </li>
                  
                  <li class="nav-item">
                    <a class="nav-link" href="#"><b>Dorm Room Requisition</b></a>
                    <hr>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="home1.html #contact"><b>Contact Us</b></a>
                    
                  </li>
                </ul>
              </div>
            </div>
          </nav>
    </section>
    <section id="LABORATORY" class="lab">
        <div class="title">
            <h1>Sheikh Jamal dormatory</h1>
          </div>
          
          
          <div class="container">

          </div>
  
        <div class="content">
            <p class="fade-in"> A dormitory is a residential facility typically found on college or university campuses, designed to accommodate students. It serves as a living space where students can sleep, study, and interact with their peers.Sheikh Jamal dormatory is not different.It is comprised of individual rooms or shared living spaces,  and provide basic amenities like beds, desks, chairs, and storage units for each student.Also include communal areas like common rooms, kitchens, laundry facilities, and study rooms, where students can socialize, relax, and collaborate on academic work. Dormitories promote a sense of community, fostering friendships and creating a supportive environment for students during their educational journey.</p>
                <tr>
                  <td>
                  <label><b>Total Room:</b></label></td>
                  <td><label class="dorm"><?php echo $tot_m; ?></label></td>
                </tr>
                <tr>
                  <td>
                  <label><b>Occupied:</b></label></td>
                  <td><label class="dorm"><?php echo $maleCount; ?></label></td>
                  <br>
                </tr>
                <div class="line"></div>
                <tr>
                  <td>
                  <label><b>Vaccent:</b></label></td>
                  <td><label class="dorm"><?php echo $vac_m; ?></label></td>
                </tr>
                <?php
    if (isset($_POST['redirect'])) {
      header("Location: dorm_room.php"); // Redirect to the desired HTML page
      exit();
    }
  ?>
<div style="margin-top: 20px; text-align: center;">
<form>
    <input type="button" value="Reserve Room?" onclick="redirectToOtherPage()">
  </form>
  </div>

  <script>
    function redirectToOtherPage() {
      window.location.href = "dorm_room.php";
    }
  </script>
          
    </section>
  
    <section id="LABORATORY" class="lab">
        <div class="title">
            <h1 >Rosy Jamal dormatory</h1>
          </div>
          <div class="container">

          </div>
          
        <div class="content">
            <p>A dormitory is a residential facility typically found on college or university campuses, designed to accommodate students. It serves as a living space where students can sleep, study, and interact with their peers.Sheikh Jamal dormatory is not different.It is comprised of individual rooms or shared living spaces,  and provide basic amenities like beds, desks, chairs, and storage units for each student.Also include communal areas like common rooms, kitchens, laundry facilities, and study rooms, where students can socialize, relax, and collaborate on academic work. Dormitories promote a sense of community, fostering friendships and creating a supportive environment for students during their educational journey.</p>
                <tr>
                  <td>
                  <label><b>Total Room: </b></label></td>
                  <td><label class="dorm"><?php echo $tot_f; ?></label></td>
                </tr>
                <tr>
                  <td>
                  <label><b>Occupied:</b></label></td>
                  <td><label class="dorm"><?php echo $femaleCount; ?></label></td>
                  <br>
                </tr>
                <div class="line"></div>
                <tr>
                  <td>
                  <label><b>Vaccent:</b></label></td>
                  <td><label class="dorm"><?php echo $vac_f; ?></label></td>
                </tr>
                <style>
  label {
    color: #234e7c; /* Change the font color to blue */
  }
  input[type="text"] {
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.4); /* Add a shadow to the input boxes */
  }
</style>
                <?php
    if (isset($_POST['redirect'])) {
      header("Location: dorm_room.php"); // Redirect to the desired HTML page
      exit();
    }
  ?>
<div style="margin-top: 20px; text-align: center;">
<form>
    <input type="button" value="Reserve Room?" onclick="redirectToOtherPage()">
  </form>
  </div>

  <script>
    function redirectToOtherPage() {
      window.location.href = "dorm_room.php";
    }
  </script>
          
    </section>
</body>
</html>
