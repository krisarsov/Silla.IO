<?php
/**
 * Smarty plugin.
 *
 * @package    Smarty
 * @subpackage Vendor\Athlon\SmartyPlugins
 * @author     Kalin Stefanov <kalin@athlonsofia.com>
 * @copyright  Copyright (c) 2015, Silla.io
 * @license    http://opensource.org/licenses/GPL-3.0 GNU General Public License, version 3.0 (GPLv3)
 */

use ICanBoogie\Inflector;

/**
 * Smarty classify modifier plugin.
 *
 * Type:     modifier<br>
 * Name:     classify<br>
 * Purpose:  classify words in the string
 *
 * @param string $string Input string.
 *
 * @return string
 */
function smarty_modifier_classify($string)
{
    $inflector = Inflector::get();

    return $inflector->camelize($inflector->singularize($string));
}
