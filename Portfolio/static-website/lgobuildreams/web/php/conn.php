<?php
ini_set('session.save_path', 'tmp');
session_start();

mysql_connect('10.1.1.105','a7717830_all','Nicoyah17') or die ('cannot connect to host');
mysql_select_db('a7717830_all') or die ('cannot connect to database');

?>