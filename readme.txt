=== Plugin Name ===
Contributors: carlconrad
Tags: security, HTTP headers, HSTS, HTTPS, CSP
Requires at least: 4.6
Tested up to: 4.8
Stable tag: 2.3.1
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Use your HTTP header to improve security of your web site

== Description ==

This plug-in helps setting up the various header instructions included in the HTTP protocol allowing for simple improvement of your website security.

This plug-in provides enabling of the following measures:

* HSTS (Strict-Transport-Security)
* CSP (Content-Security-Policy)
* Clickjacking mitigation (X-Frame-Options in main site)
* XSS protection (X-XSS-Protection)
* Disabling content sniffing (X-Content-Type-Options)
* Referrer policy
* Expect-CT
* Remove PHP version information from the HTTP header
* Remove WordPress version information from the header

<a href="https://securityheaders.io/">securityheaders.io</a> is a useful resource for evaluating your web site's security.

As usual, make sure to understand the meaning of these options and to run full tests on your web site as some options may result in some features stop working.

== Installation ==

1. Upload the plugin files to the <code>/wp-content/plugins/http-security directory</code>, or install the plugin through the WordPress plugins screen directly.
1. Activate the plugin through the "Plugins" screen in WordPress.
1. Use the Settings->HTTP Security screen to configure the plugin.

== Frequently Asked Questions ==

= How can I test the plug-in runs effectively? =

Check the HTTP headers of your web site.

== Screenshots ==

1. General settings screen.
2. Content-Security-Policy directives settings screen.

== Changelog ==

= 2.3 =
* Added support for Expect-CT
* Cleaned up the interface

= 2.2 =
* Switched to languages packs

= 2.1 =
* Added support for Referrer-Policy directive
* Added uninstall database cleanup

= 2.0 =
* Added support for all Content-Security-Policy directives
* Reworked the user interface

= 1.11 =
* Added setting the mode for x-frame-options

= 1.10.7 =
* Removed HSTS header when connected in HTTP

= 1.10.6 =
* Improved ergonomics

= 1.10.3 =
* Fixed HSTS syntax warning

= 1.10 =
* Added support for Content-Security-Policy

= 1.9 =
* Added critical issues notifications

= 1.8 =
* Included localization support

= 1.7.5 =
* Added max-age option to HSTS setting

= 1.7.3 =
* File name change to comply with Wordpress guidelines

= 1.7 =
* Minor fixes and code cleaning

= 1.6 =
* Added option to remove WordPress version information from the header

= 1.5 =
* Added option to remove PHP version information from the HTTP header

= 1.4 =
* Included link to submit site preload to browsers
* Reduced HSTS max-age to one year

= 1.3 =
* Added X-Frame-Options protection.
* Added X-Content-Type-Options protection.
* Added HSTS options.

= 1.2 =
* Repository fix.

= 1.1 =
* Added XSS protection option.

= 1.0 =
* First stable version providing basic HSTS support.

== Upgrade Notice ==

= 2.0 =
* Due to a deep change in the user interface, Content-Security-Policy settings are reset and will need to be redefined.

= 1.7.3 =
* Due to a file name change to comply with WordPress guidelines, plug in needs to be uninstalled and reinstalled.

= 1.0 =
First stable version.