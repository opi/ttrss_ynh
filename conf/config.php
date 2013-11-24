﻿<?php
// *******************************************
// *** Database configuration (important!) ***
// *******************************************

define('DB_TYPE', "mysql"); // or mysql
define('DB_HOST', "localhost");
define('DB_USER', "yunouser");
define('DB_NAME', "yunobase");
define('DB_PASS', "yunopass");
//define('DB_PORT', '5432'); // when neeeded, PG-only

define('MYSQL_CHARSET', 'UTF8');
// Connection charset for MySQL. If you have a legacy database and/or experience
// garbage unicode characters with this option, try setting it to a blank string.

// ***********************************
// *** Basic settings (important!) ***
// ***********************************

define('SELF_URL_PATH', 'yunopath');
// Full URL of your tt-rss installation. This should be set to the
// location of tt-rss directory, e.g. http://yourserver/tt-rss/
// You need to set this option correctly otherwise several features
// including PUSH, bookmarklets and browser integration will not work properly.

define('SINGLE_USER_MODE', false);
// Operate in single user mode, disables all functionality related to
// multiple users.

define('SIMPLE_UPDATE_MODE', false);
// Enables fallback update mode where tt-rss tries to update feeds in
// background while tt-rss is open in your browser. 
// If you don't have a lot of feeds and don't want to or can't run 
// background processes while not running tt-rss, this method is generally 
// viable to keep your feeds up to date.
// Still, there are more robust (and recommended) updating methods 
// available, you can read about them here: http://tt-rss.org/wiki/UpdatingFeeds

// *****************************
// *** Files and directories ***
// *****************************

define('PHP_EXECUTABLE', '/usr/bin/php');
// Path to PHP executable, used for various command-line tt-rss programs

define('LOCK_DIRECTORY', 'lock');
// Directory for lockfiles, must be writable to the user you run
// daemon process or cronjobs under.

define('CACHE_DIR', 'cache');
// Local cache directory for RSS feed content.

define('ICONS_DIR', "feed-icons");
define('ICONS_URL', "feed-icons");
// Local and URL path to the directory, where feed favicons are stored.
// Unless you really know what you're doing, please keep those relative
// to tt-rss main directory.

// **********************
// *** Authentication ***
// **********************

// Please see PLUGINS below to configure various authentication modules.

define('AUTH_AUTO_CREATE', true);
// Allow authentication modules to auto-create users in tt-rss internal
// database when authenticated successfully.

define('AUTH_AUTO_LOGIN', true);
// Automatically login user on remote or other kind of externally supplied
// authentication, otherwise redirect to login form as normal.
// If set to true, users won't be able to set application language
// and settings profile.

// *********************
// *** Feed settings ***
// *********************

define('FORCE_ARTICLE_PURGE', 0);
// When this option is not 0, users ability to control feed purging
// intervals is disabled and all articles (which are not starred) 
// older than this amount of days are purged.

// *** PubSubHubbub settings ***

define('PUBSUBHUBBUB_HUB', '');
// URL to a PubSubHubbub-compatible hub server. If defined, "Published
// articles" generated feed would automatically become PUSH-enabled.

define('PUBSUBHUBBUB_ENABLED', false);
// Enable client PubSubHubbub support in tt-rss. When disabled, tt-rss
// won't try to subscribe to PUSH feed updates.

// *********************
// *** Sphinx search ***
// *********************

define('SPHINX_ENABLED', false);
// Enable fulltext search using Sphinx (http://www.sphinxsearch.com)
// Please see http://tt-rss.org/wiki/SphinxSearch for more information.

define('SPHINX_INDEX', 'ttrss');
// Index name in Sphinx configuration. You can specify multiple indexes
// as a comma-separated string.

// ***********************************
// *** Self-registrations by users ***
// ***********************************

define('ENABLE_REGISTRATION', false);
// Allow users to register themselves. Please be vary that allowing
// random people to access your tt-rss installation is a security risk
// and potentially might lead to data loss or server exploit. Disabled
// by default.

define('REG_NOTIFY_ADDRESS', 'user@your.domain.dom');
// Email address to send new user notifications to.

define('REG_MAX_USERS', 10);
// Maximum amount of users which will be allowed to register on this
// system. 0 - no limit.

// **********************************
// *** Cookies and login sessions ***
// **********************************

define('SESSION_COOKIE_LIFETIME', 0);
// Default lifetime of a session (e.g. login) cookie. In seconds, 
// 0 means cookie will be deleted when browser closes.

define('SESSION_EXPIRE_TIME', 86400);
// Hard expiration limit for sessions. Should be
// greater or equal to SESSION_COOKIE_LIFETIME

define('SESSION_CHECK_ADDRESS', 1);
// Check client IP address when validating session:
// 0 - disable checking
// 1 - check first 3 octets of an address (recommended)
// 2 - check first 2 octets of an address
// 3 - check entire address

// *********************************
// *** Email and digest settings ***
// *********************************

define('SMTP_FROM_NAME', 'Tiny Tiny RSS');
define('SMTP_FROM_ADDRESS', 'noreply@your.domain.dom');
// Name, address and subject for sending outgoing mail. This applies
// to password reset notifications, digest emails and any other mail.

define('DIGEST_SUBJECT', '[tt-rss] New headlines for last 24 hours');
// Subject line for email digests

define('SMTP_HOST', '');
// SMTP Host to send outgoing mail. Blank - use system MTA.

define('SMTP_LOGIN', '');
define('SMTP_PASSWORD', '');
// These two options enable SMTP authentication when sending
// outgoing mail. Only used with SMTP_HOST

// ***************************************
// *** Other settings (less important) ***
// ***************************************

define('CHECK_FOR_NEW_VERSION', true);
// Check for new versions of tt-rss automatically.

define('ENABLE_GZIP_OUTPUT', false);
// Selectively gzip output to improve wire performance. This requires
// PHP Zlib extension on the server.
// Enabling this can break tt-rss in several httpd/php configurations,
// if you experience weird errors and tt-rss failing to start, blank pages
// after login, or content encoding errors, disable it.

define('PLUGINS', 'auth_remote, auth_internal, note');
// Comma-separated list of plugins to load automatically for all users.
// System plugins have to be specified here. Please enable at least one
// authentication plugin here (auth_*).
// Users may enable other user plugins from Preferences/Plugins but may not
// disable plugins specified in this list.

define('CONFIG_VERSION', 26);
// Expected config version. Please update this option in config.php
// if necessary (after migrating all new options from this file).

// vim:ft=php
?>

