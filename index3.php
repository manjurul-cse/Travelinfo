
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title></title>
<script type="text/javascript" src="jquery-1.3.1.min.js"></script>
<script type="text/javascript">

$(document).ready(function() {		
	
	//Execute the slideShow
	slideShow();

});

function slideShow() {

	//Set the opacity of all images to 0
	$('#gallery a').css({opacity: 0.0});
	
	//Get the first image and display it (set it to full opacity)
	$('#gallery a:first').css({opacity: 1.0});
	
	//Set the caption background to semi-transparent
	$('#gallery .caption').css({opacity: 0.7});

	//Resize the width of the caption according to the image width
	$('#gallery .caption').css({width: $('#gallery a').find('img').css('width')});
	
	//Get the caption of the first image from REL attribute and display it
	$('#gallery .content').html($('#gallery a:first').find('img').attr('rel'))
	.animate({opacity: 0.7}, 400);
	
	//Call the gallery function to run the slideshow, 6000 = change to next image after 6 seconds
	setInterval('gallery()',6000);
	
}

function gallery() {
	
	//if no IMGs have the show class, grab the first image
	var current = ($('#gallery a.show')?  $('#gallery a.show') : $('#gallery a:first'));

	//Get next image, if it reached the end of the slideshow, rotate it back to the first image
	var next = ((current.next().length) ? ((current.next().hasClass('caption'))? $('#gallery a:first') :current.next()) : $('#gallery a:first'));	
	
	//Get next image caption
	var caption = next.find('img').attr('rel');	
	
	//Set the fade in effect for the next image, show class has higher z-index
	next.css({opacity: 0.0})
	.addClass('show')
	.animate({opacity: 1.0}, 1000);

	//Hide the current image
	current.animate({opacity: 0.0}, 1000)
	.removeClass('show');
	
	//Set the opacity to 0 and height to 1px
	$('#gallery .caption').animate({opacity: 0.0}, { queue:false, duration:50 }).animate({height: '1px'}, { queue:true, duration:300 });	
	
	//Animate the caption, opacity to 0.7 and heigth to 100px, a slide up effect
	$('#gallery .caption').animate({opacity: 0.7},100 ).animate({height: '100px'},500 );
	
	//Display the content
	$('#gallery .content').html(caption);
	
	
}

</script>
<style type="text/css">body{font-family:arial}.clear{clear:both}#gallery{position:relative;height:360px}#gallery a{float:left;position:absolute;}#gallery a img{border:none;}#gallery a.show{z-index:500}#gallery .caption{z-index:600;background-color:#000;color:#ffffff;height:100px;width:100%;position:absolute;bottom:0;}#gallery .caption .content{margin:5px}#gallery .caption .content h3{margin:0;padding:0;color:#1DCCEF;}</style>
</head>
<body>
<div id="gallery" style="width:678px;
     ">
<a href="index2.php?p=Bandarban" class="show">
<img src="images/homepic/Keokaradong.jpg" alt="Highest Mountain of Bangladesh"  width="784" height="360" padding-top="10px" title="" alt="" 
     rel="<h3>Keokaradong,Bandarban</h3>
      "/>
</a>
<a href="index2.php?p=Rangamati">
<img src="images/homepic/rangamati-bangladesh.jpg" alt="Grass Blades" width="784" height="360" title="" alt="" 
     rel="<h3>Rangamati</h3>
    "/>
</a>
<a href="index2.php?p=Inani">
<img src="images/homepic/inani.jpg" alt="One of top most sea beach" width="784" height="360" title="" alt="" 
     rel="<h3>Inani Beach</h3>"
     />
</a>
<a href="index2.php?p=Kaptai">
<img src="images/homepic/kaptai lake.jpg" alt="The beautiful Lake" width="784" height="360" title="" alt="" 
     rel="<h3>Kaptai Lake</h3>
    "/>
</a>    

<div class="caption"><div class="content"></div></div>
</div>


</body>
</html>
