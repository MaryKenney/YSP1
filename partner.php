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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://kit.fontawesome.com/8394b8f877.js" crossorigin="anonymous"></script>
</head>

<body>
    <?php echo $header; ?>

    <main>
        <div class="container">
            <h1 style="text-align: center;">Partner with YSP</h1>
            <h2>Become an Education Partner</h2>
            
            <div class="row">
                <div class="column-12">
                    <p>If you are interested in partnering with Young STEM Professionals to help spread a passion for leadership building skills and STEM education to children and youth, contact our staff today! Our representatives will respond to your message within 24 - 48 hours.</p>
                </div>

                <div class="column-12">
                    <div id="partnerForm">
                        <div id="err"></div>
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
                                    <span class="form-info">Website*: </span><input type="text" name="orgWebsite" placeholder="www.organizationsite.com"><br>
                                    <span class="form-info">City*: </span><input type="text" name="orgLocation" placeholder="ex. Cedar Hill, Desoto,..."><br>
                                
                                    <span class="form-info">About Your Orgnization*: </span><br><textarea class="textarea" type="textarea" name="orgAbout" placeholder="What does your organization do?"></textarea> <br>

                                    <span class="form-info">Message*: </span><br><textarea class="textarea" type="textarea" name="orgMessage" placeholder="Why you're interested in partnering with YSP?"></textarea> <br><br>

                                    <input class="primary-btn" id="partner-subBtn" type="submit" name="partner-submissionBtn">
                                </div>
                            </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php echo $footer; ?>

</body>
</html>