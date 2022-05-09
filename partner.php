<?php
include ('functions.php');
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Young STEM Professionals is a 501 (c) (3) Non-Profit Organization that provides Leadership & STEM Programs for Kids ages 5-17.">
    <meta name="author" content="Digital Frog">

    <title>Partner With Us | Young Stem Professionals</title>

    <link rel="stylesheet" href="css/style.css">

    <script src="https://kit.fontawesome.com/8394b8f877.js" crossorigin="anonymous"></script>
</head>

<body>
    <?php echo $header; ?>

    <main>
        <div class="container">
            <h1 style="text-align: center;">Partner with YSP</h1>
            <h2>Become an Education Partner</h2>
            
            <div class="row">
                <div class="col-6">
                    <p>If you are interested in partnering with Young STEM Professionals to help spread a passion for leadership building skills and STEM education to children and youth, contact our staff today! Our representatives will respond to your message within 24 - 48 hours.</p>
                </div>

                <div class="col-6">
                    <form action="partner_processing.php" method="post">
                        <div class="form-section">
                            <h3>Contact Information</h3>
                            <p style="text-align: center;">*required fields</p>
                            <div class="form-body">
                                <span class="form-info">First Name*: </span><input type="text" name="fname" placeholder="First Name"><br>
                                <span class="form-info">Last Name*: </span><input type="text" name="lname" placeholder="Last Name"><br>
                                <span class="form-info">Phone Number*: </span><input type="text" name="phone" placeholder="123-456-789"><br>
                                <span class="form-info">Email*: </span><input type="text" name="email" placeholder="youremail@address.com"><br>
                                <span class="form-info">Name of Organization*: </span><input type="text" name="orgName" placeholder="Your Organization"><br>
                                <span class="form-info">City*: </span><input type="text" name="orgLocation" placeholder="ex. Cedar Hill, Desoto,..."><br>
                               
                                <span class="form-info">About Your Orgnization: </span><input class="textarea" type="textarea" name="orgAbout" placeholder="What does your organization do?"><br>

                                <span class="form-info">Message*: </span><input class="textarea" type="textarea" name="orgMessage" placeholder="Why you're interested in partnering with YSP?"><br>

                                <input class="sub-btn" id="partner-subBtn" type="submit" name="partner-submissionBtn">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <?php echo $footer; ?>

</body>
</html>