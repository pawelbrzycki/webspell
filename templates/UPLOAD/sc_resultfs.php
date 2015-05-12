<?php
/*
*Modified 2010 by http://www.synthesize-graphics.de
*/
	echo "\t\t<div id=\"matches_head\" class=\"uppercase\">\n";
	echo "<a href=\"index.php?site=clanwars\">view all</a>";
	echo "\n\t\t</div>\n";
$ergebnis=safe_query("SELECT * FROM ".PREFIX."clanwars ORDER BY date DESC LIMIT 0, ".$maxresults);
if(mysql_num_rows($ergebnis)){
	echo "\t\t<ul class=\"liste\">\n";
	$n=1;
	while($ds=mysql_fetch_array($ergebnis)) {
		$date=date("d.m.Y", $ds['date']);
		$homescr=array_sum(unserialize($ds['homescore']));
		$oppscr=array_sum(unserialize($ds['oppscore']));

		if($homescr>$oppscr) $result='<span class="win"><b>'.$homescr.':'.$oppscr.'</b></span>';
		elseif($homescr<$oppscr) $result='<span class="loss"><b>'.$homescr.':'.$oppscr.'</b></span>';
		else $result='<span class="draw"><b>'.$homescr.':'.$oppscr.'</b></span>';

		$resultID=$ds['cwID'];
		$gameicon="images/games/";
		if(file_exists($gameicon.$ds['game'].".gif")) $gameicon = $gameicon.$ds['game'].".gif";
		eval ("\$results = \"".gettemplate("results")."\";");
		echo $results;
		$n++;
	}
	echo "\t\t</ul>\n";
}
?>
