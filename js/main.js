var pageyoff;
var menuPressed = false;
var headElem = document.getElementById("mainHeader");
var sideNavElem = document.getElementById("sideBarNav");
var menuButElem = document.getElementById("menuButtonDiv");
var menuButtImgElem = document.getElementById("menuButtImg");
var rightNavElem = document.getElementById("rightNavContainer");
var viewHeight;
var viewWidth;
var vhHeights = [];

// gets the age when you input a date (yyyy-mm-dd)
function getAge(dateString) 
{
  var today = new Date();
  var birthDate = new Date(dateString);
  var age = today.getFullYear() - birthDate.getFullYear();
  var m = today.getMonth() - birthDate.getMonth();
  if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
    age--;
  }
  return age;
}
/*function moveMenuButton(){
	var randnumx = Math.floor((Math.random() * 1000) + 1);
	var randnumy = Math.floor((Math.random() * 300) + 1);
	menuButElem.style.marginLeft = String(randnumx) +"px";
	menuButElem.style.marginTop = String(randnumy) +"px";
}*/

//function used on load
function funOnload(numOfDivs,page){
	
	//gets the viewport width and height from an invisible div on all pages
	viewHeight = document.getElementById("viewportDiv").offsetHeight;	
	viewWidth = document.getElementById("viewportDiv").offsetWidth;	
	document.getElementById("viewportDiv").style.display = 'none';
	// gets the age only when on homepage.
	if (page == 1){
		document.getElementById("age").innerHTML = getAge("1996-05-21");
	}
	else if (page == 2){
		carousel();
	}
	// gets all the heights from the Containers and puts them in the array (is used by smooth-scroll.)
	for (var i = 1; i <= numOfDivs ; i++) {
		tempElementHeight = document.getElementById("vhDiv" + i).offsetHeight;
		vhHeights[i-1] = tempElementHeight/viewHeight;
	}
	var tmp = rightNavElem.offsetHeight;
	var newHeight = (viewHeight / 2)  - (tmp / 2);
	rightNavElem.style.top = String(newHeight) + "px";
}

// checks how far the page is scrolled down, and if neccesary, hides the top header 
function checkScrollPos(){
	pageyoff = window.pageYOffset;
	if (pageyoff > 100){
		headElem.style.top = '-100px';
		headElem.style.opacity = '0';
		menuButElem.style.left = '0px';
		menuButElem.style.opacity = '100';
		if (menuPressed == true){
			sideNavElem.style.left = '0px';
			sideNavElem.style.opacity = '100';
		}
		if (onload == true){
			menuButtImgElem.style.webkitTransform = "rotate(0deg)";
			sideNavElem.style.left = '-100px';
			sideNavElem.style.opacity = '0';
		}
	}
	else{
		headElem.style.top = '0px';	
		headElem.style.opacity = '100';
		menuButElem.style.left = '-80px';
		menuButElem.style.opacity = '0';
		sideNavElem.style.left = '-150px';
		sideNavElem.style.opacity = '0';
	}
	
}

// when clicked on the menu button on the left it will rotate and show the sideNavigation (only when scrolled down enough)
function menuClick(){
	var trans = menuButtImgElem.style.webkitTransform;
	if (menuPressed == false){
		menuButtImgElem.style.webkitTransform = "rotate(-90deg)";
		sideNavElem.style.left = '0px';
		sideNavElem.style.opacity = '100';
		menuPressed = true;
		
	}
	else{
		menuButtImgElem.style.webkitTransform = "rotate(0deg)";	
		sideNavElem.style.left = '-150px';
		
		sideNavElem.style.opacity = '0';
		menuPressed = false;
	}
}
// what happens when you hover over the circles on the right
function rightNavHover(elemName,elemName2){
	elem = document.getElementById(elemName);
	elem2 = document.getElementById(elemName2);
	elem.style.opacity = '100';
	if (viewWidth > 480){
		elem2.style.backgroundColor = 'rgba(204,204,204,0.6)';
	}
		
	
}
// what happens when you leave your mouse from the circles on the right
function rightNavLeave(labelElem,containerElem){
	elem = 	document.getElementById(labelElem);
	elem2 = document.getElementById(containerElem);
	elem.style.opacity = '0';
	elem2.style.backgroundColor = '';
}
// what happens when you click them
function rightNavClick(elemnr){
	var x = 0;
	var totalMultiplier = 0;
	while (x < elemnr) {
	    
	    totalMultiplier += vhHeights[x];
	    x++;
	}

	if (elemnr != -1){
		smooth_scroll_to(document.body, totalMultiplier * viewHeight, 600);
	}
}


