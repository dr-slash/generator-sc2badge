<!DOCTYPE html>
<html lang="fr-FR">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no" />

<title>DR/SLASH / STARCRAFT 2 BADGE GENERATOR</title>
<!-- FAVICONS -->
<link rel="icon" href="http://drslash.com/wp-content/themes/drslash/favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="http://drslash.com/wp-content/themes/drslash/favicon.ico" type="image/x-icon" />

<link rel="canonical" href="http://sc2badge.drslash.com/" />
<meta property="og:locale" content="en_US" />
<meta property="og:type" content="article" />
<meta property="og:title" content="DR/SLASH / STARCRAFT 2 BADGE GENERATOR" />
<meta property="og:url" content="http://sc2badge.drslash.com/" />
<meta property="og:site_name" content="drslash" />
<meta property="article:publisher" content="https://www.facebook.com/drslashparis" />

<link href='http://fonts.googleapis.com/css?family=Exo:400,100,100italic,200,200italic,300,300italic,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
<style type="text/css">
/* INDEX */
* {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    outline: none;
}
body {padding:0px 0px 30px;background-color: #363f6a;margin:0;}
header{margin:0 auto;text-align: center;}
header img{width:100%;}
.clear {clear:both;}
.sc2-generator, .copy-sc2 {background-color: #ebf0f1;padding:30px;margin:0px 30px;}
.sc2-generator {}
.copy-sc2 pre {white-space: pre-wrap;padding:20px;background-color:#fff;border-radius:4px;border:3px solid #DAE3E5;font-family: 'Exo', sans-serif;font-size: 16px;}
h1 {background-color: #2b3254;margin:0;padding:16px;color:#fff;text-transform: uppercase;letter-spacing: 1px;font-size: 20px;margin:30px 30px 0px;font-weight: 900;}
.searchform ul {padding:0;margin:0;list-style: none;}
.searchform li {display: block;}
.help {}
.help a {color:#8CA7B5;font-style: italic;font-size:10px;}
label {font-size:15px;font-weight:600;display: block;padding-bottom: 10px;font-style: italic;color: #8CA7B5}
label a {color: #8CA7B5;text-decoration: none;}
.searchform li.field-txt input {padding:10px;font-size:16px;background-color: #fff;border-radius:4px;width:100%;border:3px solid #DAE3E5;font-family: 'Exo', sans-serif;color: #2c3e4f;font-weight: 500;}
.searchform li.field-txt input:focus {
  border: 3px solid #8CA7B5;
}
::-webkit-input-placeholder {color:#8CA7B5;font-style: italic;}
:-moz-placeholder {color:#8CA7B5;font-style: italic;}
::-moz-placeholder {color:#8CA7B5;font-style: italic;}
:-ms-input-placeholder {color:#8CA7B5;font-style: italic;}
.button {
  width: auto;
  border: 0px;
  cursor: pointer;
  padding: 13px 19px 13px;
  font-weight: bold;
  font-size: 12px;
  line-height: 21px;
  text-align: center;
  white-space: nowrap;
  color: #ffffff;
  background-color: #8ca7b5;
  text-transform: uppercase;
  box-shadow: 0px -2px 0px rgba(0, 0, 0, 0.1) inset;
  border-radius: 4px;
}
.button:hover {
  box-shadow: 0px -2px 0px transparent inset;
  color: #ffffff;
  background-color: #6e8895;
}
.field-txt {float:left;width:70%;}
.field-bt {float:left;width:30%;padding-left:10px;}
.previewing {background-color: #ebf0f1;padding:30px;margin:0px 30px;}

/* BADGE */
body {font-family: 'Exo', sans-serif;font-size:13px;line-height:auto;color:#2C3E4F;}
#profile-left, #profile-right {display: none !important;}
.best-finishes {display:block !important;}
#profile-header {background-color: #fff;position:relative;width: 100%;border-radius:2px;}
span.icon-frame {display: block;}
#portrait {position:relative;width:110px;height:110px;}
.portrait-border-bronze {background:#AF8645 url('http://sc2badge.drslash.com/sc2badge-overlay.png') top left no-repeat;}
.portrait-border-silver {background:#878787 url('http://sc2badge.drslash.com/sc2badge-overlay.png') top left no-repeat;}
.portrait-border-gold {background:#E4DF39 url('http://sc2badge.drslash.com/sc2badge-overlay.png') top left no-repeat;}
.portrait-border-platinum {background:#c6c6c6 url('http://sc2badge.drslash.com/sc2badge-overlay.png') top left no-repeat;}
.portrait-border-diamond {background:#88baf6 url('http://sc2badge.drslash.com/sc2badge-overlay.png') top left no-repeat;}
.portrait-border-master {background:#46A2F9 url('http://sc2badge.drslash.com/sc2badge-overlay.png') top left no-repeat;}
.portrait-border-grandmaster {background: #FBDD58 url('http://sc2badge.drslash.com/sc2badge-overlay.png') top left no-repeat;}
#portrait span:first-child {position:absolute;top:10px;left:10px;z-index:2;-webkit-box-shadow:inset 0 0 3px 1px rgba(0,0,0,.2);
box-shadow:inset 0 0 3px 1px rgba(0,0,0,.4);}
#portrait-frame {position:absolute;top:0;left:0;right:0;bottom:0;z-index:1;border-radius:2px 0px 0px 2px;}
h2 {position: absolute;top:6px;left:120px;margin:0;padding:0 0 10px;}
h2 span.user-name {display:block;font-weight: 800;font-size:20px;border-bottom:3px solid #d1e0e2;padding-bottom:6px;color:#2C3E4F;text-decoration: none;letter-spacing: 1px;}
h2 span.user-name .clan-tag {color:#8CA7B5;display: none;}
.clan-tagname {font-size:13px;font-style: italic;color:#2C3E4F;font-weight: 600;}
#current-decals {display:none;}
#profile-point {display:block;position:absolute;bottom:6px;left:120px;white-space: nowrap;color:#8CA7B5;}
h3 {display:block;position:absolute;bottom:23px;left:120px;white-space: nowrap;font-size:13px;font-weight:400;margin:0;padding:0;color:#8CA7B5;}
h3 b, #profile-point b {font-weight: 600;}
.icon {position:absolute;bottom:3px;left:10px;width:40px;height:40px;z-index:3;}
.icon img {width:100%;height:auto;}

</style>
<script type='text/javascript' src='//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js'></script>
<script type="text/javascript">
$(function(){
	//$("span.user-name a").removeAttr("href").css("cursor","pointer");
	$('span.user-name a').contents().unwrap();
	$( "#profile-point" ).prepend('<br><b>XP: </b>');
	$( "#profile-point" ).append(' Pts');
	$( "h3" ).prepend('<b>ACHIEVEMENTS: </b>');
	$( "h3" ).append(' Pts');
	if ( $("#portrait-frame").hasClass("portrait-border-bronze") ) {
		$("#portrait").append('<div class="icon"><img src="http://sc2badge.drslash.com/sc2badge-rank-bronze.png"/></div>');
	} else if ( $("#portrait-frame").hasClass("portrait-border-silver") ) {
		$("#portrait").append('<div class="icon"><img src="http://sc2badge.drslash.com/sc2badge-rank-silver.png"/></div>');
	} else if ( $("#portrait-frame").hasClass("portrait-border-gold") ) {
		$("#portrait").append('<div class="icon"><img src="http://sc2badge.drslash.com/sc2badge-rank-gold.png"/></div>');
	} else if ( $("#portrait-frame").hasClass("portrait-border-platinum") ) {
		$("#portrait").append('<div class="icon"><img src="http://sc2badge.drslash.com/sc2badge-rank-platinum.png"/></div>');
	} else if ( $("#portrait-frame").hasClass("portrait-border-diamond") ) {
		$("#portrait").append('<div class="icon"><img src="http://sc2badge.drslash.com/sc2badge-rank-diamond.png"/></div>');
	} else if ( $("#portrait-frame").hasClass("portrait-border-grandmaster") ) {
		$("#portrait").append('<div class="icon"><img src="http://sc2badge.drslash.com/sc2badge-rank-grandmaster.png"/></div>');
	} else if ( $("#portrait-frame").hasClass("portrait-border-master") ) {
		$("#portrait").append('<div class="icon"><img src="http://sc2badge.drslash.com/sc2badge-rank-master.png"/></div>');
	} else {
		$("#portrait-frame").css("background-color","#0D2B51");
	}
	var f = $(".clan-tag");
	f.html( f.html().replace(/\[|\]/g,"") );
});
</script>
</head>
<body>
<header><img src="http://sc2badge.drslash.com/logo.png"/></header>
<h1>StarcrafT 2 Badge Generator</h1>
<div class="sc2-generator">
<?php 
$sbneturl = $_GET['bneturl'];
echo '<div class="searchform">';
			echo '<form id="bnet_search" method="get" action="index.php?bneturl='.$sbneturl.'">';
			echo '<ul>';
    			echo '<li><label for="bnetid">Copy and paste your <a href="http://eu.battle.net/sc2/fr/profile/3391476/1/IlIlIlIlIlIl/" target="_blank">BattleNet Profile URL</a> then hit Generate button</label></li>';
    			echo '<li class="field-txt"><input class="field" name="bneturl" enctype="text/plain" type="text" id="bneturl" placeholder="http://eu.battle.net/sc2/fr/profile/3391476/1/IlIlIlIlIlIl/" /></li>';
    			echo '<li class="field-bt"><input class="button" type="submit" value="Generate" class="submitbutton" /></li>';
    			echo '<li class="help"><a href="http://en.drslash.com/contact/">Found a bug? Feel free to ask me something...</a></li>';
			echo '</ul>';
    		echo '</form>';
    		echo '<div class="clear"></div>';
		echo '</div>';
?>
</div>

<?php
error_reporting( 0 );
$url = $_GET["bneturl"];
if (empty($url)) {
  	$url = 'http://eu.battle.net/sc2/fr/profile/3391476/1/IlIlIlIlIlIl/';
}
echo htmlentities(filter_content($url));
function filter_content($url)
{
    $htm = file_get_contents($url);
    $str = '<div id="profile-wrapper">';
    $arr = explode($str, $htm);
    $new = $arr[1];
    $len = strlen($new);
    $out = NULL;
    $cnt = 1;
    while ($len)
    {
        $chr = substr($new,0,1);
        if (substr($new,0,4) == '<div')  $cnt++;
        if (substr($new,0,5) == '</div') $cnt--;
        if (!$cnt) break;
        $len--;
        $out .= $chr;
        $new = substr($new,1);
    }
    echo '<h1>Preview</h1><div class="previewing"><div id="profile-header">' . $out . '</div></div>';
}
    $frame = '<iframe src="http://sc2badge.drslash.com/badge.php?bneturl='.$url.'" frameborder="0" height="110" width="100%"></iframe>';
    echo '<h1>Copy/Paste</h1><div class="copy-sc2"><label>Now just copy and paste and you\'re done!</label><pre>'.htmlentities($frame).'</pre></div>';
?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-39336427-1', 'auto');
  ga('send', 'pageview');

</script>
</body>
</html>