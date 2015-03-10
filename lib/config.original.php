<?php
/*
 *  Jirafeau, your web file repository
 *  Copyright (C) 2008  Julien "axolotl" BERNARD <axolotl@magieeternelle.org>
 *  Copyright (C) 2015  Jerome Jutteau <j.jutteau@gmail.com>
 *
 *  This program is free software: you can redistribute it and/or modify
 *  it under the terms of the GNU Affero General Public License as
 *  published by the Free Software Foundation, either version 3 of the
 *  License, or (at your option) any later version.
 *
 *  This program is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU Affero General Public License for more details.
 *
 *  You should have received a copy of the GNU Affero General Public License
 *  along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */
 
/*
 * default configuration
 * if you want to change this, overwrite in a config.local.php file
 */
global $cfg;
 
/* don't forget the ending '/' */
$cfg['web_root'] = '';
$cfg['var_root'] = '';

/* Lang choice between 'auto', 'en' and 'fr'.
   'auto' mode will take the user's browser informations. Will take english if
   user's langage is not available.
 */
$cfg['lang'] = 'auto';
$cfg['style'] = 'modern';
$cfg['rewrite'] = false;
/* preview: false (will download file) or true (will preview in browser if
 * possible) . */
$cfg['preview'] = true;
/* Download page:
 * true: Will show a download page (with preview if permited and possible).
 * false: Will directly download file or preview (if permited and possible). */
$cfg['download_page'] = false;
/* Encryption feature. disable it by default.
 * By enabling it, file-level deduplication won't work. */
$cfg['enable_crypt'] = false;
/* Split lenght of link refenrece. */
$cfg['link_name_lenght'] = 8;
/* Upload password(s). Empty array disable password authentification.
 * $cfg['upload_password'] = array();               // No password
 * $cfg['upload_password'] = array('psw1');         // One password
 * $cfg['upload_password'] = array('psw1', 'psw2'); // Two passwords
 * ... and so on
 */
$cfg['upload_password'] = array();
/* An empty admin password will disable the classic admin password
 * authentication.
 */
$cfg['admin_password'] = '';
/* If set, let's the user to be authenticated as administrator.
 * The user provided here is the user authenticated by HTTP authentication.
 * Note that Jirafeau does not manage the HTTP login part, it just check
 * that the provided user is logged.
 * If admin_password parameter is also set, admin_password is ignored.
 */
$cfg['admin_http_auth_user'] = '';
/* Installation is done ? */
$cfg['installation_done'] = false;

/* Try to include user's local configuration. */
if ((basename (__FILE__) != 'config.local.php')
    && file_exists (JIRAFEAU_ROOT.'lib/config.local.php'))
{
    require (JIRAFEAU_ROOT.'lib/config.local.php');
}

?>
