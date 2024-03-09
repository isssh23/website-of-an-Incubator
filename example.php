<!-- index.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Owl Carousel with Database</title>
    <link rel="stylesheet" type="text/css" href="owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="owl.theme.default.min.css">
    <style>
        .owl-carousel .item {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 200px;
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <div class="owl-carousel owl-theme">
        <?php
        // Connect to the database
        $conn = mysqli_connect('localhost', 'root', '', 'events');
        
        // Query the database to retrieve carousel data
        $query = "SELECT * FROM eve";
        $result = mysqli_query($conn, $query);

        // Generate HTML markup for each slide
        while ($row = mysqli_fetch_assoc($result)) {
            $imageUrl = $row['Image'];
            $caption = $row['Name'];

            echo '<div class="item">';
            echo '<img src="' . $imageUrl . '" alt="' . $caption . '">';
            echo '</div>';
        }

        // Close the database connection
        mysqli_close($conn);
        ?>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="owl.carousel.min.js"></script>
    <script>
        $(document).ready(function(){
            $(".owl-carousel").owlCarousel({
                items: 3,
                loop: true,
                margin: 10,
                nav: true,
                autoplay: true,
                autoplayTimeout: 2000,
                autoplayHoverPause: true
            });
        });
    </script>
</body>
</html>
