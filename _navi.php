<?php		  
switch($_GET['site']){
			  
case calendar: case faq: case search:;
$naviaktiv1='class="aktiv"';
$navishow1='style="display:block;"';
$navishow2='style="display:none;"';
$navishow3='style="display:none;"';
$navishow4='style="display:none;"';
$navishow5='style="display:none;"';
break;
		  
case squads: case members: case clanwars: case about: case history: case awards:;
$naviaktiv2='class="aktiv"';
$navishow1='style="display:none;"';
$navishow2='style="display:block;"';
$navishow3='style="display:none;"';
$navishow4='style="display:none;"';
$navishow5='style="display:none;"';
break;
		  
case forum: case guestbook: case registered_users: case whoisonline: case polls: case server:;
$naviaktiv3='class="aktiv"';
$navishow1='style="display:none;"';
$navishow2='style="display:none;"';
$navishow3='style="display:block;"';
$navishow4='style="display:none;"';
$navishow5='style="display:none;"';
break;
		  
case files: case demos: case links: case gallery: case linkus:;
$naviaktiv4='class="aktiv"';
$navishow1='style="display:none;"';
$navishow2='style="display:none;"';
$navishow3='style="display:none;"';
$navishow4='style="display:block;"';
$navishow5='style="display:none;"';
break;
		  
case sponsors: case newsletter: case contact: case challenge: case joinus: case imprint:;
$naviaktiv5='class="aktiv"';
$navishow1='style="display:none;"';
$navishow2='style="display:none;"';
$navishow3='style="display:none;"';
$navishow4='style="display:none;"';
$navishow5='style="display:block;"';
break;
		  
default:
$naviaktiv1='class="aktiv"';
$navishow1='style="display:block;"';
$navishow2='style="display:none;"';
$navishow3='style="display:none;"';
$navishow4='style="display:none;"';
$navishow5='style="display:none;"';
break;
}
?>