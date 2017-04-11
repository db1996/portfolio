<?php
    include("/inc/connectToDB.php");
    $page = 2;
    $db = ConnectToDatabase();
    $titles=[];
    $contents=[];
    $result =  mysqli_query($db,"SELECT `titleText` FROM `titles`");
    while($result2 = mysqli_fetch_assoc($result)){
        $titles[] = $result2;   //places everything in the array
    }
    for ($i=0; $i < count($titles); $i++) { 
        $titles[$i] = $titles[$i]['titleText'];
    }

    $result =  mysqli_query($db,"SELECT * FROM `div_info`");
    while($result2 = mysqli_fetch_assoc($result)){
        $count_contents[] = $result2;   //places everything in the array
    }

    for ($i=0; $i < count($count_contents); $i++) { 
        $result =  mysqli_query($db,"SELECT `text` FROM `texts` WHERE `div_id` = $i");
        while($result2 = mysqli_fetch_assoc($result)){
            $contents[$i][] = $result2;   //places everything in the array
        }
        for ($x=0; $x < count($contents[$i]); $x++) { 
            $contents[$i][$x] = $contents[$i][$x]['text'];
        }
    }
    unset($count_contents);
   

?>

<!DOCTYPE html><head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Portfolio</title>
    <link rel="stylesheet" type="text/css" href="css/navigation.css?v=1">
    <link rel="stylesheet" type="text/css" href="css/projects.css?v=1">
    <meta charset="utf-8">
</head>

<body onLoad="funOnload(6,2);checkScrollPos();" onscroll="checkScrollPos();">
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
            <label class="rightNavLabels" id="RightNavLabel2"><?=$titles[1]?></label>
            <div   class="rightNavLinks"></div>
        </div>
        <div id="rightnavContainer3" 
        onMouseOver="rightNavHover('RightNavLabel3','rightnavContainer3')" 
        onMouseOut="rightNavLeave('RightNavLabel3','rightnavContainer3');" 
        onClick="rightNavClick(2);" 
        class="rightNavLinkContainer">
            <label class="rightNavLabels" id="RightNavLabel3"><?=$titles[2]?></label>
            <div   class="rightNavLinks"></div>
        </div>
        <div id="rightnavContainer4" 
        onMouseOver="rightNavHover('RightNavLabel4','rightnavContainer4')" 
        onMouseOut="rightNavLeave('RightNavLabel4','rightnavContainer4');" 
        onClick="rightNavClick(3);" 
        class="rightNavLinkContainer">
            <label class="rightNavLabels" id="RightNavLabel4"><?=$titles[3]?></label>
            <div   class="rightNavLinks"></div>
        </div>
        <div id="rightnavContainer5" 
        onMouseOver="rightNavHover('RightNavLabel5','rightnavContainer5')" 
        onMouseOut="rightNavLeave('RightNavLabel5','rightnavContainer5');" 
        onClick="rightNavClick(4);" 
        class="rightNavLinkContainer">
            <label class="rightNavLabels" id="RightNavLabel5"><?=$titles[4]?></label>
            <div   class="rightNavLinks"></div>
        </div>
        <div id="rightnavContainer6" 
        onMouseOver="rightNavHover('RightNavLabel6','rightnavContainer6')" 
        onMouseOut="rightNavLeave('RightNavLabel6','rightnavContainer6');" 
        onClick="rightNavClick(5);" 
        class="rightNavLinkContainer">
            <label class="rightNavLabels" id="RightNavLabel6"><?=$titles[5]?> Projecten</label>
            <div   class="rightNavLinks"></div>
        </div>
    </div>
