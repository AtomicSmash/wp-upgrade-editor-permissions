<?php
/*
Plugin Name: Upgrade editor permissions
Plugin URI: http://www.atomicsmash.co.uk
Description: Add extra permissions to editors
Version: 0.0.1
Author: Atomic Smash
Author URI: http://www.atomicsmash.co.uk
*/

/**
 * Add all Gravity Forms capabilities to Editor role.
 * Add all Menu/Theme capabilities to Editor role.
 */
function activate_pluginname() {

  $role = get_role( 'editor' );
  $role->add_cap( 'gform_full_access' );
  $role->add_cap( 'edit_theme_options' );

}
// Register our activation hook
register_activation_hook( __FILE__, 'activate_pluginname' );
