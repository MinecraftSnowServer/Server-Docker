<?php

/**
 * DokuWiki Image Detail Template
 *
 *
 * LICENSE: This file is open source software (OSS) and may be copied under
 *          certain conditions. See COPYING file for details or try to contact
 *          the author(s) of this file in doubt.
 *
 * @license GPLv2 (http://www.gnu.org/licenses/gpl2.html)
 * @author Andreas Haerter <development@andreas-haerter.com>
 * @link http://andreas-haerter.com/projects/dokuwiki-template-monobook
 * @link http://www.dokuwiki.org/template:monobook
 * @link http://www.dokuwiki.org/devel:templates
 */

//check if we are running within the DokuWiki environment
if (!defined("DOKU_INC")){
    die();
}

//do a little trick to use all the layout generated by main.php:
//1) this file will be called from dokuwiki
//2) we are including the main.php and tell it through $_GET["mddo"] that
//   it has to include the needed content from inc_detail.php at the correct
//   place.

//get the main.php and signal: include the inc_detail.php
$_GET["mddo"] = "detail";
include DOKU_TPLINC."main.php";

