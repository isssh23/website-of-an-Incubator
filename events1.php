<?php
 $conn= new mysqli('localhost','root','','events');
 if($conn->connect_error)
 {
   die('Connection Failed :' .$conn->connect_error);
 }
 else
 {
  $current=date('Y-m-d');
  $stmt= $conn->prepare("select * from eve");
  $stmt->execute();
  $stmt_result=$stmt->get_result();
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Events</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="events.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"> 
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <style>
    
      .btn-primary{
        margin: 12px auto 24px 460px;
        width: 200px;
        height: 50px;
        border: none;
        border-radius: 50px;
        background-color: #234e7c;
    }
    .btn-primary:hover{
    background-image: linear-gradient(to right,#000080,#2e67a5);
  }
    .btn-second{
      margin: 3px auto 24px 200px;
        width: 150px;
        height: 40px;
        border: none;
        border-radius: 50px;
        background-color: white;
        transition: all 0.2s;
    }
    .btn-second:hover{
      transform: scale(1.1);}
    .btn-third{
      margin: -40px 0 0 145px;
      background-color:#234e7c;
      border-radius: 60%;
      color: white;
      visibility: hidden;
      opacity: 0;
    }
    .btn-third:hover{
    background-image: linear-gradient(to right,#000080,#2e67a5);
    color: white;}
    .btn-four{
      margin: -90px 0 0 1025px;
        width: 250px;
        height: 50px;
        border: none;
        border-radius: 50%;
        text-align: center;
        background-color: #234e7c;
        box-shadow: 0 0 9px rgb(6, 38, 145);
        
    }
    .btn-four:hover{
    background-image: linear-gradient(to right,#000080,#2e67a5);
  }
  .btn-five{
      margin: 3px auto 24px 220px;
        width: 170px;
        height: 40px;
        border: none;
        border-radius: 50px;
        background-color: white;
        transition: all 0.2s;
    }
    .btn-five:hover{
      transform: scale(1.1);}
    .message{
    width: 1150px;
    height: 500px;
    margin: 5px 0 0 85px;
    background-image: linear-gradient(rgba(100, 98, 98, 0.8),rgba(117, 115, 115, 0.8)),url(contact.jpg);
    box-shadow: 0 0 9px rgba(0,0,0.5);
    border-radius: 50px;
    background-size: cover;
    padding: 30px;
   }
   .message button{
    width: 100%;
    height: 40px;
    border-radius: 50px;
    background-color: rgb(25, 70, 136);
    font-family: cambria;
    font-size: 25px;
    color:#ffffff;
   }

   
.cards {
    
    height: 330px;
    width:593px;
    margin: 45px 0 0 35px;
    box-shadow: 5px 5px 20px black;
    overflow:hidden;
    position:relative;
  }
 .cards img
{
    height:350px;
    width: 593px;
    margin: 0 0 0 -5px;
    border-radius: 3px;
    transition: 0.5s;
}
.cards .intro
{
    height: 70px;
    width:390px;
    padding: 6px;
    margin:-54px ;
    margin-left:1px;
    box-sizing: border-box;
    position: absolute;
    bottom: 55px;
    background: rgba(1, 13, 25, 0.5);
    color: white;
    transition: 0.5s;
}
.cards .intro h1
{
    font-size: 30px;
    font-family: cambria;
    color: #fff;
}
.cards .intro p
{
    
    font-size: 13.5px;
    font-family: cambria;
    margin: 28px;
   
    
}
.cards:hover
{
    cursor: pointer;
}
.cards:hover .intro
{
    height: 328px;
    width:593px;
    background-color: #234e7c;

}
.cards:hover .intro p
{
    opacity:1;
    visibility:visible;
}
.cards:hover img
{
    transform: scale(0.9);
}
.form-group{
  margin:5px 0 0 40px;
}
.btn-some{
  width: 250px;
        height: 50px;
        border: none;
        border-radius: 50%;
        text-align: center;
        background-color: #234e7c;
        color:white;
        margin:25px;
        font-size:23px;
        box-shadow: 0 0 9px rgb(6, 38, 145);
}
.btn-some:hover{
    background-image: linear-gradient(to right,#000080,#2e67a5);
    color:white;
  }
  h4{
    text-align:center;
    margin:25px 0 0 0;
  }

    </style>
</head>
<body>
  <main>
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
                    <a class="nav-link" href="#"><b> Events </b></a>
                    <hr>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="team.html"><b> Our Team </b></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="office_form.html"><b> Marketing </b></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="startup.html"><b> Startup </b></a>
                  </li>
                  
                  <li class="nav-item">
                    <a class="nav-link" href="http://localhost/IP%20Project/dorm.php"><b>Dorm Room Requisition</b></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="home1.html #contact"><b>Contact Us</b></a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
    </section>
    <div class="line"></div>
    <div class="line"></div>
    <div class="line"></div>
    <div class="container">
          <h2 style="font-family: cambria; color: #234e7c; font-weight: bold; font-size: 50px; text-align: center;">Events</h2>
          <button type="submit" class="btn btn-primary"><a class="nav-link" href="Hostevent.html" style="font-family: cambria; font-size: 20px;"><b>Host an event</b></a></button>
    </div>
    <div class="line"></div>
    <div class="line"></div>
    <div class="line"></div>
    <div class="container1 wow fadeInLeft">
      <h3>Upcoming Events</h3>
      <div class="line"></div>
      <button type="submit" class="btn btn-four"><a class="nav-link" href="calender.php" style="font-family: cambria; font-size: 20px; color: white;"><b>See Events In Calendar</b></a></button>
    </div>
    <div class="line"></div>
    <section>
      <?php
    if($stmt_result->num_rows>0)
    {
      while($data= $stmt_result->fetch_assoc())
      {
        if($data['End']>=$current)
          {
        
    ?>
    <div class="row">
      <?php
       $sdate=$data['Start'];
       $edate=$data['End'];
       $s1date=date("M d Y",strtotime($sdate));
       $e1date=date("M d Y",strtotime($edate));
      ?>
       <label class="date-label wow zoomIn"style=" margin: 2px 0 0 29px; font-family:cambria;font-weight:bold; font-size:25px; color:#000080;"><?php echo "$s1date - $e1date" ?></label>
     
       <div class="col-md-6">
       
         <img class="image-resize wow fadeInLeft" src="<?php echo $data['Image'] ?>" style="animation-delay: 0.5s;">
       </div>
       <div class="col-md-6 wow zoomIn" style="padding-top: 4px; animation-delay: 1s;">
         <div class="box" >
           <h4 style="font-size: 27px; text-align: center; font-weight: bold;"> <?php echo $data['Name'] ?></h4>
           <label><?php echo $data['Des1'] ?></label>
           <label><?php echo $data['Des2'] ?></label>
           <div class="line1" style="width:100px; height:20px;"></div>
             <button type="submit" class="btn btn-second"><a class="nav-link" href="<?php echo $data['Link'] ?>" target="_blank" style="font-family: cambria; font-size: 20px;"><b>REGISTER</b></a></button>
         </div>
       </div>
     </div>
     </div>
     <div class="line"></div>
     <?php
          }
      }
  }
}

$stmt->close();
$conn->close();
      ?>
 
  </section>
    <br> 
    
    <div class="container1 wow fadeInLeft">
      <h3>Past Events</h3>
      <div class="line"></div>
    </div>
    <div class="line"></div>
    <div class="line"></div>
    <section>
      <div class="col-md-12">
        <div class="row">
        <?php
        $conn= new mysqli('localhost','root','','events');
       if($conn->connect_error)
       {
        die('Connection Failed :' .$conn->connect_error);
       }
      else
      {
        $current=date('Y-m-d');
    $stmt= $conn->prepare("select * from eve");
    $stmt->execute();
    $stmt_result=$stmt->get_result();
    if($stmt_result->num_rows>0)
    {
      

?>
 <form action="" method="GET">
       <div class="row" style="margin:5 px 0 0 55px;">
       <div class="col-md-4">
          <div class="form-group" >
            <label for="" style="font-family: cambria; color:#234e7c; font-weight:bold; font-size:23px;">From</label>
            <input type="date" name="from_date" class="form-control my-2"  placeholder="fromdate">
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <label for=""style="font-family: cambria; color:#234e7c; font-weight:bold; font-size:23px;">To</label>
            <input type="date" name="to_date" class="form-control my-2"  placeholder="todate">
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <button type="submit" class="btn btn-some" style="font-family:cambria;">Filter Events</button>
          </div>
        </div>
       </div>
          </form>
          <?php
       if(isset($_GET['from_date']) && isset($_GET['to_date']) )
       {
        $from_date=$_GET['from_date'];
        $to_date=$_GET['to_date'];
        $fdate=date("Y-m-d",strtotime($from_date));
        $tdate=date("Y-m-d",strtotime($to_date));
        if($tdate>$current)
        {
          echo "<h4> Please Check Upcoming Events.</h4>";
        }
        elseif($fdate>$tdate)
        {
          echo "<h4> Please give right date.</h4>";
        }
        elseif ( $fdate<$current && $tdate<$current) 
        {
          $query1= $conn->prepare("select * from eve where End between '$fdate' and '$tdate' ");
          $query1->execute();
          $query1_result=$query1->get_result();
          if($query1_result->num_rows>0)
         {
          while($data2= $query1_result->fetch_assoc())
          {    
       ?>
         <div class="col-md-6">
            <div class="cards">
        <img src="<?php echo $data2['Image'] ?>" >
        <div class="intro">
         <a class="nav-link" href="<?php echo $data2['Link'] ?>" target="_blank" ><h1><?php echo $data2['Name'] ?></h1>
          <p><?php echo $data2['Des1'] ?></p>
           <p><?php echo $data2['Des2'] ?></p></a>
           </div>
        </div>
          </div>
          <?php
          }
        }
         else{
        echo "<h4> No Events To Show. </h4>";
      }
      }
    }
    
    else{
           while($data1= $stmt_result->fetch_assoc())
          {
            if($data1['End']<$current)
              {
          ?>
     
          <div class="col-md-6">
            <div class="cards">
        <img src="<?php echo $data1['Image'] ?>" >
        <div class="intro">
         <a class="nav-link" href="<?php echo $data1['Link'] ?>" target="_blank" ><h1><?php echo $data1['Name'] ?></h1>
          <p><?php echo $data1['Des1'] ?></p>
           <p><?php echo $data1['Des2'] ?></p></a>
           </div>
        </div>
          </div>

         
          <?php
         }
          }
          }
        }
      }
 
  $stmt->close();
  $conn->close();
  ?>

        </div>
      </div>
 </section>
 <div class="line"></div>
      <form action="https://formspree.io/f/mgebjoee" method="post">
        <div clas="col-md-8">
          <div class="contactform">
            <div class="row">
              <div class="col-md-8">
                <span id="lblresponse" class="tab-content"></span>
              </div>
            </div>  
    <div class="line"></div>
            <div class="message">
            <div class="row">
              <h3 style="text-align: center; font-family: cambria; font-weight: bold; color: rgb(253, 253, 253);">Message</h3>
              <div class="col-md-6">
                <input name="name" type="text" id="name" class="form-control my-2" placeholder="Name" required>
              </div>
              <br>
              <div class="col-md-6">
                <input name="email" type="email" id="email" class="form-control my-2" placeholder="Email" required>
              </div>
              <br>
            </div>
            <div class="row ">
              <div class="col-md-12">
                <input name="subject" type="text" id="subject" class="form-control my-2" placeholder="Subject" required>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <textarea name="meassage" id="message" cols="150" rows="10" class="form-control my-2" placeholder="Message" required></textarea>
              </div>
            </div>
            <button>Send Message</button>
          </div>
        </div>
        </div>
      </form>


  <script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" ></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
   

  <script>
    var swiper = new Swiper(".mySwiper", {
      slidesPerView: 1,
      spaceBetween: 30,
      loop: true,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
  </script>
  <script>
    $('.slider').slick({
  dots: true,
  infinite: true,
  speed: 300,
  slidesToShow: 2,
  slidesToScroll: 2,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
});
  </script>
   
    <script> 
       new WOW().init();
    </script>



</main>

</body>
</html>