<!-- right nav's end fold -->
    <div id="viewportDiv"></div>
    <div id="contentImageOverlay">Klik voor meer informatie</div>
    <div id="imageClickBlurBack" onclick="hideImageClick()"></div>
    <div id="imageClick" onclick="hideImageClick()">
        <img id="cross_img" src="img/cross.png">
        <label id="imageClickLabel"></label>
        <img id="imageClickSource" src="">
    </div>

    <div id="vhDiv1" class="homepageDiv">
    	<div id="introTitle" class="titlesBlue"><label><?=$titles[0]?></label></div>
        <div id="introContentContainer">
        	<div class="contents" id="introTextContainer">
            	<label><?=$contents[0][0]?></label>
            </div>
            <div id="slidecontainer" class="w3-content w3-section"
            onmouseover="imageoverlay(0);"
            onmouseout="imageoverlay(1);">
                <img class="mySlides" onClick="rightNavClick(2);" id="webshopImg" src="img/webshop.jpg">
                <img class="mySlides" onClick="rightNavClick(3);" id="radioImg" src="img/radiogaga.jpg">
                <img class="mySlides" onClick="rightNavClick(4);" id="calcImg" src="img/calculator.jpg">
                <div id="imageSlideOverlay">
                    <label>Click to go to this project</label>
                </div>
            </div>
        </div>
 	</div>
    
    <div id="vhDiv2" class="homepageDiv">
    	<div class="titles"><label><?=$titles[1]?></label></div>
        <div id="webDevelopContent" class="contents whiteContents">
        	<label><?=$contents[1][0]?></label>
        </div>
 	</div>
    
    <div id="vhDiv3" class="homepageDiv">
    	<div class="titlesBlue"><label><?=$titles[2]?></label></div>
        <div id="webschopContent1" class="webschopContents flex-contents">
            <img onmouseover="contenOverlay(0,this);" 
            onmouseleave="contenOverlay(1,this);"  
            src="img/webschopImage1.png" 
            class="imagesClickable" 
            onclick="imageClick(this,'Dit is de home pagina van Gameworld')">
            <div id="webshoptextdiv1" class="contents TextsBlue">
                <label><?=$contents[2][0]?></label>
            </div>
        </div>
        <div id="webschopContent2" class="webschopContents flex-contents">
            <div id="webshoptextdiv2" class="contents TextsBlue">
                <label><?=$contents[2][1]?></label>
            </div>
            <img onmouseover="contenOverlay(0,this);" 
            onmouseleave="contenOverlay(1,this);" 
            src="img/webschopImage2.png" 
            class="imagesClickable" 
            onclick="imageClick(this,'Hier staan alle games, dit kan gesorteerd worden. En als de muis erover heen gaat krijg je informatie over de games')">
        </div>
        <div id="webschopContent3" class="webschopContents flex-contents">
            <img onmouseover="contenOverlay(0,this);" 
            onmouseleave="contenOverlay(1,this);" 
            src="img/webschopImage3.png" 
            class="imagesClickable" 
            onclick="imageClick(this,'Dit is waar er afgerekend kan worden, hier wordt de totaalprijs getoond en er kunnen games verwijderd worden.')">
            <div id="webshoptextdiv3" class="contents TextsBlue">
                <label><?=$contents[2][2]?></label>
            </div>
        </div>
 	</div>
    <div id="vhDiv4" class="homepageDiv">
        <div class="titles"><label><?=$titles[3]?></label></div>
        <div id="radioContent1" class="radioContents flex-contents">
             <img onmouseover="contenOverlay(0,this);" 
            onmouseleave="contenOverlay(1,this);" 
            src="img/radiogagaHome.png" 
            class="imagesClickable" 
            onclick="imageClick(this,'Dit is de homepage van RadioGaga')">
            <div class="contents whiteContents radioTexts">
                <label><?=$contents[3][0]?></label>
            </div>
        </div>
        <div id="radioContent2" class="radioContents flex-contents">
            <div class="contents whiteContents radioTexts">
                    <label><?=$contents[3][1]?></label>
            </div>
             <img onmouseover="contenOverlay(0,this);" 
            onmouseleave="contenOverlay(1,this);" 
            src="img/radiogaga.jpg" 
            class="imagesClickable" 
            onclick="imageClick(this,'Hier wordt er gekozen tussen de albums, en songs kunnen worden afgespeeld.')">
            
        </div>
    </div>
    <div id="vhDiv5" class="homepageDiv">
        <div  class="titlesBlue"><label><?=$titles[4]?></label></div>
        <div class="contents calculatorContents flex-contents">
            <img
            src="img/calculator.jpg" 
            class=" calculatorImage">
            <div class="TextsBlue">
                    <label><?=$contents[4][0]?></label>
            </div>
        </div>
    </div>
    <div id="vhDiv6" class="homepageDiv">
        <div class="titles"><label><?=$titles[5]?></label></div>
        <div id="cSharpContent1" class="contents whiteContents">
            <label><?=$contents[5][0]?></label>
        </div>
        <div id="cSharpContent2" class="contents flex-contents">
            <div  class="whiteContents cSharpContent "><label><?=$contents[5][1]?></label></div>
            <img src="img/visual_studio.png">
        </div>
    </div>
    <div id="vhDiv7" class="homepageDiv">
        <div class="titlesBlue"><label><?=$titles[5]?></label></div>
    </div>
    <?php include('/inc/footer.php');?>
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>