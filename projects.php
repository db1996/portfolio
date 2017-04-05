<!DOCTYPE html><head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Portfolio</title>
    <link rel="stylesheet" type="text/css" href="css/navigation.css">
    <link rel="stylesheet" type="text/css" href="css/projects.css">
    <meta charset="utf-8">
</head>
<body onLoad="checkScrollPos(true,1);" onscroll="checkScrollPos();">
<!-- Fold header -->
    <header id="mainHeader">
        <div class="logoDiv">
            <a class="navCurrIndex">Dylan Bos</a>
        </div>
        <div class="navLinksDiv">
            <a class="links navAbout" href="index.php">Over mij</a>
            <a class="links navprojects navCurrIndex" href="projects.php">Projecten</a>
            <a class="links navContact" href="contact.php">Contact</a>
        </div>
    </header>
    <div id="sideBarNav">
        <a id="flexItem" class="links navAbout" href="index.php">Over mij</a>
        <a class="links navprojects navCurrIndex" href="projects.php">Projecten</a>
        <a class="links navContact" href="contact.php">Contact</a>
    </div>
    <div id="menuButtonDiv">
        <img id="menuButtImg" onClick="menuClick();" src="img/menu_button.png">
    </div>
<!-- Fold end Header -->
<!-- right nav's fold -->
    <div id="rightNavContainer">
        <div id="rightnavContainer1" 
        onMouseOver="rightNavHover('RightNavLabel1','rightnavContainer1')" 
        onMouseOut="rightNavLeave('RightNavLabel1','rightnavContainer1');" 
        onClick="rightNavClick(0);" 
        class="rightNavLinkContainer">
            <label class="rightNavLabels" id="RightNavLabel1">Intro</label>
            <div   class="rightNavLinks"></div>
        </div>
        <div id="rightnavContainer2" 
        onMouseOver="rightNavHover('RightNavLabel2','rightnavContainer2')" 
        onMouseOut="rightNavLeave('RightNavLabel2','rightnavContainer2');" 
        onClick="rightNavClick(1);" 
        class="rightNavLinkContainer">
            <label class="rightNavLabels" id="RightNavLabel2">Web Development</label>
            <div   class="rightNavLinks"></div>
        </div>
        <div id="rightnavContainer3" 
        onMouseOver="rightNavHover('RightNavLabel3','rightnavContainer3')" 
        onMouseOut="rightNavLeave('RightNavLabel3','rightnavContainer3');" 
        onClick="rightNavClick(2);" 
        class="rightNavLinkContainer">
            <label class="rightNavLabels" id="RightNavLabel3">GameWorld</label>
            <div   class="rightNavLinks"></div>
        </div>
        <div id="rightnavContainer4" 
        onMouseOver="rightNavHover('RightNavLabel4','rightnavContainer4')" 
        onMouseOut="rightNavLeave('RightNavLabel4','rightnavContainer4');" 
        onClick="rightNavClick(4);" 
        class="rightNavLinkContainer">
            <label class="rightNavLabels" id="RightNavLabel4">RadioGaga</label>
            <div   class="rightNavLinks"></div>
        </div>
        <div id="rightnavContainer5" 
        onMouseOver="rightNavHover('RightNavLabel5','rightnavContainer5')" 
        onMouseOut="rightNavLeave('RightNavLabel5','rightnavContainer5');" 
        onClick="rightNavClick(5);" 
        class="rightNavLinkContainer">
            <label class="rightNavLabels" id="RightNavLabel5">Calculator</label>
            <div   class="rightNavLinks"></div>
        </div>
    </div>
