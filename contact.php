<?php
    $page = 3;
    $msg = '';
    $msgClass = 'errorNone';
    if(isset($_POST['formsubmit'])){
        // Get Form Data
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $message = htmlspecialchars($_POST['message']);

        // Check Required Fields
        if(!empty($email) && !empty($name) && !empty($message)){
            // Passed
            // Check Email
            if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
                // Failed
                $msg = 'Het gebruikte e-mail adres is geen goed e-mail adres';
                $msgClass = 'errorDanger';
            } else {
                // Passed
                asdasd
                $toEmail = 'dylanbos1996@gmail.com';
                $subject = $name.' wil contact met je maken';
                $body = '<h2>Contact aanvraag</h2>
                    <h4>Naam</h4><p>'.$name.'</p>
                    <h4>E-mail</h4><p>'.$email.'</p>
                    <h4>Bericht</h4><p>'.$message.'</p>
                ';

                // Email Headers
                $headers = "MIME-Version: 1.0" ."\r\n";
                $headers .="Content-Type:text/html;charset=UTF-8" . "\r\n";

                // Additional Headers
                $headers .= "From: " .$name. "<".$email.">". "\r\n";

                if(mail($toEmail, $subject, $body, $headers)){
                    // Email Sent
                    $msg = 'De E-mail is succesvol verzonden';
                    $msgClass = 'errorSuccess';
                } else {
                    // Failed
                    $msg = 'De e-mail is helaas niet verzonden';
                    $msgClass = 'errorDanger';
                }
            }
        } else {
            // Failed
            $msg = 'Niet alle velden zijn ingevuld';
            $msgClass = 'errorDanger';
        }
    }
?>

<!DOCTYPE html><head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Portfolio</title>
    <link rel="stylesheet" type="text/css" href="css/navigation.css?v=1">
    <link rel="stylesheet" type="text/css" href="css/contact.css?v=1">
    <meta charset="utf-8">
</head>

<body onLoad="funOnload(1,3);checkScrollPos();" onscroll="checkScrollPos();">
<!-- Fold header -->
    <header id="mainHeader">
        <div class="logoDiv">
            <a class="navCurrIndex">Dylan Bos</a>
        </div>
        <div class="navLinksDiv">
            <a class="links navAbout" href="index.php">Over mij</a>
            <a class="links navprojects" href="projects.php">Projecten</a>
            <a class="links navContact navCurrIndex" href="contact.php">Contact</a>
        </div>
    </header>
    <div id="sideBarNav">
        <a id="flexItem" class="links navAbout" href="index.php">Over mij</a>
        <a class="links navprojects " href="projects.php">Projecten</a>
        <a class="links navContact navCurrIndex" href="contact.php">Contact</a>
    </div>
    <div id="menuButtonDiv">
        <img id="menuButtImg" onClick="menuClick();" src="img/menu_button.png">
    </div>
<!-- Fold end Header -->
<div id="viewportDiv"></div>
<div id="container" class="homepageDiv">
    <label class="title">Contact</label>
    <label class="text">Neem contact met mij op door het onderstaande formulier in te vullen.<br/>Of <a class="klikHierLink" href="mailto:dylanbos1996@gmail.com">klik hier</a> om mij een mail te sturen</label>
    <form method="POST">
        <div id="errorMessages" class="<?=$msgClass?>"><?=$msg?></div>
        <div class="smallInputsContainer">
            <div class="inputContainer">
                <div id="square1" class="textSquare"></div>
                <input id="contactName" 
                onfocus="visibleSquare(1,1);" 
                onblur="visibleSquare(0,1);" 
                class="textInputs" type="text" placeholder="Naam" required name="name">
            </div>
            <div id="inputcontainer2" class="inputContainer">
                <div id="square2" class="textSquare"></div>
                <input id="contactEmail"  
                onfocus="visibleSquare(1,2);" 
                onblur="visibleSquare(0,2);" 
                class="textInputs" type="email" placeholder="E-mail" required name="email">
            </div>
        </div>
        <div class="inputContainer">
            <div id="square3" class="textSquare"></div>
            <textarea id="contactMessage" 
            onfocus="visibleSquare(1,3);" 
            onblur="visibleSquare(0,3);" 
            placeholder="Bericht" name="message" required=""></textarea>
        </div>
        <button onclick="validateContact();" name="formsubmit">Verstuur bericht</button>
        
    </form>
    
</div>
<?php include('/inc/footer.php');?>
<script type="text/javascript" src="js/main.js"></script>
</body>
</html>