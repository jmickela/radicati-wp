<?php

// Timber setup goes in here.
require_once 'lib/timber.php';

// wp_enqueue_styles and wp_enqueue_scripts go in here
require_once 'lib/assets.php';

// shortcode definitions go here
require_once 'lib/shortcodes.php';

// Widgets and Widget areas go in here
require_once  'lib/widgets.php';

// Image sizes go in here
require_once 'lib/image_sizes.php';

// Menus go in here
//require_once 'lib/menus.php';

// All actions should go in here
require_once 'lib/actions.php';

// ACF Local Field definitions
// This is faster than having these fields in the database, and puts in them git
// Should only be done with fields that are on every site - they can't be disabled.
require_once 'lib/field_defs.php';