<!-- right nav's end fold -->
    <div id="vhDiv1" class="homepageDiv">
    	<div id="introTitle" class="titlesBlue"><label>Projecten</label></div>
        <div id="introContentContainer">
        	<div class="contents" id="introTextContainer">
            	<label>Op deze pagina staan alle projecten die ik gemaakt heb.<br><a class="klikHierLink" onClick="rightNavClick(1);">Klik hier</a> om al mijn Web Development projecten te zien en <a class="klikHierLink" onClick="rightNavClick(5);">Klik hier</a> om naar mijn C# projecten te gaan</label>
            </div>
            <div id="slidecontainer" class="w3-content w3-section"
            onmouseover="imageoverlay(0);"
            onmouseout="imageoverlay(1);">
                <img class="mySlides" onClick="rightNavClick(2);" id="webshopImg" src="img/webshop.jpg">
                <img class="mySlides" onClick="rightNavClick(4);" id="radioImg" src="img/radiogaga.jpg">
                <img class="mySlides" onClick="rightNavClick(5);" id="calcImg" src="img/calculator.jpg">
                <div id="imageSlideOverlay">
                    <label>Click to go to this project</label>
                </div>
            </div>
        </div>
 	</div>
    <div id="imageClick" onclick="hideImageClick()">
        <label id="imageClickLabel"></label>
        <img id="imageClickSource" src="">
    </div>
    <div id="vhDiv2" class="homepageDiv">
    	<div class="titles"><label>Web Development</label></div>
        <div id="webDevelopContent" class="contents">
        	<label>Hieronder vind je alle projecten die ik heb gedaan met Web Development.<br/>Wil je de projecten zien die ik met C# heb gedaan<span class="vraagteken">?</span> <a class="klikHierLink" onClick="rightNavClick(1);">Klik hier!</a></label>
        </div>
 	</div>
    <div id="contentImageOverlay">
        Klik voor meer informatie
    </div>
    <div id="vhDiv3" class="homepageDiv">
    	<div class="titlesBlue"><label>GameWorld</label></div>
        <div id="webschopContent1" class="webschopContents">
            <img onmouseover="contenOverlay(0,this);" 
            onmouseleave="contenOverlay(1,this);"  
            src="img/webschopImage1.png" 
            class="imagesClickable" 
            onclick="imageClick(this,'Dit is de home pagina van Gameworld')">
            <div id="webshoptextdiv1" class="contents webschopTexts">
                <label>Voor dit project moest ik een online gameshop maken met 3 categorieën: PC Xbox one en PS4</label>
            </div>
        </div>
        <div id="webschopContent2" class="webschopContents">
            <div id="webshoptextdiv2" class="contents webschopTexts">
                <label>Alle games kunnen gesorteerd worden op verschillende criteria. Hier is veel JavaScript voor gebruikt.</label>
            </div>
            <img onmouseover="contenOverlay(0,this);" 
            onmouseleave="contenOverlay(1,this);" 
            src="img/webschopImage2.png" 
            class="imagesClickable" 
            onclick="imageClick(this,'Hier staan alle games, dit kan gesorteerd worden. En als de muis erover heen gaat krijg je informatie over de games')">
        </div>
        <div id="webschopContent3" class="webschopContents">
            <img onmouseover="contenOverlay(0,this);" 
            onmouseleave="contenOverlay(1,this);" 
            src="img/webschopImage3.png" 
            class="imagesClickable" 
            onclick="imageClick(this,'Dit is waar er afgerekend kan worden, hier wordt de totaalprijs getoond en er kunnen games verwijderd worden.')">
            <div id="webshoptextdiv3" class="contents webschopTexts">
                <label>Hier worden alle games getoond, hier wordt een PHP session voor gebruikt.</label>
            </div>
        </div>
 	</div>
    <div id="radioGaga" class="homepageDiv">
        <div class="titles"><label>RadioGaga</label></div>
        <div class="contents">
            
        </div>
    </div>
    <div id="calcContainer" class="homepageDiv">
    	<div  class="titles"><label>Calculator</label></div>
        <div class="contents">
        	
        </div>
 	</div>
    <!--<script type="text/javascript" src="js/slideshow.js"></script>-->
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>