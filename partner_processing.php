<?php 
include ("dbconn.inc.php");
include ("functions.php");

$conn = dbConnect(); 

if(isset($_POST["partner-submissionBtn"])) {
    $required = array("fname", "lname", "phone", "email","orgName", "orgLocation", "orgAbout", "orgMessage");
    $expected = array("fname", "lname", "phone", "email","orgName", "orgLocation", "orgAbout", "orgMessage");

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
        $orgaboutStr = nl2br(htmlentities($orgAbout));
        $orgmessageStr = nl2br(htmlentities($orgMessage));

        $output = "
        <p>Thank you for interest in partnering with YSP! We look forward to connecting with you.</p>
        
        <b>Organization Information</b>
        <p>Contact: $fname $lname</p>
        <p>Phone: $phone</p>
        <p>Email: $email</p>
        <p>Organization: $orgName in $orgLocation</p>
        <p>About the Orgnization: $orgaboutStr</p>
        <p>Message: $orgmessageStr</p> ";

        // emailing confirmation message
        $subject = "Young STEM Professional Partner Interest";
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



        // adding to db 
        $stmt = $conn->stmt_init();

        $sql = "INSERT INTO partners (firstName, lastName, phoneNumber, email, orgName, city, aboutOrg, message) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";


        $stmt->prepare($sql);
        $stmt->bind_param('ssssssss', $fname, $lname, $phone, $email, $orgName, $orgLocation, $orgaboutStr, $orgmessageStr);

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

    <title>Registration | Young STEM Professionals</title>

    <link rel="stylesheet" href="css/style.css">

    <script src="https://kit.fontawesome.com/8394b8f877.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php echo $header; ?>
    <main>
            <div class="container">
                <h1 style="text-align: center;">Partner with YSP</h1>
                <h2>Become an Education Partner</h2>
                
                <div class="row">
                    <div class="col-6">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam bibendum consequat auctor. Pellentesque lectus dui, efficitur vel porttitor quis, ullamcorper et massa. Suspendisse odio velit, posuere vel hendrerit eu, euismod sit
                            amet risus. Curabitur id enim id lorem pharetra maximus. Duis eget libero id risus bibendum volutpat in nec libero. Duis dapibus felis cursus convallis vehicula. Suspendisse vel quam pellentesque, tempus turpis id, semper dui.
                            Mauris et diam eget erat scelerisque luctus quis ac felis. Nam in est et libero sodales dapibus. Etiam in dolor ac odio maximus mollis eu ut felis. In at mi et dui condimentum dapibus. Vestibulum a mollis justo, eget maximus
                            massa. Sed lacinia sed massa non tempus.</p>
                    </div>

                    <div class="col-6">
                        <form action="" method="post">
                        <div class="form-section">
                        <h3>Contact Information</h3>
                        <p style="text-align: center;">*required fields</p>
                        <div class="form-body">
                            <?php echo $output ?>
                            <?php echo $update ?>
                        </div>
                    </div>
                        </form>
                    </div>
                </div>
            </div>

        </main>
    <?php echo $footer; ?>
</body>
</html>