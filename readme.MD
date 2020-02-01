![WordPress Plugin Version](https://img.shields.io/wordpress/plugin/v/add-polylang-support-for-customizer?label=Plugin%20Version&style=social) ![WordPress Plugin Downloads](https://img.shields.io/wordpress/plugin/dy/add-polylang-support-for-customizer?style=social) ![WordPress Plugin Active Installs](https://img.shields.io/wordpress/plugin/installs/add-polylang-support-for-customizer?style=social)
# Add Polylang support for Customizer

This plugin adds Polylang support for WordPress Customizer.

![banner](https://ps.w.org/add-polylang-support-for-customizer/assets/banner-772x250.png)
## Features

* Language switcher in Customizer.
* Localized theme_mods and options for both default and custom made Customizer values.

## Prerequisite

1. Polylang must be installed and activated.
2. Languages must be set in **Admin > Languages**.
3. _If you have a static front page_:
	1. _Create a front page per each language._
	2. _Select the front page in **Admin > Settings > Reading** per language._
5. Expect customizer to use setting type = `theme_mod` (default) as in:

`$wp_customize->add_setting( 'setting_id', [ 'type' => 'theme_mod', ] );`

## Installation

This plugin can be installed directly into your plugins folder "as-is"<br/>
or if you go to **Admin panel > Plugins > Add new > Upload Plugin** and select the archive containing this plugin.

It's safe to activate the plugin at this point. Because the plugin just injects some functionality - there will be no plugin menus or settings to play with.
License

## License

This plugin is licensed under the GPL v2 or later.

> This program is free software; you can redistribute it and/or modify it under the terms of the GNU General Public License, version 2, as published by the Free Software Foundation.

> This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.

> You should have received a copy of the GNU General Public License along with this program; if not, write to the Free Software Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA 02110-1301 USA

A copy of the license is included in the root of the plugin’s directory. The file is named `LICENSE`.

## Important Notes

### Licensing

This plugin is licensed under the GPL v2 or later; however, if you opt to use third-party code that is not compatible with v2, then you may need to switch to using code that is GPL v3 compatible.

For reference, [here's a discussion](http://make.wordpress.org/themes/2013/03/04/licensing-note-apache-and-gpl/) that covers the Apache 2.0 License used by [Bootstrap](http://twitter.github.io/bootstrap/).

# Credits

Original solution made by [@soderlind](https://github.com/soderlind) is available [here](https://github.com/soderlind/customizer-polylang). Share some love! This is WordPress plugin version of his solution.
