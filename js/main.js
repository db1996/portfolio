var pageyoff;
var menuPressed = false;
var headElem = document.getElementById("mainHeader");
var sideNavElem = document.getElementById("sideBarNav");
var menuButElem = document.getElementById("menuButtonDiv");
var menuButtImgElem = document.getElementById("menuButtImg");
var rightNavElem = document.getElementById("rightNavContainer");
var viewHeight;
var viewWidth;
var vhHeights = [1,.8,2,1,1];
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
function checkScrollPos(onload,page){
	if (onload == true){ //everything in here happens on load
		if (page == 0){
			viewHeight = document.getElementById("skillsContainer").offsetHeight;	
			viewWidth = document.getElementById("skillsContainer").offsetWidth;	
			document.getElementById("age").innerHTML = getAge("1996-05-21");
		}
		else if (page == 1){
			carousel();
			viewHeight = document.getElementById("vhDiv1").offsetHeight;	
			viewWidth = document.getElementById("vhDiv1").offsetWidth;
		}
		if (viewWidth <= 480) 
		{
			vhHeights[2] = 1.7;
		}
		
		var tmp = rightNavElem.offsetHeight;
		var newHeight = (viewHeight / 2)  - (tmp / 2);
		rightNavElem.style.top = String(newHeight) + "px";
		
	}
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
function rightNavHover(elemName,elemName2){
	elem = document.getElementById(elemName);
	elem2 = document.getElementById(elemName2);
	elem.style.opacity = '100';
	if (viewWidth > 480){
		elem2.style.backgroundColor = 'rgba(204,204,204,0.6)';
	}
		
	
}
function rightNavLeave(labelElem,containerElem){
	elem = 	document.getElementById(labelElem);
	elem2 = document.getElementById(containerElem);
	elem.style.opacity = '0';
	elem2.style.backgroundColor = '';
}
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
function imageClick(elem,txt){
	var imgcontainer = document.getElementById("imageClick");
	var imageelem = document.getElementById("imageClickSource");
	var lbl = document.getElementById("imageClickLabel");
	lbl.innerHTML = txt;
	imageelem.src = elem.src;
	imgcontainer.style.opacity = '1';
	imgcontainer.style.zIndex = '200';


}
function hideImageClick(){
	var imgcontainer = document.getElementById("imageClick");
	var imageelem = document.getElementById("imageClickSource");
	var lbl = document.getElementById("imageClickLabel");
	if (imgcontainer.style.opacity = '1') 
	{
		imgcontainer.style.opacity = '0';
		imgcontainer.style.zIndex = '-100';
		
	}
	
}
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