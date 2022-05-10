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
                    <div class="form-section">
                        <h3>Child's Information</h3>
                        <div class="form-body">
                            <span class="form-info">Child's Full Name*: </span><input type="text" name="childname"><br>
                            <span class="form-info">Child's Date of Birth*: </span><input type="date" name="childdob"><br>
                            <span class="form-info">Address*: </span><input type="text" name="childaddress"><br>
                            <span class="form-info">Chronic Physical Problems/Pertinent Developmental Info/Communicable
                        Diseases/Special Accommodations Needed (please explain)*: </span>
                            <br>
                            <input type="textarea" class="textarea" name="childinfo"><br>
                            <span class="form-info">Allergies or Intolerance to Food, Medications, etc. (please list allergies and actions to take in an emergency situation)*:</span>
                            <br>
                            <input type="textarea" class="textarea" name="childallergies"><br>
                            <span class="form-info">Medications Child Takes*: </span>
                            <br>
                            <input type="textarea" class="textarea" name="childmedication"><br>
                        </div>
                    </div>

                    <div class="form-section">
                        <h3>Parent/Guardian Information</h3>
                        <div class="form-body">
                            <span class="form-info">First Parent/Guardian Full Name*: </span><input type="text" name="parentname1"><br>
                            <span class="form-info">Phone Number*: </span><input type="text" name="parentphone1"><br>
                            <span class="form-info">Email*: </span><input type="text" name="parentemail1"><br> 
                            <span class="form-info">Second Parent/Guardian Full Name*: </span><input type="text" name="parentname2"><br>
                            <span class="form-info">Phone Number*: </span><input type="text" name="parentphone2"><br>
                            <span class="form-info">Email*: </span><input type="text" name="parentemail2"><br>
                        </div>
                    </div>

                    <div class="form-section">
                        <h3>Please select a program*:</h3>
                        <select name="program" class="programs" id="programs">
                            <option value=""></option>
                            <option value="Program 1 | Start Date - End Date">Program 1 | Start Date - End Date</option>
                            <option value="Program 2 | Start Date - End Date">Program 2 | Start Date - End Date</option>
                            <option value="Program 3 | Start Date - End Date">Program 3 | Start Date - End Date</option>
                        </select>
                    </div>
                    <div class="form-section">
                        <h3>Agreements</h3>
                        <div class="form-body">

                            <p>By checking the box below, you agree to the following terms and conditions: </p>
                            <div class="termList">
                                <ul>
                                    <li>I agree to inform the Young STEM Professionals at 469-844-STEM (7863) within 24 hours if my child or any member of the household develops a reportable communicable disease (immediate notification required if the disease
                                        is life threatening).
                                    </li>
                                    <li>The Young STEM Professionals will attempt to notify parents/guardians using the contact information above whenever their child becomes ill and the parent/guardian will arrange to have the child picked up as soon as
                                        possible.
                                    </li>
                                    <li>I hereby authorize my child’s photo to appear in the media or to be used to promote or publicize our programs.</li>
                                    <li>In the event I cannot be reached in an emergency, I hereby give permission to the Young STEM Professionals’ staff to seek medical treatment at the nearest medical facility. I understand that I am responsible for medical
                                        expenses incurred by my child and that the Young STEM Professionals advises I carry health insurance for my child. </li>
                                    <li>All required forms will be completed and submitted prior to the start of the registered session.</li>
                                    <li>The Young STEM Professionals reserves the right to require identification of any person picking up your child.</li>
                                    <li>The Young STEM Professionals will release child to the school staff member after camp has ended for the day.</li>
                                    <li>I give permission for my middle/high school to sign in/out of the STEM program if I do not come inside the to sign-in or sign-out my child to/from the daily program.</li>
                                    <li>I hereby hold the Young STEM Professionals and their respective officers, directors, agents, employees and contractors harmless from and against any and all third-party claims, demands, liabilities, and expenses, including
                                        reasonable attorneys’ fees and litigation expenses for any asserted property damage, injury, or death of any person (collectively “claims”) arising from the sole negligence or willful misconduct.</li>
                                    <li>In the event of serious disciplinary problems, the Young STEM Professionals staff reserves the right to immediately terminate a child through written or verbal notice.</li>
                                    <li>The Young STEM Professionals does not assume responsibility for the child until the child arrives and signs into the Program and does not assume responsibility for the child after the child signs out of the Program.</li>
                                </ul>
                            </div>
                            <div class="terms" id="ctr"><input type="checkbox" name="terms">*I agree to the Terms & Conditions.</div>
                            <input type="submit" class="sub-btn" name="student-submissionBtn">
                        </div>
                    </div>

                </form>

            </div>

        </main>

        <?php echo $footer; ?>

    </body>

    </html>