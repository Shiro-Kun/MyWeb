<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<head>
<link rel="stylesheet" type="text/css" media="all" href="css/reset.css" />
<link rel="stylesheet" type="text/css" media="all" href="css/text.css" />
<link rel="stylesheet" type="text/css" media="all" href="css/960.css" />
<link rel="stylesheet" type="text/css" media="all" href="css/style.css" />
<link href="css/galleria.css" rel="stylesheet" type="text/css" media="screen"> 

<script type="text/javascript" src="jquery-1.2.6.min.js"></script> 
<script type="text/javascript" src="jquery.galleria.js"></script> 
<script type="text/javascript"> 
jQuery(function($) { 

$('ul.gallery').galleria({
			history   : true, // activates the history object for bookmarking, back-button etc.
			clickNext : true, // helper for making the image clickable
			insert    : '#main_image', // the containing selector for our main image
			onImage   : function(image,caption,thumb) { // let's add some image effects for demonstration purposes
				
				// fade in the image & caption
				if(! ($.browser.mozilla && navigator.appVersion.indexOf("Win")!=-1) ) { // FF/Win fades large images terribly slow
					image.css('display','none').fadeIn(1000);
				}
				caption.css('display','none').fadeIn(600);
				
				// fetch the thumbnail container
				var _li = thumb.parents('li');
				
				// fade out inactive thumbnail
				_li.siblings().children('img.selected').fadeTo(500,0.3);
				
				// fade in active thumbnail
				thumb.fadeTo('fast',1).addClass('selected');
				
				// add a title for the clickable image
				image.attr('title','Next image >>');
			},
			onThumb : function(thumb) { // thumbnail effects goes here
				
				// fetch the thumbnail container
				var _li = thumb.parents('li');
				
				// if thumbnail is active, fade all the way.
				var _fadeTo = _li.is('.active') ? '1' : '0.3';
				
				// fade in the thumbnail when finnished loading
				thumb.css({display:'none',opacity:_fadeTo}).fadeIn(1000);
				
				// hover effects
				thumb.hover(
					function() { thumb.fadeTo('fast',1); },
					function() { _li.not('.active').children('img').fadeTo('fast',0.3); } // don't fade out if the parent is active
				)
			}
		});






}); 
</script>

<style media="screen,projection" type="text/css">
	
	/* BEGIN DEMO STYLE */

	.gallery li{width:80px;height:60px;border:3px double #111;margin: 0 2px;background:#000; float:left;}
	.gallery {width:300px;}

    </style>




<title>Gallery Music Anime</title>
</head>

<body>


<div class="container_12" id="topContent">
    <div class="grid_4">
            
            <h2>Gallery Music Anime</h2>
    </div>
    <div class="grid_8" id="rightTopContent">
            <a href="index.php">Home</a> |
            <a href="gallery.php">Gallery</a> |
            <a href="contact.php">Contact</a>
    </div>
</div>
<div>    
        <ul class="gallery"> 
			<li><img src="./images/EGOIST - All Alone With You.jpg" title="EGOIST - All Alone With You" alt="1"></li> 
            <li><img src="./images/AKINO with bless4 - EXTRA MAGIC HOUR.jpg" title="AKINO with bless4 - EXTRA MAGIC HOUR" alt="2"></li> 
            <li><img src="./images/Hata Motohiro.jpg" title="Hata Motohiro" alt="3"></li> 
            <li><img src="./images/HoneyWorks - Zuttomaekara sukideshita.jpg" title="HoneyWorks - Zuttomaekara sukideshita" alt="4"></li> 
            <li><img src="./images/Luna Haruna – Startea.jpg" title="Luna Haruna – Startea" alt="5"></li> 
            <li><img src="./images/Miku Sawai - Konna Sekai, Shiritakunakatta.jpg" title="Miku Sawai - Konna Sekai, Shiritakunakatta" alt="6"></li> 
            <li><img src="./images/Mirai no Eve.jpg" title="Mirai no Eve" alt="7"></li> 
            <li><img src="./images/nano.RIPE - もしもの話 02.jpg" title="nano.RIPE - もしもの話 02" alt="8"></li> 
            <li><img src="./images/Sankarea OP Single.jpg" title="Sankarea OP Single" alt="9"></li> 
            <li><img src="./images/Shigatsu wa Kimi no Uso.jpg" title="Shigatsu wa Kimi no Uso" alt="10"></li> 
            <li><img src="./images/Yousei Teikoku - Kuusou Mesorogiwi.jpg" title="Yousei Teikoku - Kuusou Mesorogiwi" alt="11"></li> 
            <li><img src="./images/Haikyuu!! Bonus.jpg" title="Haikyuu!! Bonus" alt="12"></li> 
		</ul>
        
	</div>
	
           <br><br><br>  
       
       <div id="footer"><a href="https://www.facebook.com/Roikhan.Nasir">Roikhan Nasir</a></div>
    
</div>

</body>
</html>
