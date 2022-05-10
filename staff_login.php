<?php 

if (array_key_exists('submitLogin', $_POST)) { // each page needs a different name for the submit button
    session_start();
  
    $_SESSION = array();

    $_SESSION['access'] = true;
  
    /* set required fields */
    $required = array('userName', 'password');
  

    $_SESSION['missing'] = array();
    

    foreach ($_POST as $key => $value) {
        $temp = is_array($value) ? $value : trim($value);

        if (empty($temp) && in_array($key, $required)) {
            array_push($_SESSION['missing'], $key);
        } else {
            $_SESSION[$key] = $temp;
        }
    }

    if ($_SESSION['userName'] == 'ysp' && $_SESSION['password'] == '123') {
        header('Location: staff_dashboard.php');
        $output = "";
    } else {
        $output = 'something wrong'; 
    }
    // if no required fields are missing, redirect to the next page
    // if (!$missing) {
      
      // exit;
      // }
    }

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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="https://kit.fontawesome.com/8394b8f877.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php echo $header; ?>
    <main>
        <div class="container">
            <form action='' method='post' id="loginform">
                <div class="form-section">
                    <h3>Login</h3>
                    <div class="form-body">
                        <label for="userName">Username</label>
                        <input type='text' name='userName' placeholder="username">
                        <label for="userName">Password</label>
                        <input type='password' name='password' placeholder="password">
                        <input type='submit' name='submitLogin' value='Login'>
                    </div>  
                </div>
            </form>
        </div>
    </main>
    <?php echo $footer; ?>
</body>
</html>



    
