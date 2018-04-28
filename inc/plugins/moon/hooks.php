
<?php
/**
 * Provides moon phase data as variable for use in templates.
 *
 * @author  Kalyn Robinson <dev@shinkarpg.com>
 * @license http://unlicense.org/ Unlicense
 * @version 1.0.0
 */

require_once MYBB_ROOT . "inc/plugins/moon/functionality.php";

$plugins->add_hook("index_start", "moon_index");
function moon_index()
{
    global $moon;
    $moon = moon_get();
}
