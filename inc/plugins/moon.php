<?php
/**
 * Provides moon phase data as global variable for use in templates.
 *
 * @author  Kalyn Robinson <dev@shinkarpg.com>
 * @license http://unlicense.org/ Unlicense
 * @version 1.0.0
 */

if (!defined("IN_MYBB")) {
    die("Direct initialization of this file is not allowed.");
}

require_once MYBB_ROOT . "inc/plugins/moon/hooks.php";

function moon_info()
{
    global $lang;

    $lang->load("moon");
    return array(
        "name" => $lang->moon,
        "description" => $lang->moon_description,
        "website" => "https://github.com/ShinkaDev-MyBB/mybb-moon-phase",
        "author" => "Shinka",
        "authorsite" => "https://github.com/ShinkaDev-MyBB/",
        "version" => "1.0.0",
        "codename" => "moon",
        "compatibility" => "18*",
    );
}

function moon_install()
{}

function moon_is_installed()
{
    global $cache;

    $plugins = $cache->read('plugins');
    $activePlugins = $plugins['active'] ?? [];
    return in_array('moon', $activePlugins);
}

function moon_uninstall()
{}

function moon_activate()
{}

function moon_deactivate()
{}
