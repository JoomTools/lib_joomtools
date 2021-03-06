<?php
/**
 * @package     JT
 * @subpackage  Library
 *
 * @copyright   Copyright (C) 2015 Guido De Gobbis - JoomTools. All rights reserved.
 * @license     GNU General Public License version 3 or later; see LICENSE
 */

defined('_JEXEC') or die;

// Ensure that autoloaders are set
JLoader::setup();

// Global libraries autoloader
JLoader::registerPrefix('LibJT', dirname(__FILE__));
JLoader::register('JDocumentHTML', dirname(__FILE__) . '/document/html/html.php');
JLoader::register('JHttpTransportCurl', dirname(__FILE__) . '/http/transport/curl.php');

// Common fields
JFormHelper::addFieldPath(dirname(__FILE__) . '/form/fields');

// Common form rules
//JFormHelper::addRulePath(dirname(__FILE__) . '/form/rule');

// Common HTML helpers
JHtml::addIncludePath(dirname(__FILE__) . '/html');

// Load library language
//$lang = JFactory::getLanguage();
//$lang->load('lib_sample', JPATH_SITE);
