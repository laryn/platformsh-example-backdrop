<?php

/**
 * @file
 * Main Backdrop CMS configuration file.
 */

$config_directories['active'] = '../config/active';
$config_directories['staging'] = '../config/staging';

ini_set('session.gc_probability', 1);
ini_set('session.gc_divisor', 100);
ini_set('session.gc_maxlifetime', 200000);
ini_set('session.cookie_lifetime', 2000000);
// ini_set('pcre.backtrack_limit', 200000);
// ini_set('pcre.recursion_limit', 200000);

$settings['backdrop_drupal_compatibility'] = TRUE;
$settings['update_free_access'] = FALSE;

// The hash_salt should be a unique random value for each application.
// If left unset, the settings.platformsh.php file will attempt to provide one.
// You can also provide a specific value here if you prefer and it will be used
// instead. In most cases it's best to leave this blank on Platform.sh. You
// can configure a separate hash_salt in your settings.local.php file for
// local development.
$settings['hash_salt'] = 'YaoBgLRmp-nfABKWdtMX27VnJE5qRzSM3h6qg3P0Yvs';

$settings['404_fast_paths_exclude'] = '/\/(?:styles)|(?:system\/files)\//';
$settings['404_fast_paths'] = '/\.(?:txt|png|gif|jpe?g|css|js|ico|swf|flv|cgi|bat|pl|dll|exe|asp)$/i';
$settings['404_fast_html'] = '<!DOCTYPE html><html><head><title>404 Not Found</title></head><body><h1>Not Found</h1><p>The requested URL "@path" was not found on this server.</p></body></html>';

// Include automatic Platform.sh settings.
if (file_exists(__DIR__ . '/settings.platformsh.php')) {
  require_once(__DIR__ . '/settings.platformsh.php');
}

// Include local settings. These come last so that they can override anything.
$on_platformsh = !empty($_ENV['PLATFORM_PROJECT']);
if (file_exists(__DIR__ . '/settings.local.php') && !$on_platformsh) {
  require_once(__DIR__ . '/settings.local.php');
}
