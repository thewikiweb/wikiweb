<?php

if ( !defined( 'MEDIAWIKI' ) ) {
        exit;
}

$wgEnableUploads = false;
$wgUseImageMagick = false;

// Global Extensions
wfLoadExtension( 'Echo' ); // Needed for LoginNotify.
wfLoadExtension( 'LoginNotify' ); // Important security feature.
wfLoadExtension( 'Interwiki' ); // Core MediaWiki interface.
wfLoadExtension( 'WikiEditor' ); // Core MediaWiki interface.
wfLoadExtension( 'Scribunto' ); // Core MediaWiki interface.
wfLoadExtension( 'SecureLinkFixer' ); // Ensure everybody uses HTTPS.
wfLoadSkin( 'MonoBook' );
wfLoadSkin( 'Vector' );

// Load database, this file isn't on the repository and only available on
// the main WikiWeb servers.
include("DatabaseSettings.php");
