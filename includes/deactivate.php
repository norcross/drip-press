<?php
/**
 * Our deactivation call.
 *
 * @package DripPress
 */

// Declare our namespace.
namespace DripPress\Deactivate;

// Set our aliases.
use DripPress as Core;

/**
 * Delete various options when deactivating the plugin.
 *
 * @return void
 */
function deactivate() {

	// Include our action so that we may add to this later.
	do_action( Core\HOOK_PREFIX . 'deactivate_process' );

	// And flush our rewrite rules.
	flush_rewrite_rules();
}
register_deactivation_hook( Core\FILE, __NAMESPACE__ . '\deactivate' );
