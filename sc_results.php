<?php
/*
*Modified 2010 by http://www.synthesize-graphics.de
*/
$sort = $_GET["sort"];
$abfrage = "SELECT * FROM ".PREFIX."clanwars";
$gameabfrage = mysql_query($abfrage);
	echo "\t\t<div id=\"matches_head\" class=\"uppercase\">\n";
	echo "\t\t\t<a href=\"index.php?site=$site&amp;sort=all\">all </a>";
	if($sort == "") $abfrage = $abfrage." ORDER BY date DESC LIMIT 0, ".$maxresults;
	if($sort == "all") $abfrage = $abfrage." ORDER BY date DESC LIMIT 0, ".$maxresults;
$gamecounter = 0;
while($row = mysql_fetch_object($gameabfrage))
	{
	echo "<a href=\"index.php?site=$site&amp;sort=".$row->game."\">".$row->game." </a>";
	if($sort == $row->game) $abfrage = $abfrage." WHERE game = '".$row->game."' ORDER BY date DESC LIMIT 0, ".$maxresults;
	$gamecounter++;
	if ($gamecounter == 3){ //festlegung der ausgegebenen Spieleanzahl
		break;
		}
	}
	echo "\n\t\t</div>\n";
$ergebnis=safe_query($abfrage, $maxresults);
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
