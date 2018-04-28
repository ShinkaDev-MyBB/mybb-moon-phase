<?php

if (!defined("IN_MYBB")) {
    die("Direct initialization of this file is not allowed.");
}

function moon_info()
{
    global $lang;

    if (!$lang->moon) {
        $lang->load("moon");
    }

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
