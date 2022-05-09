<?php 
include ("dbconn.inc.php");
include ("functions.php");

$conn = dbConnect(); 

if(isset($_POST["volunteer-submissionBtn"])) {
    $required = array("fname", "lname", "phone", "email", "volExp", "volDays");
    $expected = array("fname", "lname", "phone", "email", "volExp", "volDays");

    $missing = array();

    foreach ($expected as $field) {
        $userInput = $_POST[$field];

        if (in_array($field, $required) && empty($userInput)) {
            array_push($missing, $field);
        } else {
            if(!isset($_POST[$field])) {
                ${$field} = "";
            } else {
                ${$field} = $_POST[$field];
            }
        }      
    }


    $output = ""; 
    if(empty($missing)) {

        if($volExp == 'expYes') {
            $volExp = 'Yes';
        }

        $daysList = implode(", ", $volDays);

        $output = "
        <p>Thank you for interest in volunteering with YSP! We look forward to connecting with you.</p>
        
        <b>Contact Information</b>
        <p>Name: $fname $lname</p>
        <p>Phone: $phone</p>
        <p>Email: $email</p>
        <p>Experience: $volExp</p> 
        <p>Availability: $daysList</p> ";


        // emailing confirmation message
        $subject = "Young STEM Professional Volunteer Interest";
        $from = "YSP@youngstemprofessionals.org";

        $msg = "<html>
        <body>
            <b>Hello, $fname $lname!<b>
            <p>Thank you for your interest in partnering with Young STEM Professionals. A member of YSP will be in touch in regards to next steps soon.</p> <br> <br> 

            $output

            <p>Have a great day!</p>
            <p>The YSP Team</p>
        </body>
        </html>"; 

        // To send HTML mail, the Content-type header must be set
        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        
        // Create email headers
        $headers .= 'From: '.$from."\r\n".
            'Reply-To: '.$from."\r\n" .
            'X-Mailer: PHP/' . phpversion();
 
        
        mail($email, $subject, $msg, $headers);
    } else {
        $missingFieldList = implode(", ",$missing);
		$output = "The following fields are missing from your post, please go back and fill them in.  Thank you. <br>
						<b>Missing fields: $missingFieldList </b>
					";
    }

} 

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Register your child with Young STEM Professionals, a Non-Profit Organization that provides Leadership & STEM Programs for Kids ages 5-17.">
    <meta name="author" content="Digital Frog">

    <title>Get Involved | Young STEM Professionals</title>

    <link rel="stylesheet" href="css/style.css">

    <script src="https://kit.fontawesome.com/8394b8f877.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php echo $header; ?>
    <main>
            <div class="container">
                <h1 style="text-align: center;">Help Our Cause</h1>
                <h2>Donate</h2>
                <p>Your generous tax deductible donation, contributions and support to Young STEM Professionals will enable us to meet our mission and objectives to help Youth and Children to explore STEM opportunities for a better future - for themselves
                    and mankind. Help us STEM-ulate the minds of the future.</p>

                <a class="cta-btn" target="_blank" href="https://www.paypal.com/donate?token=2TEUuots6rCX1X_BlohCokpWBDKSb9IPvVEkmvnCr226BBdhTJAvw2s7nGVbwgHxhRrhzhKfsZAA739s">Donate via Paypal</a>

                <?php echo $output?>

            </div>

        </main>
    <?php echo $footer; ?>
</body>
</html>