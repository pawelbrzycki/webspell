<?php
// important data include
include("_mysql.php");
include("_settings.php");
include("_functions.php");

$_language->read_module('index');
$index_language = $_language->module;
// end important data include
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<!-- Diese Metatags bitte nach eigenen Wünschen ändern -->
<meta name="description" content="Clanpage using webSPELL 4 CMS" />
<meta name="author" content="webspell.org" />
<meta name="keywords" content="webspell, webspell4, clan, cms" />
<meta name="copyright" content="Copyright &copy; 2005 - 2009 by webspell.org- made by synthesize-graphics.de" />
<meta name="generator" content="webSPELL" />
<!-- Head & Title include -->
<title><?php echo PAGETITLE; ?></title>
<link rel="stylesheet" type="text/css" href="_stylesheet.css" media="screen" />
<link rel="stylesheet" type="text/css" href="contentslider.css" />
<link href="tmp/rss.xml" rel="alternate" type="application/rss+xml" title="<?php echo getinput($myclanname); ?> - RSS Feed" />
<script src="js/bbcode.js" language="jscript" type="text/javascript"></script>
<script type="text/javascript" src="js/contentslider.js">
/* Featured Content Slider- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com) */
</script>
</head>
<body>
<div id="wrapper">
	<div id="header">
		<h1 class="hidden"><strong><?php echo PAGETITLE; ?></strong></h1>
<?php include("counter.php"); ?>
		<!-- Alle unnötigen Länder löschen unter languages/ -->
<?php include("sc_language.php"); ?>
		<span class="banner"><?php include("sc_bannerrotation.php"); ?></span>
	</div>
	<!-- Navigation editierbar unter templates/navigation.html -->
<?php include("navigation.php"); ?>
	<div id="content_left">
<?php include("login.php"); ?>
<?php include("sc_results.php"); ?>
<?php include("latesttopics.php"); ?>
<?php include("poll.php"); ?>
	</div>
	<div id="content">
        <div id="slider1" class="sliderwrapper">
            <div class="contentdiv">
            <a href="index.php?site=articles&amp;action=show&amp;articlesID=1"><img src="design/slider_sample.jpg" alt="Starcraft2" /></a>
            </div>
            <div class="contentdiv">
            <a href="index.php?site=articles&amp;action=show&amp;articlesID=2"><img src="design/slider_sample_2.jpg" alt="Diablo 3" /></a>
            </div>
        </div>
        <div id="paginate-slider1" class="pagination"></div>
        <script type="text/javascript">
        featuredcontentslider.init({
	        id: "slider1",
	        contentsource: ["inline", ""],  //Valid values: ["inline", ""] or ["ajax", "path_to_file"]
	        toc: "#increment",  //Valid values: "#increment", "markup", ["label1", "label2", etc]
	        nextprev: ["", "&raquo;"],  //labels for "prev" and "next" links. Set to "" to hide.
	        revealtype: "click", //Behavior of pagination links to reveal the slides: "click" or "mouseover"
	        enablefade: [true, 0.2],  //[true/false, fadedegree]
	        autorotate: [true, 13000],  //[true/false, pausetime]
	        onChange: function(previndex, curindex){
	        }
        })
        </script>
        <div class="inhalt">
		    <?php
		    if(!isset($site)) $site="news";
		    $invalide = array('\\','/','/\/',':','.');
		    $site = str_replace($invalide,' ',$site);
		    if(!file_exists($site.".php")) $site = "news";
		    include($site.".php");
		    ?>
	    </div>
	</div>
	<div id="content_right">
		<?php include("sc_sponsors.php"); ?>
	</div>
	<div class="clear"></div>
	<div id="footer"><?php echo "$myclanname"; ?> - <a href="http://www.cosmondo.de">cosmondo</a>  - <a href="http://www.templates-directory.com/" target="_blank" title="Gamer Templates">Templates</a></div>
</div>
</body>
</html>
