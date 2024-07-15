<?php

/*

This is a file containing settings for all wikiweb wikis.
This file is made specifically for wikiweb and may require
adjustments to work on other farms.

SPDX-License-Identifier: GPL-3.0-or-later

*/

// If this isn't MediaWiki, stop

if ( !defined( 'MEDIAWIKI' ) ) {
        exit;
}

// Global Extensions
wfLoadExtension( 'Echo' ); // Needed for LoginNotify.
wfLoadExtension( 'LoginNotify' ); // Important security feature.
wfLoadExtension( 'Interwiki' ); // Core MediaWiki interface.
wfLoadExtension( 'WikiEditor' ); // Core MediaWiki interface.
wfLoadExtension( 'Scribunto' ); // Core MediaWiki interface.
wfLoadExtension( 'SecureLinkFixer' ); // Ensure everybody uses HTTPS.
// wfLoadExtension( 'NewWiki' ); // This is in development so not available yet.
// wfLoadExtension( 'WWConsole' ); // Same thing.
wfLoadSkin( 'MonoBook' );
wfLoadSkin( 'Vector' );

// Load database, this file isn't on the repository and only available on
// the main WikiWeb servers.
include("/var/www/DatabaseSettings.php");
