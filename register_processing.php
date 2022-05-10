<?php 
include ("dbconn.inc.php");
include ("functions.php");

$conn = dbConnect(); 

if(isset($_POST["student-submissionBtn"])) {
    $required = array("program", "childFirstName", "childLastName", "childDOB", "school", "grade", "address1", "city", "state", "zipcode", "accommodations", "allergies", "gFirstName1", "gLastName1", "relation1", "email1", "terms");

    $expected = array("program", "childFirstName", "childLastName", "childDOB", "school", "grade", "address1", "address2", "city", "state", "zipcode", "accommodations","accommodationBox","allergies", "allergiesBox", "gFirstName1", "gLastName1", "relation1", "email1", "phone1", "terms");


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
        $accommodationsStr = nl2br(htmlentities($accommodationBox));
        $allergiesStr = nl2br(htmlentities($allergiesBox));

        $output = "
            <p>We have received your student registration. Be on the look out for more information coming soon.</p>
            

            <p>Choosen Program: $program</p>

            <b style='text-align:center;'>Student Information</b>
            <p>Name: $childFirstName $childLastName</p>
            <p>Date of Birth: $childDOB</p>
            <p>School: $school</p>
            <p>Grade Level: $grade</p>
            <p>Address: $address1 $address2, $city, $state $zipcode</p>
            <p>Accommodations: $accommodations - $accommodationsStr</p>
            <p>Allergies: $allergies - $allergiesStr</p>
            
            <b style='text-align:center;'>Guardian Information</b>
            <p>Name: $gFirstName1 $gLastName1</p>
            <p>Relation to Student: $relation1</p>
            <p>Email: $email1</p>
            <p>Phone: $phone1</p>";



        // emailing confirmation message
        $subject = "Young STEM Professional Registration Confirmation";

        $from = "YSP@youngstemprofessionals.org";

        $msg = "<html>
        <body>
            <b>Hello, $gFirstName1!<b>
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
 
        
        mail($email1, $subject, $msg, $headers);

        // adding to db 
        if($program == "Robotics") {
            $pid = 1; 
        } else if($program == "MadLab") {
            $pid = 2; 
        } else if ($program == "Genius") {
            $pid = 3; 
        }else { 
            $pid = 4;
        }


        // adding to db 
        $stmt = $conn->stmt_init();

        $sql = "INSERT INTO students (PID, program, childFirstName, childLastName, childDOB, school, grade, address1, address2, city, state, zipcode, accommodations, accommodationBox, allergies, allergiesBox, gFirstName1, gLastName1, relation1, email1, phone1, terms) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

        $stmt->prepare($sql);

        if($stmt->bind_param('isssssssssssssssssssss', $pid, $program, $childFirstName, $childLastName, $childDOB, $school, $grade, $address1, $address2, $city, $state, $zipcode, $accommodations, $accommodationBox, $allergies, $allergiesBox, $gFirstName1, $gLastName1, $relation1, $email1, $phone1, $terms)) {
            if($stmt->execute()) {
                $update = "<span>execute?</span>";
            } else {
                $update = "<span>didn't execute</span>";
            }
        } else {
            $update = "<span>didn't bind</span>";
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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