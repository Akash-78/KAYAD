<?php

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>
<!DOCTYPE html>
<html>

<head>
    <title>Student Info</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel='stylesheet' href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/main.css">
    <?php
    include './config.php';
    ?>
</head>

<body class="w3-black">
    <nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center">
        <img src="data:image/jpeg;base64,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" style="width:100%">
        <a href="#" class="w3-bar-item w3-button w3-padding-large w3-black">
            <i class="fa fa-home w3-xxlarge"></i>
            <p>HOME</p>
        </a>
        <a href="#about" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
            <i class="fa fa-user w3-xxlarge"></i>
            <p>ABOUT</p>
        </a>
        <a href="#contact" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
            <i class="fa fa-envelope w3-xxlarge"></i>
            <p>CONTACT</p>
        </a>
    </nav>

    <div class="w3-top w3-hide-large w3-hide-medium" id="myNavbar">
        <div class="w3-bar w3-black w3-opacity w3-hover-opacity-off w3-center w3-small">
            <a href="#" class="w3-bar-item w3-button" style="width:33% !important">HOME</a>
            <a href="#about" class="w3-bar-item w3-button" style="width:33% !important">ABOUT</a>
            <a href="#contact" class="w3-bar-item w3-button" style="width:33% !important">CONTACT</a>
        </div>
    </div>

    <div class="w3-padding-large" id="main">
        <div class="w3-container">
            <div class="w3-panel w3-padding-16 w3-black  w3-card">
                <h2>Student Info</h2>
                <form action="./maintest.php" method="POST">
                    <label>University Roll No.</label>
                    <input class="w3-input w3-border" type="number" placeholder="Student University Roll No..." min="0" id="uniRoll" name="uniRoll" required>
                    <button type="submit" class="w3-button w3-red w3-margin-top">Submit</button>
                </form>
            </div>
        </div>
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $uniRoll = $_POST['uniRoll'];
            $sql = "select * from sentry where roll_no=$uniRoll";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                $row = mysqli_fetch_assoc($result);
                if (mysqli_num_rows($result) > 0) {
                    echo "
<header class='w3-container w3-padding-32 w3-center w3-black' id='home'>
    <img src='https://glauniversity.in:8103/" . $row['roll_no'] . ".jpg' alt='image' class='w3-image' width='402' height='450'>
        <h1 class='w3-jumbo'>" . $row['name'] . "</h1>
        <h1 class='w3-hide-small'>" . $row['roll_no'] . "</h1>
        <p>" . $row['course'] . "</p>
    </header>
    <div class='w3-content w3-justify w3-text-grey w3-padding-64' id='about'>
        <h3 class='w3-padding-24 w3-text-light-grey'>About</h3>
        <p><span class='w3-large w3-text-white w3-margin-right'>Name:</span>" . $row['name'] . "</p>
        <p><span class='w3-large w3-text-white w3-margin-right'>University Roll No:</span>" . $row['roll_no'] . "</p>
        <p><span class='w3-large w3-text-white w3-margin-right'>Course:</span>" . $row['course'] . "</p>
        <p><span class='w3-large w3-text-white w3-margin-right'>Year:</span>" . $row['year'] . "</p>
        </p>
    </div>

    <div class='w3-padding-64 w3-content w3-text-grey' id='contact'>
        <h2 class='w3-text-light-grey'>Contacts</h2>
        <hr style='width:200px' class='w3-opacity'>

        <div class='w3-section'>
            <p><i class='fa fa-map-marker fa-fw w3-text-white w3-xxlarge w3-margin-right'></i> " . $row['addr'] . "
            </p>
            <p><i class='fa fa-phone fa-fw w3-text-white w3-xxlarge w3-margin-right'></i> Phone: +91 " . $row['mobile'] . "
                                                            </p>
            <p><i class='fa fa-envelope fa-fw w3-text-white w3-xxlarge w3-margin-right'> </i> Email: " . $row['email'] . "
            </p>
        </div><br>
    </div>
    ";
                } else {
                    echo "<script>alert('Student Not Exist')</script>";
                }
            } else {
                echo "Student Not Found ---->" . mysqli_error($conn);
            }
        }
        ?>

        <footer class="w3-content w3-padding-64 w3-text-grey w3-xlarge">
            <p class="w3-medium">Powered by <a href="https://github.com/akshaykumar-ak/College-Management-System" target="_blank" class="w3-hover-text-green">College Management System</a></p>
        </footer>
    </div>

</body>

</html>