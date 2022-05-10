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

        <title>About Young STEM Professionals | Education and Enrichment Programs</title>

        <link rel="stylesheet" href="css/style.css">

        <script src="https://kit.fontawesome.com/8394b8f877.js" crossorigin="anonymous"></script>
    </head>

    <body>

        <?php echo $header; ?>

        <main>
            <div class="container">
                <h1 style="text-align: center;">About Us</h1>

                <div class="row">
                    <div class="column-6">
                        <p>At Young STEM Professionals, we have created a fun and engaging enrichment program for kids ages 5 - 17 by using two major components. First, Young STEM Professionals provides education advancement and introduces young adults and
                            children to Science, Technology, Engineering and Math. In our programs, participants will enhance their problem-solving skills, perform hands-on activities in project-based learning, and explore the world of potential STEM-related
                            career paths and opportunities.</p>

                        <p>Our second component involves providing youth leadership development training activities where participants will perform exercises in trust building, communication skills, conflict resolution, effective supervisory skillsets, teamwork,
                            and understanding leadership roles.</p><br>

                        <a href="register.php" class="primary-btn" id="btn-ctr" title="Register a Student">Register a Student</a>
                    </div><br>

                    <div class="column-6"><img src="img/Environmental-STEM.jpg"></div>
                </div>
                <h2 id="ctr">Our Objectives</h2>

                <div class="row">
                    <div class="column-6"><img src="img/Jr-Robotics-2.jpg"></div>
                    <div class="column-6">
                        <p>Young STEM Professionals’ objectives include providing general guidance in STEM fundamentals to underrepresented youth and children grades K - 12. We provide ongoing Science, Technology, Engineering, and Math general education
                            programs with hands-on and project-based learning.</p>
                            
                            <p> Our friendly, supportive staff assist youth in developing leadership skills, preparing them for the 21st century workplace and fostering interest in the development of STEM
                            areas and career paths. We promote personal and social responsibility among underrepresented minority youth with STEM prospective.</p><br>
                        <a href="partner.php" class="primary-btn" id="btn-ctr" title="Partner with Us">Partner with Us</a>
                    </div>
                </div><br>

                <br><br>
            <section class="testimonials">
                <h3 id="ctr">Hear from the Community</h3><br>
                <div class="section-info">
                    <div class="card column-lg-6 column-xs-12" id="tiffany">
                        <div class="header">
                            <img src="img/tiffany_jackson.jpg" alt="">
                            <div class="header-info">
                                <p id="name">Tiffany Jackson</p>
                                <p id="role">Director of Education, Bishop Arts Theatre Center</p>
                                <img src="img/Bishop-Arts-Theatre-Logo-Solid.jpg" alt="">
                            </div>
                        </div>
                        <p>"Bishop Arts Theatre Center's Girls of Color Discovering STEAM program has been a success through a partnership with Young STEM Professionals. The instructors have created a safe inclusive space for our young ladies ages 11-18 to engage in STEM project-based learning while increasing their self-efficacy. The organization has also created a pathway for students to consider pursuing career opportunities in STEM through early exposure. We are very grateful for the collaboration."</p>
                    </div>
                    <div class="card column-lg-6 column-xs-12">
                        <div class="header">
                            <img src="img/Nancy_Truax.jpg" alt="">
                            <div class="header-info">
                                <p id="name">Nancy Truax</p>
                                <p id="role">YSP Team Member</p>
                                <img src="img/logo.webp" alt="">
                            </div>
                        </div>
                        
                        <p>"For the past 5 years, I have had the pleasure to be a part of the Young STEM Professionals and Engineering for Kids. I love watching students learn and develop innovative creations of their own. As technology grows, and the world changes around us, I often learn with the students. While working with Engineering for Kids, I was honored to be Teacher of the Month in 2020. I am excited to be an instructor with Young STEM Professionals and I enjoy my time working with the children of the community that Young STEM Professionals serves."</p>
                    </div>
                </div>
            </section>
            </div>

        </main>

        <?php echo $footer; ?>

    </body>

    </html>