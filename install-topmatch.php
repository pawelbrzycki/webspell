<?php
include ("_mysql.php");
mysql_connect($host, $user, $pwd) or die ('FEHLER: Keine Verbindung zu MySQL');
mysql_select_db($db) or die ('FEHLER: Konnte nicht zur Datenbank "'.$db.'" verbinden');

mysql_query("DROP TABLE IF EXISTS `".PREFIX."topmatch`");
mysql_query("CREATE TABLE `".PREFIX."topmatch` (
  topmID int(11) NOT NULL auto_increment PRIMARY KEY,
  date int(11) NOT NULL,
		matchlink varchar(255) NOT NULL,
		league varchar(255) NOT NULL,
        maps varchar(255) NOT NULL,
        server varchar(255) NOT NULL,
                headline varchar(255) NOT NULL,
		statement varchar(255) NOT NULL,
		teamclan varchar(255) NOT NULL,
		logo1 varchar(255) NOT NULL,
		country1 varchar(255) NOT NULL,
		team1 varchar(255) NOT NULL,
		homepage1 varchar(255) NOT NULL,
  logo2 varchar(255) NOT NULL,
		country2 varchar(255) NOT NULL,
		team2 varchar(255) NOT NULL,
		homepage2 varchar(255) NOT NULL,
  displayed int(11) NOT NULL default '0'
) TYPE=MyISAM PACK_KEYS=0 AUTO_INCREMENT=1 ");

mysql_query("DROP TABLE IF EXISTS `".PREFIX."topmatch_settings`");
mysql_query("CREATE TABLE `".PREFIX."topmatch_settings` (
`topmatch_setting_id` int(11) NOT NULL auto_increment,
`logowidth` INT( 11 ) NOT NULL  default '0',
`logoheight` INT( 11 ) NOT NULL  default '0',
`logo` VARCHAR( 255 ) NOT NULL  default '',
`country` VARCHAR( 255 ) NOT NULL  default '',
`team` VARCHAR( 255 ) NOT NULL  default '',
`homepage` VARCHAR( 255 ) NOT NULL default '',
	PRIMARY KEY  (`topmatch_setting_id`)
)  AUTO_INCREMENT=2 ");

mysql_query("INSERT IGNORE INTO `".PREFIX."topmatch_settings` (`topmatch_setting_id`,`logowidth`,`logoheight`,`logo`,`country`,`team`,`homepage`) VALUES (1, 0, 0, '', '', '', '')");


echo'<center><b>Topmatch-Addon erfolgreich installiert!</b><br><br>Bitte die Installations Datei l�schen!</center>';
?>