//carousel
var myIndex = 0;
function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++){
		x[i].style.display = "none"
		x[i].style.opacity = "0";  
    }
    myIndex++;
    if (myIndex > x.length) 
	{
		myIndex = 1
	}  
	x[myIndex-1].style.display = "block" ;   
	x[myIndex-1].style.opacity = "1";  
    setTimeout(carousel, 3500); 
}

/**
    Smoothly scroll element to the given target (element.scrollTop)
    for the given duration

    Returns a promise that's fulfilled when done, or rejected if
    interrupted
 */
var smooth_scroll_to = function(element, target, duration) {
    target = Math.round(target);
    duration = Math.round(duration);
    if (duration < 0) {
        return Promise.reject("bad duration");
    }
    if (duration === 0) {
        element.scrollTop = target;
        return Promise.resolve();
    }

    var start_time = Date.now();
    var end_time = start_time + duration;

    var start_top = element.scrollTop;
    var distance = target - start_top;

    // based on http://en.wikipedia.org/wiki/Smoothstep
    var smooth_step = function(start, end, point) {
        if(point <= start) { return 0; }
        if(point >= end) { return 1; }
        var x = (point - start) / (end - start); // interpolation
        return x*x*(3 - 2*x);
    }

    return new Promise(function(resolve, reject) {
        // This is to keep track of where the element's scrollTop is
        // supposed to be, based on what we're doing
        var previous_top = element.scrollTop;

        // This is like a think function from a game loop
        var scroll_frame = function() {
            if(element.scrollTop != previous_top) {
                reject("interrupted");
                return;
            }

            // set the scrollTop for this frame
            var now = Date.now();
            var point = smooth_step(start_time, end_time, now);
            var frameTop = Math.round(start_top + (distance * point));
            element.scrollTop = frameTop;

            // check if we're done!
            if(now >= end_time) {
                resolve();
                return;
            }

            // If we were supposed to scroll but didn't, then we
            // probably hit the limit, so consider it done; not
            // interrupted.
            if(element.scrollTop === previous_top
                && element.scrollTop !== frameTop) {
                resolve();
                return;
            }
            previous_top = element.scrollTop;

            // schedule next frame for execution
            setTimeout(scroll_frame, 0);
        }

        // boostrap the animation process
        setTimeout(scroll_frame, 0);
    });
}

// when hoverd over one of the images on the projects page from the JS slider, they show a div.
function imageoverlay(mode){
	var container = document.getElementById("slidecontainer");
	var imageoverlay = document.getElementById("imageSlideOverlay");
	if (mode == 0){
		imageoverlay.style.opacity = '1';
	}
	else{
		imageoverlay.style.opacity = '0';
	}
}
// when one of the project images is clicked, a popup will be shown
function imageClick(elem,txt){
	var imgcontainer = document.getElementById("imageClick");
	var imageelem = document.getElementById("imageClickSource");
	var lbl = document.getElementById("imageClickLabel");
	var backgroundBlur = document.getElementById("imageClickBlurBack");

	
	lbl.innerHTML = txt;
	imageelem.src = elem.src;
	imgcontainer.style.opacity = '1';
	imgcontainer.style.zIndex = '200';
	backgroundBlur.style.zIndex = '199';
	backgroundBlur.style.opacity = '1';

}
// hides the popup
function hideImageClick(){
	var imgcontainer = document.getElementById("imageClick");
	var imageelem = document.getElementById("imageClickSource");
	var lbl = document.getElementById("imageClickLabel");
	var backgroundBlur = document.getElementById("imageClickBlurBack");
	if (imgcontainer.style.opacity = '1') 
	{
		imgcontainer.style.opacity = '0';
		imgcontainer.style.zIndex = '-100';
		backgroundBlur.style.zIndex = '-199';
		backgroundBlur.style.opacity = '0';
		
	}
	
}
// on hover, an overlay will be shown on the images
function contenOverlay(mode,elem){
	if (mode == 0) 
	{
		var overlayContainer = document.getElementById("contentImageOverlay");
		overlayContainer.style.left = elem.offsetLeft + "px";
		overlayContainer.style.top = elem.offsetTop + "px";
		overlayContainer.style.width = elem.offsetWidth + "px";
		overlayContainer.style.height = elem.offsetHeight + 'px';
		overlayContainer.style.opacity = '1';
	}else{
var overlayContainer = document.getElementById("contentImageOverlay");
		overlayContainer.style.opacity = '0';
	}
		
	
}