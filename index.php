<?php
include ('functions.php');
?>

    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="A science, technology, engineering, and math STEM Education and Enrichment Program for kids ages 5 - 17 using project-based, 21st Century leadership skills.">
        <meta name="author" content="Digital Frog">

        <title>STEM Programs for Kids | Young STEM Professionals</title>

        <link rel="stylesheet" href="css/style.css">

        <script src="https://kit.fontawesome.com/8394b8f877.js" crossorigin="anonymous"></script>
    </head>

    <body>

        <?php echo $header; ?>

        <main>
            <div class="atf">
                <div class="atf-container">
                    <h1 id="col-spc">Young Stem Professionals</h1>
                    <h2>A non-profit organization providing leadership and STEM programs for kids 5-17</h2>
                    <a href="register.php" class="cta-btn" title="Register">Register a Student</a>
                </div>
            </div>
            <div class="container">

                <div class="row" id="ctr">
                    <h2>About Young Stem Professionals</h2>
                    <p>Young Stem Professionals is a 501©3 non-profit organization that encourages youth grades K - 12 to examine and explore the world of science, technology, engineering, and math, while developing leadership skills. Our programs encourage
                        young people to strengthen their skills in problem-solving, performing hands-on, project-based activities, and explore the world of STEM-related opportunities, all in a fun and supportive environment.
                    </p>
                    <a href="about.php" class="cta-btn" id="btn-ctr" title="About">About</a>
                </div>

                <div class="partner-col">
                    <h2>Current Partners</h2>
                    <div class="row">
                        <div class="col-4">
                            <a href="https://bishopartstheatre.org/" target="_blank"><img src="img/Bishop-Arts-Theatre-Logo-Solid.jpg"></a>
                            <a href="https://bishopartstheatre.org/" target="_blank"><b>Bishop Arts Theatre Center</b></a>
                        </div>
                        <div class="col-4">
                            <img src="img\placeholder-image.png">
                            <p><b>Partner Name #2</b></p>
                        </div>
                        <div class="col-4">
                            <img src="img\placeholder-image.png">
                            <p><b>Partner Name #3</b></p>
                        </div>
                    </div>
                </div>
            </div>

        </main>

        <?php echo $footer; ?>

    </body>

    </body>

    </html>