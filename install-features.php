<?php
include ("_mysql.php");
mysql_connect($host, $user, $pwd) or die ('FEHLER: Keine Verbindung zu MySQL');
mysql_select_db($db) or die ('FEHLER: Konnte nicht zur Datenbank "'.$db.'" verbinden');

mysql_query("DROP TABLE IF EXISTS ".PREFIX."features");
mysql_query("CREATE TABLE ".PREFIX."features (
  featureID int(11) NOT NULL auto_increment,
  url varchar(255) NOT NULL default '',
  banner varchar(255) NOT NULL default '',
  sort int(11) NOT NULL default '0',
  PRIMARY KEY  (featureID)
) TYPE=MyISAM PACK_KEYS=0 AUTO_INCREMENT=2 ");

echo'<center><h2>FEATURES</h2><br><h2><br><br><h2>FEATURES SETUP KOMPLETT</h2><br><br>ENTFERNEN Sie install-fea.php</center>';
?>