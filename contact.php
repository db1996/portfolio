<?php
    $page = 3;
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
        
    </div>
    
    
    <?php include('/inc/footer.php');?>
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>