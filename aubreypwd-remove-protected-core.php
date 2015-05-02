<?php

/**
 * Remove Protected Base Class.
 */
if ( ! class_exists( 'AubreyPwd_Remove_Protected_Base' ) ):
class AubreyPwd_Remove_Protected_Core {
	function __construct() {

		// These filters will filter each title.
		add_filter( 'private_title_format', array( $this, 'aubreypwd_remove_protected' ) );
		add_filter( 'protected_title_format', array( $this, 'aubreypwd_remove_protected' ) );
	}

	/**
	 * Return the title without the rest of the format.
	 * @param  string $format The original format that includes extra stuff.
	 * @return string         Just the title.
	 */
	function aubreypwd_remove_protected( $format ) {
		return '%s';
	}
}

// Create our base class.
new AubreyPwd_Remove_Protected_Core();
endif;