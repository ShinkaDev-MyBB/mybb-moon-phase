<?php
/**
 * Provides moon phase data as global variable for use in templates.
 *
 * @author  Kalyn Robinson <dev@shinkarpg.com>
 * @license http://unlicense.org/ Unlicense
 * @version 1.0.0
 */

require_once MYBB_ROOT . "inc/plugins/moon/MoonPhase.php";

function moon_get()
{
    $moon = new MoonPhase();

    // full_moon() gets the date of the full moon for the CURRENT lunar cycle
    // compare full_moon() timestamp with current timestamp; if already passed, get
    // full moon for NEXT lunar cycle
    $full_moon = $moon->full_moon();
    $full_moon = $full_moon < time() ? $moon->next_full_moon() : $full_moon;

    $new_moon = $moon->new_moon();
    $new_moon = $new_moon < time() ? $moon->next_new_moon() : $new_moon;

    $stage = $moon->phase() < 0.5 ? 'waxing' : 'waning';
    $phase = $moon->phase_name();

    // set default timezone for past-midnight issue
    date_default_timezone_set('MST');
    $formatted_full_moon = date('M j', $full_moon);
    $formatted_new_moon = date('M j', $new_moon);

    return [
        'full_moon' => $full_moon,
        'new_moon' => $new_moon,
        'stage' => $stage,
        'phase' => $phase,
        'formatted_full_moon' => $formatted_full_moon,
        'formatted_new_moon' => $formatted_new_moon,
    ];
}
