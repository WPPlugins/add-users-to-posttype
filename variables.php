<?php

global $autp_path, $autp_dir, $autp_base;
$autp_dir=dirname(plugin_basename(__FILE__)); //plugin absolute server directory name
$autp_base=get_option('siteurl')."/wp-content/plugins/".$autp_dir; //URL to plugin directory
$autp_path=ABSPATH."wp-content/plugins/".$autp_dir; //absolute server pather to plugin directory



?>