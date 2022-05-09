<?php 
include ("dbconn.inc.php");
include ("functions.php");

$conn = dbConnect(); 

if(isset($_POST["student-submissionBtn"])) {
    $required = array("childname", "childdob", "childaddress", "childinfo", "childallergies", "childmedication", "parentname1", "parentphone1", "parentemail1", "parentname2", "parentphone2", "parentemail2", "programs", "terms");

    $expected = array("childname", "childdob", "childaddress", "childinfo", "childallergies", "childmedication", "parentname1", "parentphone1", "parentemail1", "parentname2", "parentphone2", "parentemail2", "program", "terms");


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
        $childinfoStr = nl2br(htmlentities($childinfo));
        $childallergiesStr = nl2br(htmlentities($childallergies));
        $childmedicationStr = nl2br(htmlentities($childmedication));

        $output = "
        <p>We have re.</p>
        
        <b>Student Information</b>
        <p>Name: $childname</p>
        <p>Program: $program</p>
        <p>Date of Birth: $childdob</p>
        <p>Address: $childaddress</p>
        <p>Accommodations: $childinfoStr</p>
        <p>Allerigies: $childallergiesStr</p>
        <p>Medications: $childmedicationStr</p> <br> <br>

        <b>Guardian Information</b>
        <p>Guadian 1:</p>
        <ul>
            <li>Name: $parentname1</li>
            <li>Email: $parentemail1</li>
            <li>Phone: $parentphone1</li>
        </ul>
        <p>Guadian 2:</p>
        <ul>
            <li>Name: $parentname2</li>
            <li>Email: $parentemail2</li>
            <li>Phone: $parentphone2</li>
        </ul> ";


        // emailing confirmation message
        $subject = "Young STEM Professional Registration Confirmation";
        $from = "YSP@youngstemprofessionals.org";

        $msg = "<html>
        <body>
            <b>Hello, $parentname1!<b>
            <p>Thank you for registering your student with Young STEM Professionals in our <i>$program<i> program. A member of YSP will be in touch in regards to next steps soon.</p> <br> <br> 

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
 
        
        mail($parentemail1, $subject, $msg, $headers);
    } else {

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

    <title>Registration | Young STEM Professionals</title>

    <link rel="stylesheet" href="css/style.css">

    <script src="https://kit.fontawesome.com/8394b8f877.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php echo $header; ?>
    <main>
        <div class="container">
            <h1 style="text-align: center;">Thank you for your submission!</h1>
            <p>A member of our team will be in contact regarding next steps!</p>

            <?php echo $output; ?>

        </div>
    </main>
    <?php echo $footer; ?>
</body>
</html>