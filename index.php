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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="https://kit.fontawesome.com/8394b8f877.js" crossorigin="anonymous"></script>
    </head>

    <body>

        <?php echo $header; ?>

        <main>
            <div class="atf">
                <div class="atf-container">
                    <h1 id="col-spc">Young Stem Professionals</h1>
                    <h2>A non-profit organization providing leadership and STEM programs for kids 5-17. Register today to STEM-ulate the minds of tomorrow.</h2></br>
                </div>
                <div class="atf-container">
                    <a href="register.php" class="primary-btn-hero" title="Register">Register a Student</a>
                </div>
            </div>
            <div class="container">

                    <div class="row" id="ctr">
                        <section class = "about-us">
                            <h2>Why Young STEM Professionals?</h2>
                            <div class="section-info">
                                <div class="card" id="who-card">
                                    <i class="fa-solid fa-people-group"></i>
                                    <h4>Who We Are</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean laoreet et leo a condimentum. Nulla orci nibh, fringilla a fermentum eu, fermentum at elit.</p>
                        
                                    <button class="secondary-btn"><a href="about.html">Learn More</a></button>
                                </div>
                
                                <div class="card" id="what-card">
                                    <i class="fa-solid fa-gears"></i>
                                    <h4>What We Do</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean laoreet et leo a condimentum. Nulla orci nibh, fringilla a fermentum eu, fermentum at elit.</p>
                        
                                    <button class="secondary-btn"><a href="programs.html">Explore Programs</a></button>
                                </div>
                        
                                <div class="card" id="why-card">
                                    <i class="fa-solid fa-atom"></i>
                                    <h4>Why We Do It</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean laoreet et leo a condimentum. Nulla orci nibh, fringilla a fermentum eu, fermentum at elit.</p>
                        
                                    <button class="secondary-btn"><a href="get-involved.php">Get Involved</a></button>
                                </div>
                            </div>
                    </section>
                </div>
            </div>

            <div class="container">
                 <div class="row" id="ctr">
                        <!-- programs -->
                        <section class="programs">
                            <h3>Our Programs</h3>
                            <div class="section-info">
                                <div class="card" id="madlab">
                                    <img src="img/Coding-3.jpg" alt="">
                                    <h4>Mad Lab</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean laoreet et leo a condimentum. Nulla orci nibh, fringilla a fermentum eu, fermentum at elit.</p>
                                </div>
                        
                                <div class="card" id="robotics">
                                    
                                    <img src="img/Jr-Robotics-2.jpg" alt="">
                                    <h4>Robotics</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean laoreet et leo a condimentum. Nulla orci nibh, fringilla a fermentum eu, fermentum at elit.</p>
                                </div>
                        
                                <div class="card" id="genius">
                                    <img src="img/Racing-Competition.jpg" alt="">
                                    <h4>Genius</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean laoreet et leo a condimentum. Nulla orci nibh, fringilla a fermentum eu, fermentum at elit.</p>
                                </div>
                            </div>
                            <button class="primary-btn"><a href="programs.html">Register Your Student</a></button>
                            
                        </section>
    
                </div>
            </div>

        </main>

        <?php echo $footer; ?>

    </body>

    </body>

    </html>