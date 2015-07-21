<!DOCTYPE html>
<html lang="fr-FR">
<head>
<meta charset="UTF-8" />
<link href='http://fonts.googleapis.com/css?family=Exo:400,100,100italic,200,200italic,300,300italic,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
<style type="text/css">
* {-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;outline: none;}body{font-family: 'Exo', sans-serif;font-size:13px;line-height:auto;color:#2C3E4F;padding:0;margin:0;}.badge-link {display: block;}#profile-header {background-color: #fff;position:relative;width: 100%;border-radius:2px;height:110px;width:100%;}
span.icon-frame {display: block;}#portrait {position:relative;width:110px;height:110px;}
.portrait-border-bronze {background:#AF8645 url('http://your-url/sc2badge-overlay.png') top left no-repeat;}
.portrait-border-silver {background:#878787 url('http://your-url/sc2badge-overlay.png') top left no-repeat;}
.portrait-border-gold {background:#E4DF39 url('http://your-url/sc2badge-overlay.png') top left no-repeat;}
.portrait-border-platinum {background:#c6c6c6 url('http://your-url/sc2badge-overlay.png') top left no-repeat;}
.portrait-border-diamond {background:#88baf6 url('http://your-url/sc2badge-overlay.png') top left no-repeat;}
.portrait-border-master {background:#46A2F9 url('http://your-url/sc2badge-overlay.png') top left no-repeat;}
.portrait-border-grandmaster {background: #FBDD58 url('http://your-url/sc2badge-overlay.png') top left no-repeat;}
#portrait span:first-child {position:absolute;top:10px;left:10px;z-index:2;-webkit-box-shadow:inset 0 0 3px 1px rgba(0,0,0,.2);box-shadow:inset 0 0 3px 1px rgba(0,0,0,.4);}#portrait-frame {position:absolute;top:0;left:0;right:0;bottom:0;z-index:1;border-radius:2px 0px 0px 2px;}h2 {position: absolute;top:6px;left:120px;margin:0;padding:0 0 10px;}h2 span.user-name {display:block;font-weight: 800;font-size:20px;border-bottom:3px solid #d1e0e2;padding-bottom:6px;color:#2C3E4F;text-decoration: none;letter-spacing: 1px;}h2 span.user-name .clan-tag {color:#8CA7B5;display: none;}.clan-tagname {font-size:13px;font-style: italic;color:#2C3E4F;font-weight: 600;}#current-decals {display:none;}#profile-point {display:block;position:absolute;bottom:6px;left:120px;white-space: nowrap;color:#8CA7B5;}h3 {display:block;position:absolute;bottom:23px;left:120px;white-space: nowrap;font-size:13px;font-weight:400;margin:0;padding:0;color:#8CA7B5;}h3 b, #profile-point b {font-weight: 600;}.icon {position:absolute;bottom:3px;left:10px;width:40px;height:40px;z-index:3;}.icon img {width:100%;height:auto;}
</style>
<script type='text/javascript' src='//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js'></script>
<script type="text/javascript">
$(function(){
	// Adding content to existing divs
	$('span.user-name a').contents().unwrap();
	$( "#profile-point" ).prepend('<br><b>XP: </b>');
	$( "#profile-point" ).append(' Pts');
	$( "h3" ).prepend('<b>ACHIEVEMENTS: </b>');
	$( "h3" ).append(' Pts');
	// Adding Portrait frame color and Rank icon
	if ( 
		// Noob
		$("#portrait-frame").hasClass("portrait-border-bronze") ) {
			$("#portrait").append('<div class="icon"><img src="http://your-url/sc2badge-rank-bronze.png"/></div>');
	} else if ( 
		// Noob
		$("#portrait-frame").hasClass("portrait-border-silver") ) {
			$("#portrait").append('<div class="icon"><img src="http://your-url/sc2badge-rank-silver.png"/></div>');
	} else if ( 
		// Noob
		$("#portrait-frame").hasClass("portrait-border-gold") ) {
			$("#portrait").append('<div class="icon"><img src="http://your-url/sc2badge-rank-gold.png"/></div>');
	} else if ( 
		// Platinum
		$("#portrait-frame").hasClass("portrait-border-platinum") ) {
			$("#portrait").append('<div class="icon"><img src="http://your-url/sc2badge-rank-platinum.png"/></div>');
	} else if ( 
		// Diamond
		$("#portrait-frame").hasClass("portrait-border-diamond") ) {
			$("#portrait").append('<div class="icon"><img src="http://your-url/sc2badge-rank-diamond.png"/></div>');
	} else if ( 
		// GrandMaster
		$("#portrait-frame").hasClass("portrait-border-grandmaster") ) {
			$("#portrait").append('<div class="icon"><img src="http://your-url/sc2badge-rank-grandmaster.png"/></div>');
	} else if ( 
		// Master
		$("#portrait-frame").hasClass("portrait-border-master") ) {
			$("#portrait").append('<div class="icon"><img src="http://your-url/sc2badge-rank-master.png"/></div>');
	} else {
		// UnRanked
		$("#portrait-frame").css("background-color","#0D2B51");
	}
	var f = $(".clan-tag");
	f.html( f.html().replace(/\[|\]/g,"") ); 
});
</script>
</head>
<body>
<?php
error_reporting( 0 );
$url = $_GET["bneturl"];
echo htmlentities(filter_content($url));
function filter_content($url) {
    $htm = file_get_contents($url);
    $str = '<div id="profile-header">';
    $arr = explode($str, $htm);
    $new = $arr[1];
    $len = strlen($new);
    $out = NULL;
    $cnt = 1;
    while ($len) {
        $chr = substr($new,0,1);
        if (substr($new,0,4) == '<div')  $cnt++;
        if (substr($new,0,5) == '</div') $cnt--;
        if (!$cnt) break;
        $len--;
        $out .= $chr;
        $new = substr($new,1);
    }
    echo '<div id="profile-header">' . $out . '</div>';
}
?>
</body>
</html>
