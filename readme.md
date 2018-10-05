# Upgrade editor permissions

Add these extra permissions to WordPress editors:

- Add and edit gravity forms
- Edit theme options
- And and edit menus

This plugin needs only to be activated and run once to apply the correct updates. It then can be removed.

## Setup

1. In the root of your project run `composer require atomicsmash/wp-upgrade-editor-permissions`
2. Activate plugin, you may need to deploy the plugin to enviroments (live, staging etc).
3. De-activate plugin
4. Remove plugin from composer file `composer remove atomicsmash/wp-upgrade-editor-permissions`
