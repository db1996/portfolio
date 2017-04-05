<!DOCTYPE html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Portfolio</title>
	<link rel="stylesheet" type="text/css" href="css/style.css?v=1">
    <link rel="stylesheet" type="text/css" href="css/navigation.css?v=1">
</head>
<body onLoad="checkScrollPos(true,0);" onscroll="checkScrollPos();">
    <header id="mainHeader">
        <div class="logoDiv">
            <a class="navCurrIndex">Dylan Bos</a>
        </div>
        <div class="navLinksDiv">
            <a class="links navAbout navCurrIndex">Over mij</a>
            <a class="links navprojects" href="projects.php">Projecten</a>
            <a class="links navContact">Contact</a>
            <!--<div id="languageContainer">
            	<img src="img/nederlands.png"/>
                <img src="img/english.png"/>
            </div>-->
        </div>
    </header>
    <div id="sideBarNav">
        <a id="flexItem" class="links navAbout navCurrIndex" href="index.php">Over mij</a>
        <a class="links navprojects" href="projects.php">Projecten</a>
        <a class="links navContact" href="contact.php">Contact</a>
    </div>
    <div id="menuButtonDiv" onmouseenter="moveMenuButton();">
        <img id="menuButtImg" onClick="menuClick();" src="img/menu_button.png">
    </div>
    
    <div id="rightNavContainer">
        <div id="rightnavContainer1" 
        onMouseOver="rightNavHover('RightNavLabel1','rightnavContainer1')" 
        onMouseOut="rightNavLeave('RightNavLabel1','rightnavContainer1');" 
        onClick="rightNavClick(0);" 
        class="rightNavLinkContainer">
            <label class="rightNavLabels" id="RightNavLabel1">Wie ben ik?</label>
            <div   class="rightNavLinks"></div>
        </div>
        <div id="rightnavContainer2" 
        onMouseOver="rightNavHover('RightNavLabel2','rightnavContainer2')" 
        onMouseOut="rightNavLeave('RightNavLabel2','rightnavContainer2');"
        onClick="rightNavClick(1);" 
        class="rightNavLinkContainer">
            <label class="rightNavLabels" id="RightNavLabel2">Wat kan ik?</label>
            <div class="rightNavLinks"></div>
        </div>
    </div>
    
    <div id="whoAmIContainer" class="homepageDiv">
        <div class="titles">
            <label>Wie ben ik<span class="vraagteken">?</span></label>
        </div>
        <div class="whoAmIContent contents">
            <label>Mijn naam is Dylan Bos.
            Ik ben <span id="age"></span> jaar oud en ik zit in het eerste jaar van de opleiding Applicatieontwikkeling niveau 4 op ROC Ter Aa. Ik ben aan het leren voor Web Development en Applicatieontwikkeling.<br/>
            <a onClick="rightNavClick(1);">Klik hier</a> om te zien wat ik kan of <a href="projects.php">klik hier</a> om naar al mijn projecten te gaan!
            </label>
        </div>
    </div>
    <div class="homepageDiv" id="skillsContainer">
        <div class="titles">
            <label>Wat kan ik<span class="vraagteken">?</span></label>
        </div>
        <div class="skillsContentContainer contents">
            <div class="skillsTextDiv">
                <label>Voor Web Development kan ik de meest gebruikte programmeer/scripting talen zoals HTML/CSS, JavaScript en PHP. Ook kan ik ook goed gebruikt maken van MySQL Databases.<br/>Voor Applicatieontwikkeling heb ik veel projecten gedaan met C#. </label>
            </div>
            <div class="skillsLogosDiv">
                <img class="codeimg" id="duoImg" src="img/htmlcss.png"/>
                <img class="codeimg" id="javascriptImg" src="img/javascript.png"/>
                <img class="codeimg" id="phpImg" src="img/php.png"/>
                <img class="codeimg" id="mysqlImg" src="img/mysql.png"/>
                <img class="codeimg" id="csharpImg" src="img/csharp.png"/>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>