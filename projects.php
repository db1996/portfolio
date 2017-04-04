<!DOCTYPE html><head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Portfolio</title>
    <link rel="stylesheet" type="text/css" href="css/navigation.css">
    <link rel="stylesheet" type="text/css" href="css/projects.css">
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
    <div id="projectsIntroContainer" class="homepageDiv">
    	<div id="introTitle" class="titlesBlue"><label>Projecten</label></div>
        <div id="introContentContainer">
        	<div class="contents" id="introTextContainer">
            	<label>Op deze pagina staan alle projecten die ik gemaakt heb.<br><a class="klikHierLink" onClick="rightNavClick(1);">Klik hier</a> om al mijn Web Development projecten te zien en <a class="klikHierLink" onClick="rightNavClick(3);">Klik hier</a> om naar mijn C# projecten te gaan</label>
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
    <div id="webDevelopProjects" class="homepageDiv">
    	<div class="titles"><label>Web Development</label></div>
        <div id="webDevelopContent" class="contents">
        	<label>Hieronder vind je alle projecten die ik heb gedaan met Web Development.<br/>Wil je de projecten zien die ik met C# heb gedaan<span class="vraagteken">?</span> <a class="klikHierLink" onClick="rightNavClick(1);">Klik hier!</a></label>
        </div>
 	</div>
    <div id="webshopContainer" class="homepageDiv">
    	<div class="titlesBlue"><label>GameWorld</label></div>
        <div class="contents">
        	
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
    asd

    
    <!--<script type="text/javascript" src="js/slideshow.js"></script>-->
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>