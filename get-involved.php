<?php
    include('functions.php');
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Get involved with Young STEM Professionals, a Non-Profit Organization that provides Leadership & STEM Programs for Kids ages 5-17.">
    <meta name="author" content="Digital Frog">

    <title>Get Involved | Young STEM Professionals</title>

    <link rel="stylesheet" href="css/style.css">

    <script src="https://kit.fontawesome.com/8394b8f877.js" crossorigin="anonymous"></script>

</head>

<body>

        <?php echo $header; ?>

        <main>
            <div class="container">
                <div class="row" id="ctr">
                    <h1>Help Our Cause</h1>
                    <h2>Donate</h2>
                    <p>Your generous tax deductible donation, contributions and support to Young STEM Professionals will enable us to meet our mission and objectives to help Youth and Children to explore STEM opportunities for a better future - for themselves
                        and mankind. Help us STEM-ulate the minds of the future.</p>

                    <a class="cta-btn" target="_blank" href="https://www.paypal.com/donate?token=2TEUuots6rCX1X_BlohCokpWBDKSb9IPvVEkmvnCr226BBdhTJAvw2s7nGVbwgHxhRrhzhKfsZAA739s">Donate via Paypal</a>
                </div>
                <div class="row">
                    <h2>Volunteer Application Form</h2>
                    <p>Thank you for your interest in volunteering with Young STEM Professionals. Please complete the application fully, and we will be in contact with you soon.</p>

                    <form action="vol-form.php" method="post">

                        <div class="form-section">
                            <h3>Contact Information</h3>
                            <div class="form-body">
                                <table>
                                    <tr>
                                        <td class="form-info">First Name: </td>
                                        <td><input type="text" name="fname"></td>
                                    </tr>
                                    <tr>
                                        <td class="form-info">Last Name: </td>
                                        <td><input type="text" name="lname"></td>
                                    </tr>
                                    <tr>
                                        <td class="form-info">Phone Number: </td>
                                        <td><input type="text" name="phone"></td>
                                    </tr>
                                    <tr>
                                        <td class="form-info">Email Address: </td>
                                        <td><input type="text" name="email"></td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                        <div class="form-section">
                            <h3>Experience</h3>
                            <div class="form-body">
                                <table id="experience">
                                    <tr>
                                        <td class="form-info">Do you have STEM experience -- professionally or personally? If so, explain</td>
                                    </tr>
                                    <tr>
                                        <td class="inline-fl">
                                            <label for="expYes">Yes</label>
                                            <input type="radio" name="volExp" id="expYes" value="expYes">

                                        </td>
                                        <td class="inline-fl">
                                            <label for="expNo">No</label>
                                            <input type="radio" name="volExp" id="expNo" value="expNo">
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                        <div class="form-section">
                            <h3>Programs & Availability</h3>
                            <div class="form-body">
                                <table>
                                    <tr>
                                        <td class="form-info">What program(s) are you interested in volunteering for?</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="programs" id="robotics" value="robotics">Robotics 
                                            <input type="checkbox" name="programs" id="madlab" value="madlab">MadLab 
                                            <input type="checkbox" name="programs" id="geniusbar" value="geniusbar">Genius Bar <br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="form-info">Which day(s) of the week are you available?</td>
                                    </tr>
                                    <tr>
                                        <td class="inline-fl">
                                            <input type="checkbox" name="volDays" id="sunday" value="sunday">
                                            <label for="sunday">Sunday</label>
                                        </td>
                                        <td class="inline-fl">
                                            <input type="checkbox" name="volDays" id="monday" value="monday">
                                            <label for="monday">Monday</label>
                                        </td>
                                        <td class="inline-fl">
                                            <input type="checkbox" name="volDays" id="tuesday" value="tuesday">
                                            <label for="tuesday">Tuesday</label>
                                        </td>
                                        <td class="inline-fl">
                                            <input type="checkbox" name="volDays" id="wednesday" value="wednesday">
                                            <label for="wednesday">Wednesday</label>
                                        </td>
                                        <td class="inline-fl">
                                            <input type="checkbox" name="volDays" id="thursday" value="thursday">
                                            <label for="thursday">Thursday</label>
                                        </td>
                                        <td class="inline-fl">
                                            <input type="checkbox" name="volDays" id="friday" value="friday">
                                            <label for="friday">Friday</label>
                                        </td>
                                        <td class="inline-fl">
                                            <input type="checkbox" name="volDays" id="saturday" value="saturday">
                                            <label for="saturday">Saturday</label>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <input class="sub-btn" type="submit">
                        </div>
                    </form>
                </div>
            </div>

        </main>

        <?php echo $footer; ?>

    </body>

    </html>