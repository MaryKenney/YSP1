<?php
	$header = "<header>\n
    <div class='container header'>\n
        <a href='index.php'>\n
            <span class='navbar-brand'></span>\n
        </a>\n
        <button class='navbar-toggle' type='button' data-target='#main-navigation'>\n
            <i class='fas fa-bars'></i>\n
        </button>\n
        <ul id='main-navigation' class='navbar'>\n
            <li><a href='index.php' title='Home'>Home</a></li>\n
            <li><a href='about.php' title='About'>About</a></li>\n
            <li><a href='partner.php' title='Partner'>Partner</a></li>\n
            <li><a href='get-involved.php' title='Get Involved'>Get Involved</a></li>\n
            <li><a href='register.php' title='Register a Student'>Register a Student</a></li>\n
        </ul>\n
        </nav>\n
    </div>\n
</header>\n";

$footer = "<footer>\n
<div class='container'>\n
    <div class='row' id='footer-space'>\n
        <a href='index.php'><img class='column-lg-2 column-xs-12' id='ft-logo' src='img/logo.webp' alt='Young STEM Professionals Logo'></a>\n
        <div class='column-md-1 column-xs-12'></div>\n
        <div class='column-md-2 column-xs-12'>\n
            <div class='ft-menu'>\n
                <p><b>Important Links</b></p>\n
                <ul class='onespc'>\n
                    <li><a href='index.php' title='Home'>Home</a></li>\n
                    <li><a href='about.php' title='About'>About</a> </li>\n
                    <li><a href='partner.php' title='Partner'>Partner</a></li>\n
                    <li><a href='get-involved.php' title='Get Involved'>Get Involved</a></li>\n
                    <li><a href='register.php' title='Register a Student'>Register a Student</a></li>\n
                </ul>\n
            </div>\n
        </div>\n
        <div class='column-md-3 column-xs-12'>\n
            <p><b>Disclaimer</b></p>\n
            <p class=\"disclaimer\">© Digital Frog 2022 | This website is intended for class use only - CTEC 4350</p>\n
        </div>\n
        <div class='column-md-2 column-xs-12'>\n
            <p><b>Contact Us</b></p>\n
            <div class=\"social-media-bar\">
                <i class=\"fa-brands fa-facebook-square\"></i>
                <i class=\"fa-brands fa-instagram-square\"></i>
                <i class=\"fa-brands fa-twitter-square\"></i>
                <i class=\"fa-brands fa-linkedin\"></i>
            </div>\n
        </div>\n
        <div class='column-md-2 column-xs-12'>\n
            <a href=\"staff_login.php\" class=\"sign-in\" id=\"login-button\">Staff Login</a>
        </div>\n
    </div>\n
</div>\n
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js' integrity='sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==' crossorigin='anonymous'></script>\n
<script src='js/app.js'></script>\n
</footer>\n";

$logoutFooter = "<footer>\n
<div class='container'>\n
    <div class='row' id='footer-space'>\n
        <a href='index.php'><img class='column-lg-2 column-xs-12' id='ft-logo' src='img/logo.webp' alt='Young STEM Professionals Logo'></a>\n
        <div class='column-md-1 column-xs-12'></div>\n
        <div class='column-md-2 column-xs-12'>\n
            <div class='ft-menu'>\n
                <p><b>Important Links</b></p>\n
                <ul class='onespc'>\n
                    <li><a href='index.php' title='Home'>Home</a></li>\n
                    <li><a href='about.php' title='About'>About</a> </li>\n
                    <li><a href='partner.php' title='Partner'>Partner</a></li>\n
                    <li><a href='get-involved.php' title='Get Involved'>Get Involved</a></li>\n
                    <li><a href='register.php' title='Register a Student'>Register a Student</a></li>\n
                </ul>\n
            </div>\n
        </div>\n
        <div class='column-md-3 column-xs-12'>\n
            <p><b>Disclaimer</b></p>\n
            <p class=\"disclaimer\">© Digital Frog 2022 | This website is intended for class use only - CTEC 4350</p>\n
        </div>\n
        <div class='column-md-2 column-xs-12'>\n
            <p><b>Contact Us</b></p>\n
            <div class=\"social-media-bar\">
                <i class=\"fa-brands fa-facebook-square\"></i>
                <i class=\"fa-brands fa-instagram-square\"></i>
                <i class=\"fa-brands fa-twitter-square\"></i>
                <i class=\"fa-brands fa-linkedin\"></i>
            </div>\n
        </div>\n
        <div class='column-md-2 column-xs-12'>\n
            <form action='' method='post'>
                <input type='submit' name='submitLogout' value='Logout'>
            </form>
        </div>\n
    </div>\n
</div>\n
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js' integrity='sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==' crossorigin='anonymous'></script>\n
<script src='js/app.js'></script>\n
</footer>\n";
?>   