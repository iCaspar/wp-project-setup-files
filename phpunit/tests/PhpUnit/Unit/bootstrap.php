<?php
/**
 * Bootstraps the project's Unit Tests
 *
 * @since 1.2.0
 * @author Caspar Green
 * @link https://iCasparWebDevelopment.com
 * @license GNU-2.0+
 */

if ( version_compare( phpversion(), '7.1', '<=' ) ) {
	die( 'Tests require at least PHP v.7.1' );
}

define( 'PROJECT_TESTS_DIR', __DIR__ );
define( 'PROJECT_DIR', dirname( dirname( dirname( __DIR__ ) ) ) . DIRECTORY_SEPARATOR );

$project_autoload_path = PROJECT_DIR . 'vendor/';

if ( ! file_exists( $project_autoload_path . 'autoload.php' ) ) {
	die( 'Composer is not installed in ' . $project_autoload_path . 'vendor/. Maybe try "composer install"?' );
}

require_once $project_autoload_path . 'autoload.php';

unset ( $project_autoload_path );