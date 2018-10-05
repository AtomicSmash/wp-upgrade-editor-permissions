# Upgrade editor permissions

This plugin only needs to be activated and run once to apply the correct updates. The plugin can be removed after activation.

These extra permissions are added to WordPress editors:

- Edit gravity forms
- Edit theme options
- Edit menus

## Setup

1. In the root of your project run `composer require atomicsmash/wp-upgrade-editor-permissions`
2. Activate plugin, you may need to deploy the plugin to enviroments (live, staging etc).
3. De-activate plugin
4. Remove plugin from composer file `composer remove atomicsmash/wp-upgrade-editor-permissions`
