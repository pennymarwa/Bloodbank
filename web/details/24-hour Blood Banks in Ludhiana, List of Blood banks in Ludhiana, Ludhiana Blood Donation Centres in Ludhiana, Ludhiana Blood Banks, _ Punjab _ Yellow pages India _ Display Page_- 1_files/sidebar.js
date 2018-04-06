window.onscroll = function()
{
	if( window.XMLHttpRequest ) {

		if (document.body.clientWidth>1279) {
			$('content').style.display = 'block';
			$('content').style.left = (((document.body.clientWidth-1024)/2)-160) + 'px';
			if (document.documentElement.scrollTop > 201 || self.pageYOffset > 201) {
				$('content').style.position = 'fixed';
				$('content').style.top = '0px';
			} else if (document.documentElement.scrollTop < 201 || self.pageYOffset < 201) {
				$('content').style.position = 'absolute';
				$('content').style.top = '201px';
			}
		} else if (document.documentElement.scrollTop < 201 || self.pageYOffset < 201) {
			$('content').style.display = 'none';
		}
	
	}
}

window.onresize = function(event) {
		if (document.body.clientWidth>1279) {
			$('content').style.display = 'block';
			$('content').style.left = (((document.body.clientWidth-1024)/2)-160) + 'px';
		} else if (document.documentElement.scrollTop < 201 || self.pageYOffset < 201) {
			$('content').style.display = 'none';
		}
 
}


window.onload = function(event) {
		if (document.body.clientWidth>1279) {
			$('content').style.display = 'block';
			$('content').style.left = (((document.body.clientWidth-1024)/2)-160) + 'px';
		} else if (document.documentElement.scrollTop < 201 || self.pageYOffset < 201) {
			$('content').style.display = 'none';
		}
 
}