<?php
/*
Author: Hasan Mahamud Rana
URL: rana_imagine@yahoo.com
*/

// Various clean up functions
require_once('library/cleanup.php');

// Required for Foundation to work properly
require_once('library/foundation.php');

// Register all navigation menus
require_once('library/navigation.php');

// Add menu walkers
require_once('library/menu-walker.php');
require_once('library/offcanvas-walker.php');

// Create widget areas in sidebar and footer
require_once('library/widget-areas.php');

// Return entry meta information for posts
require_once('library/entry-meta.php');

// Enqueue scripts
require_once('library/enqueue-scripts.php');

// Add theme support
require_once('library/theme-support.php');

// Add Header image
require_once('library/custom-header.php');

// Add slider
require_once('library/product.php');


// Add cases
require_once('library/cases.php');

// Add nyheder
require_once('library/nyheders.php');

// Add single
require_once('library/single.php');

// Add footer-menu
require_once('library/footer-menu.php');

// Editor tiny-mice
require_once('library/editor.php');


?>