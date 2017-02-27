<?php
// phpBB 3.2.x auto-generated configuration file
// Do not change anything in this file!
$dbms = 'phpbb\\db\\driver\\mysqli';
$dbhost = getenv("MYSQL_SERVICE_HOST");
$dbport = '3306';
$dbname = getenv("MYSQL_DATABASE");
$dbuser = getenv("MYSQL_USER");
$dbpasswd = getenv("MYSQL_PASSWORD");
$table_prefix = 'phpbb_';
$phpbb_adm_relative_path = 'adm/';
$acm_type = 'phpbb\\cache\\driver\\file';

@define('PHPBB_INSTALLED', true);
// @define('PHPBB_DISPLAY_LOAD_TIME', true);
@define('PHPBB_ENVIRONMENT', 'production');
// @define('DEBUG_CONTAINER', true);
?>
