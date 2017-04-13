<?php
    $page = 3;
    if (isset($_POST['formsubmit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        mail('dylanbos1996@gmail.com', 'Contact request', $message, 'asdasda');
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
        <div id="errorMessages"></div>
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