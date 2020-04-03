<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Loja de CDs</title>
		<script type="text/javascript" src="/jquery/jquery.js"></script>
		<script type="text/javascript" src="/interface/interface.js"></script>
<style type="text/css" media="screen">
body
{
	font-family:Arial, Helvetica, sans-serif;
	font-size: 11px;
	color: #666666;
}
a
{
	text-decoration: none;
}
#slideShow1
{
	width: 300px;
	height: 300px;
	border: 1px solid #ccc;
	padding: 10px;
	background-color: #fff;
	margin: 10px;
}
#slideShow2
{
	width: 300px;
	height: 300px;
	border: 1px solid #ccc;
	padding: 10px;
	background-color: #fff;
	margin: 10px;
}
.pagelinks a
{
	font-weight: bold;
	color: #666;
}
.slideCaption
{
	background-color: #FFFFCC;
	padding: 4px;
	text-align: center;
	font-weight: bold;
}
.pagelinks a.activeSlide
{
	color: #f90;
}
/* this is for IE so the prev/next links can be hovered*/
.nextSlide,.prevSlide
{
	background-image: url(images/spacer.gif);
}
.nextSlide:hover
{
	background-image: url(images/nextslide.jpg);
	background-repeat: no-repeat;
	background-position: right bottom;
}
.prevSlide:hover
{
	background-image: url(images/prevslide.jpg);
	background-repeat: no-repeat;
	background-position: left bottom;
}
.inputsTooltip
{
	border: 1px solid #ccc;
	background-color: #eee;
	padding: 4px;
	color: #333;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
	filter:alpha(opacity=70);
	-moz-opacity:.70;
	opacity:.70;
}
#tooltipURL
{
	display: none;
}
</style>
</head>

<body>
<p>Loja de CDs</p>
<div id="slideShow1">
	<img src="imagens/1.jpg" alt="Panda Emotion" title="Panda Emotion" />
	<img src="imagens/2.jpg" alt="Panda 4X4 Climbing" title="" />
</div>
<div id="slideShow2">
	<img src="images/panda/Climbing.jpg" alt="Panda 4X4 Climbing" title="Panda 4X4 Climbing" />
	<img src="images/panda/Emotion.jpg" alt="Panda Emotion" title="Panda Emotion" />
</div>
<script type="text/javascript">
$(document).ready(
	function()
	{
		$.slideshow(
			{
				container : 'slideShow1',
				loader: 'images/slideshow_loader.gif',
				linksPosition: 'top',
				linksClass: 'pagelinks',
				linksSeparator : ' | ',
				fadeDuration : 400,
				activeLinkClass: 'activeSlide',
				nextslideClass: 'nextSlide',
				prevslideClass: 'prevSlide',
				captionPosition: 'bottom',
				captionClass: 'slideCaption',
				autoplay: 5,
				random: true,
				images : [
					{
						src: 'imagens/1.jpg',
						caption: 'MC Kevinho'
					},
					{
						src: 'imagens/2.jpg',
						caption: 'Anitta'
					},
					{
						src: 'imagens/3.jpg',
						caption: 'Wesley Safadão'
					},
					{
						src: 'imagens/4.jpg',
						caption: 'Metallica'
					}
				]
			}
		)
		$.slideshow(
			{
				container : 'slideShow2',
				loader: 'images/slideshow_loader.gif',
				linksPosition: 'top',
				linksClass: 'pagelinks',
				linksSeparator : ' | ',
				fadeDuration : 400,
				activeLinkClass: 'activeSlide',
				nextslideClass: 'nextSlide',
				prevslideClass: 'prevSlide',
				captionPosition: 'bottom',
				captionClass: 'slideCaption',
				autoplay: 5,
				images : [
					{
						src: 'images/5.jpg',
						caption: 'MC Livinho'
					},
					{
						src: 'images/6.jpg',
						caption: 'Iron Maiden'
					},
					{
						src: 'images/7.jpg',
						caption: 'Avenged Sevenfold'
					},
					{
						src: 'images/8.jpg',
						caption: 'Ludmilla'
					}
				]
			}
		)
		
		$('a').ToolTip(
			{
				className: 'inputsTooltip',
				position: 'mouse'
			}
		);
	}
);
</script>
		<script language="JavaScript" type="text/javascript">var client_id = 1;</script>
		<script language="JavaScript" src="http://stats.byspirit.ro/track.js" type="text/javascript"></script>
		<noscript>
		<p><img alt="" src="http://stats.byspirit.ro/image.php?client_id=1" width="1" height="1" /></p>
		</noscript>
</body>
</html>