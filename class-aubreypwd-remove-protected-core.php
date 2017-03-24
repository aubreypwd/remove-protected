<?php
/**
 * Remove Protected Core.
 *
 * @package AubreyPwd_Remove_Protected
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'AubreyPwd_Remove_Protected_Base' ) ) :

	/**
	 * Remove Protected Core Class.
	 *
	 * @author Aubrey Portwood
	 * @since  1.0.0
	 */
	class Aubreypwd_Remove_Protected {

		/**
		 * Construct.
		 *
		 * @since  1.0.0
		 * @author Aubrey Portwood
		 */
		function __construct() {

			/**
			 * Whether or not to disable this feature.
			 *
			 * This just gives developers a way to get around this feature.
			 *
			 * @author Aubrey Portwood
			 * @since  1.0.2
			 *
			 * @var boolean True to disable, default to false to go ahead and replace the prefix.
			 */
			$disable = apply_filters( 'aubreypwd_remove_protected_disabled', false );

			if ( true === $disable ) {

				// Bail here, they don't want to disable the remove protected text.
				return;
			}

			// These filters will filter each title.
			add_filter( 'private_title_format', array( $this, 'aubreypwd_remove_protected' ) );
			add_filter( 'protected_title_format', array( $this, 'aubreypwd_remove_protected' ) );
		}

		/**
		 * Return the title without the rest of the format.
		 *
		 * @since  1.0.0
		 * @author Aubrey Portwood
		 *
		 * @param  string $format The original format that includes extra stuff.
		 *
		 * @return string Just the title.
		 */
		function aubreypwd_remove_protected( $format ) {

			// Ignore the current format, and just always replace it with the title: %s.
			return '%s';
		}
	}

	// Create our base class.
	new Aubreypwd_Remove_Protected();

endif;
