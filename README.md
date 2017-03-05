# D4 Base Plugin

This plugin includes two primary sections - the "custom" directory and the "lib" directory. The custom directory is your go-to place for adding custom scripts, styles, and functions to any Wordpress site - think of the custom directory as the legacy d4 base plugin folder. The lib directory is a pre-populated library full of commonly used php functions such as post types and shortcodes.

To activate the custom directory, install the plugin and uncomment the line in the index file that includes the custom.php file. This is the parent file that manages custom includes and registers for scripts and stylesheets.

To activate any of the lib directory elements, just uncomment the corresponding line in the index file.
