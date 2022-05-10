<?php 
    include("dbconn.inc.php");

    session_start();

    // check to see if the use has access to this page
    if (!isset($_SESSION['access']) || $_SESSION['access'] != true) {
    // if not, redirect to page 1
        header('Location: index.php');
        exit; // stop the script right here
    }


    if (array_key_exists('submitLogout', $_POST)) { // each page needs a different name for the submit button
        $_SESSION['access'] = false;

        
        header('Location: index.php');
        sleep(3);
        exit;
    }

    $conn = dbConnect(); 
    $stmt = $conn->stmt_init();
    if(isset($_POST["formType"]) && !empty($_POST["formType"])) {
		setcookie("formType", $_POST["formType"], time()+ 14400);
		$_COOKIE['formType'] = $_POST["formType"];

        $subtitle = $_COOKIE['formType']; 

		if($_COOKIE['formType'] == 'partners') {
            // partners 
			// $menu = "it's a partner";
            $sql = "SELECT firstName, lastName, phoneNumber, email, orgName, orgWebsite, city, aboutOrg, message FROM partners order by partnerID";

            if ($stmt->prepare($sql)){
                $stmt->execute();
                $stmt->bind_result($firstName, $lastName, $phoneNumber, $email, $name, $website, $city, $about, $message);
                $tblRows = "";
                while($stmt->fetch()){
                    $Title_js = str_replace('"', "'", $name);
                    $Title_js = htmlspecialchars($Title_js, ENT_QUOTES); 

                    $messageStr = nl2br(htmlentities($message));

                    $tblRows = $tblRows. "<tr> 
                                            <td><a href='$website'>$name</a></td>
                                            <td>
                                                $firstName $lastName <br>
                                                <a href='mailto:$email'>$email</a> <br>
                                                $phoneNumber <br>
                                            </td>
                                            <td><a href='$website'>$website</a></td>
                                            <td>$city</td>
                                            <td>$about</td>
                                            <td>$messageStr</td>
                                        </tr>";                                    
                }
            
                $output = "
                <table class='formList'>\n
                    <tr>
                        <th>Orgnaization Name</th>
                        <th>Point of Contact</th>
                        <th>Website</th>
                        <th>Location</th>
                        <th>Description</th>
                        <th>Message</th>
                    </tr>\n".$tblRows.
                "</table>\n";   
                
                $stmt->close();
            } else {
                $output = "Query to retrieve link information failed.";
            }
		} else if ($_COOKIE['formType'] == 'students') {
			// $menu = "its a student";
            $sql = "SELECT program, childFirstName, childLastName, childDOB, school, grade, address1, address2, city, state, zipcode, accommodations, allergies,gFirstName1, gLastName1, relation1, email1, phone1, gFirstName2, gLastName2, relation2, email2, phone2 FROM students order by registrationID";

            if ($stmt->prepare($sql)){
                $stmt->execute();
                $stmt->bind_result($program, $childFirstName, $childLastName, $childDOB, $school, $grade, $address1, $address2, $city, $state, $zipcode, $accommodations, $allergies, $gFirstName1, $gLastName1, $relation1, $email1, $phone1, $gFirstName2, $gLastName2, $relation2, $email2, $phone2);

                $tblRows = "";
                while($stmt->fetch()){
                    // $Title_js = str_replace('"', "'", $name);
                    // $Title_js = htmlspecialchars($Title_js, ENT_QUOTES); 

                    // $messageStr = nl2br(htmlentities($message));

                    $tblRows = $tblRows. "<tr> 
                                            <td>$childFirstName $childLastName</td>
                                            <td>$program</td>
                                            <td>$school, $grade</td>
                                            <td>
                                                $gFirstName1 $gLastName1 <br>
                                                $relation1
                                            </td>
                                            <td><a href='mailto:$email1'>$email1</a></td>
                                            <td>$phone1</td>
                                        </tr>";                                    
                }
            
                $output = "
                <table class='formList'>\n
                    <tr>
                        <th>Child's Name</th>
                        <th>Program</th>
                        <th>School & Grade</th>
                        <th>Primary Guardian</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                    </tr>\n".$tblRows.
                "</table>\n";   
                
                $stmt->close();
            } else {
                $output = "Query to retrieve link information failed.";
            }
		} else {
            // $menu = "its a volunteer";
            $sql = "SELECT firstName, lastName, email, phone, experience, experienceStr, programs, availability FROM volunteers order by volunteerID";

            if ($stmt->prepare($sql)){
                $stmt->execute();
                $stmt->bind_result($firstName, $lastName, $email, $phone, $experience, $experienceStr, $programs, $availability);
                $tblRows = "";
                while($stmt->fetch()){
                    // $Title_js = str_replace('"', "'", $name);
                    // $Title_js = htmlspecialchars($Title_js, ENT_QUOTES); 

                    // $messageStr = nl2br(htmlentities($message));

                    $tblRows = $tblRows. "<tr> 
                                            <td>$firstName $lastName</td>
                                            <td>$phone</td>
                                            <td><a href='mailto:$email'>$email</a></td>
                                            <td>$experience</td>
                                            <td>$experienceStr</td>
                                            <td>$programs</td>
                                            <td>$availability</td>
                                        </tr>";                                    
                }
            
                $output = "
                <table class='formList'>\n
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Experience</th>
                        <th>Experience Description</th>
                        <th>Programs</th>
                        <th>Availability</th>
                    </tr>\n".$tblRows.
                "</table>\n";   
                
                $stmt->close();
            } else {
                $output = "Query to retrieve link information failed.";
            }
        }
	} 
    
	$conn->close();
?>



<?php include ('functions.php') ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Register your child with Young STEM Professionals, a Non-Profit Organization that provides Leadership & STEM Programs for Kids ages 5-17.">
    <meta name="author" content="Digital Frog">

    <title>Get Involved | Young STEM Professionals</title>

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/staff.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="https://kit.fontawesome.com/8394b8f877.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php echo $header; ?>

    <main>
        <div class="container">
            <form action="" method="post" id="dashboard_menu">
                <div class="form-section">
                    <h3>Admin Dashboard</h3>
                    <div class="form-body">
                        <label for="formType">Choose an option:</label>
                        <input type="radio" name="formType" value="partners"> Partners
                        <input type="radio" name="formType" value="students"> Students
                        <input type="radio" name="formType" value="volunteers"> Volunteers 
                        <input type="submit" value="Show Submissions" name="showSub-btn" id="showsub-btn">
                    </div>
                </div> 
            </form>

            <!-- adding  -->
            <p class="subtitle"><?php echo $subtitle ?></p>
            
            <table> 
                <?php echo $output ?>
            </table>

        </div>
    </main>

    <?php echo $logoutFooter; ?>
</body>
</html>