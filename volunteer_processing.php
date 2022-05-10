<?php 
include ("dbconn.inc.php");
include ("functions.php");

$conn = dbConnect(); 

if(isset($_POST["volunteer-submissionBtn"])) {
    $required = array("fname", "lname", "phone", "email", "volExp", "programs", "volDays");
    $expected = array("fname", "lname", "phone", "email", "volExp", "expBox", "programs", "volDays");

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
        // outputing confirmation message
        $experienceStr = nl2br(htmlentities($expBox));
        // $mondayList = implode(", ", $monday);
        // $tuesdayList = implode(", ", $tuesday);
        // $wednesdayList = implode(", ", $wednesday);
        // $thursdayList = implode(", ", $thursday);

        $programsList = implode(", ", $programs);
        // $volDaysList = implode(',', $volDays);



        $output = "
        <p>Thank you for interest in partnering with YSP! We look forward to connecting with you.</p>
        
        <b>Organization Information</b>
        <p>Contact: $fname $lname</p>
        <p>Phone: $phone</p>
        <p>Email: $email</p>
        <p>Experience: $volExp - $experienceStr</p>
        <p>Programs: $programsList </p>
        <p>Availability: $volDays</p>";

        // emailing confirmation message
        $subject = "Young STEM Professional Partner Interest";
        $from = "YSP@youngstemprofessionals.org";

        $msg = "<html>
        <body>
            <b>Hello, $fname $lname!<b>
            <p>Thank you for your interest in volunteering with Young STEM Professionals. A member of YSP will be in touch in regards to next steps soon.</p> <br> <br> 

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


        // adding to db 
        $stmt = $conn->stmt_init();

        $sql = "INSERT INTO volunteers (firstName, lastName, email, phone, experience, experienceStr, programs, availability) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";


        $stmt->prepare($sql);
        $stmt->bind_param('ssssssss', $fname, $lname, $email, $phone, $volExp, $expBox, $programs, $volDaysList);

        if($stmt->execute()) {
            $update = "<span>Query Executed</span>";
        } else {
            $update = "<span>Query didn't execute</span>";
        }

        $stmt->close();
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="https://kit.fontawesome.com/8394b8f877.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php echo $header; ?>
    <main>
            <div class="container">
                <?php echo $output?>

                <h2 style="text-align: center;">Help Our Cause</h2>
                <h3>Donate</h3>
                <p>Your generous tax deductible donation, contributions and support to Young STEM Professionals will enable us to meet our mission and objectives to help Youth and Children to explore STEM opportunities for a better future - for themselves
                    and mankind. Help us STEM-ulate the minds of the future.</p>

                <a class="cta-btn" target="_blank" href="https://www.paypal.com/donate?token=2TEUuots6rCX1X_BlohCokpWBDKSb9IPvVEkmvnCr226BBdhTJAvw2s7nGVbwgHxhRrhzhKfsZAA739s">Donate via Paypal</a>

            </div>

        </main>
    <?php echo $footer; ?>
</body>
</html>