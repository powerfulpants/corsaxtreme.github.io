var _____WB$wombat$assign$function_____ = function(name) {return (self._wb_wombat && self._wb_wombat.local_init && self._wb_wombat.local_init(name)) || self[name]; };
if (!self.__WB_pmw) { self.__WB_pmw = function(obj) { this.__WB_source = obj; return this; } }
{
  let window = _____WB$wombat$assign$function_____("window");
  let self = _____WB$wombat$assign$function_____("self");
  let document = _____WB$wombat$assign$function_____("document");
  let location = _____WB$wombat$assign$function_____("location");
  let top = _____WB$wombat$assign$function_____("top");
  let parent = _____WB$wombat$assign$function_____("parent");
  let frames = _____WB$wombat$assign$function_____("frames");
  let opener = _____WB$wombat$assign$function_____("opener");

/****************************************************
*	        DOM Image rollover:
*		by Chris Poole
*		http://chrispoole.com
*               Script featured on http://www.dynamicdrive.com
*		Keep this notice intact to use it :-)
*		Modified by JOsh
****************************************************/

// To use, put an hsrc in an image tag with the src of the roll-over image
// and/or add a csrc to add a pop up with the target href of the csrc.


function init() {
	if (!document.getElementById) return
	var imgOriginSrc;
	var imgTemp = new Array();
	var imgarr = document.getElementsByTagName('img');
	for (var i = 0; i < imgarr.length; i++) 
	{
		if (imgarr[i].getAttribute('hsrc')) 
		{
			imgTemp[i] = new Image();
	      	imgTemp[i].src = imgarr[i].getAttribute('hsrc');
	      	imgarr[i].onmouseover = function() 
			{
		       	imgOriginSrc = this.getAttribute('src');
		       	this.setAttribute('asrc',this.getAttribute('src'))
		       	this.setAttribute('src',this.getAttribute('hsrc'))
		  	}
	      	imgarr[i].onmouseout = function() 
			{
				if(!imgOriginSrc){
					if( this.getAttribute('asrc') ) {
						imgOriginSrc=this.getAttribute('asrc');
					} else {
						imgOriginSrc=this.getAttribute('src');
					}
				} 
		        this.setAttribute('src',imgOriginSrc)
	     	}
	  	}
	}
}

}
/*
     FILE ARCHIVED ON 23:41:35 Aug 09, 2004 AND RETRIEVED FROM THE
     INTERNET ARCHIVE ON 22:40:37 Feb 07, 2023.
     JAVASCRIPT APPENDED BY WAYBACK MACHINE, COPYRIGHT INTERNET ARCHIVE.

     ALL OTHER CONTENT MAY ALSO BE PROTECTED BY COPYRIGHT (17 U.S.C.
     SECTION 108(a)(3)).
*/
/*
playback timings (ms):
  captures_list: 96.464
  exclusion.robots: 0.087
  exclusion.robots.policy: 0.08
  cdx.remote: 0.056
  esindex: 0.008
  LoadShardBlock: 66.773 (3)
  PetaboxLoader3.datanode: 117.647 (4)
  CDXLines.iter: 15.128 (3)
  load_resource: 137.427
  PetaboxLoader3.resolve: 55.594
*/