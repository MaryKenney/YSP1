<?php
include('functions.php');
?>

    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Register your child with Young STEM Professionals, a Non-Profit Organization that provides Leadership & STEM Programs for Kids ages 5-17.">
        <meta name="author" content="Digital Frog">

        <title>Registration | Young STEM Professionals</title>

        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="https://kit.fontawesome.com/8394b8f877.js" crossorigin="anonymous"></script>
    </head>

    <body>

        <?php echo $header; ?>

        <main>
            <div class="container">
                <h1 style="text-align: center;">Register Your Child</h1>

                <h2>Registration Form</h2>
                <p>*Please fill out all the required fields</p>

                <form action="register_processing.php" method="post">
                    <div class="form-section" id="studentInfo">
                        <h3>Student Information</h3> <br>
                        <div class="form-body">
                            <label for="program">Program*</label>
                            <select name="program" id="program">
                                <option value=""></option>
                                <option value="Robotics">Robotics Summer Camp</option>
                                <option value="MadLab">MadLabs Summer Camp</option>
                                <option value="Genius">Genius Summer Camp</option>
                                <option value="After School">After School</option>
                            </select> <br>

                            <label for="childFirstName">First Name*</label>
                            <input type="text" name="childFirstName">

                            <label for="childLastName">Last Name*</label>
                            <input type="text" name="childLastName">

                            <label for="childDOB">Date of Birth*</label>
                            <input type="date" name="childDOB"> <br>

                            <label for="school">School*</label>
                            <input type="text" name="school">

                            <label for="grade">Grade*</label>
                            <input type="text" name="grade"> <br>

                            <label for="addressOne">Address Line 1*</label>
                            <input type="text" name="address1"> <br>

                            <label for="addressTwo">Address Line 2</label>
                            <input type="text" name="address2"> <br>

                            <label for="city">City*</label>
                            <input type="text" name="city">

                            <label for="state">State*</label>
                            <input type="text" name="state">

                            <label for="zipcode">Zip Code*</label>
                            <input type="text" name="zipcode"><br>

                            <label for="accommodations">Does your student need accommodations? If so, explain below.</label>
                            <input type="radio" name="accommodations" id="" value="Yes">Yes  
                            <input type="radio" name="accommodations" id="" value="No">No <br>
                    
                            <!-- insert textbox -->
                            <textarea name="accommodationBox" id="" cols="30" rows="10"></textarea> <br>


                            <label for="allergies">Does your student have allergies or food intolerances? If so, explain below.</label> 
                            <input type="radio" name="allergies" id="" value="Yes">Yes  
                            <input type="radio" name="allergies" id="" value="No">No <br>

                    
                            <!-- insert textbox -->
                            <textarea name="allergiesBox" id="" cols="30" rows="10"></textarea>
                        </div>
                    </div>

                    <div class="form-section" id="guardianInfo1">
                        <h3>Guardian 1 Information</h3> <br>
                        <div class="form-body">
                            <label for="gFirstName1">First Name*</label>
                            <input type="text" name="gFirstName1">

                            <label for="gLastName1">Last Name*</label>
                            <input type="text" name="gLastName1"><br>

                            <label for="relation1">Relation to Student*</label>
                            <select name="relation1" id="relation">
                                <option value=""></option>
                                <option value="Mother">Mother</option>
                                <option value="Father">Father</option>
                                <option value="Relative">Relative</option>
                                <option value="Guardian">Guardian</option>
                            </select> <br>

                            <label for="email1">Email*</label>
                            <input type="text" name="email1">

                            <label for="phone1">Phone*</label>
                            <input type="text" name="phone1">
                        </div> 
                    </div>

                    <div class="form-body cb-terms">
                        <input type="checkbox" name="terms" id="terms"><label for="terms"><a href="terms.pdf" class="termsLabel">*By checking this box you have read and agree to the terms and conditions</a></label> <br>
                    </div>


                    <input type="submit" class="sub-btn" name="student-submissionBtn">
                </form>
            </div>
        </main>

        <?php echo $footer; ?>

    </body>

    </html>