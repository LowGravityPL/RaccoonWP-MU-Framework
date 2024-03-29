<?php

/*
Plugin Name:  RaccoonWP MU Framework
Plugin URI:   https://lowgravity.pl/
Description:  This MU plugin contains RaccoonWP Framework functions and classes.
Version:      2.3.0
Author:       LowGravity.pl
Author URI:   https://raccoonwp.lowgravity.pl/
License:      MIT License
*/

declare(strict_types=1);

namespace RaccoonMUFramework;

//As those are not class based files (mostly) we do not rely on PSR-4 autoloader here.
require_once __DIR__ . '/helpers/acf-json.php';
require_once __DIR__ . '/helpers/get-entity-list.php';
require_once __DIR__ . '/helpers/include-theme-partial.php';
require_once __DIR__ . '/setup/setup.php';
require_once __DIR__ . '/setup/disable-plugins.php';

//todo: we probably should autoload these
require_once __DIR__ . '/Lib/PluginDisabler.php';
require_once __DIR__ . '/Lib/DefaultDataHelper.php';
