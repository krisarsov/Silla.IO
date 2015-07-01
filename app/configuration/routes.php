<?php
/**
 * Routes Configuration.
 *
 * @package    Silla.IO
 * @subpackage App\Configuration
 * @author     Plamen Nikolov <plamen@athlonsofia.com>
 * @copyright  Copyright (c) 2015, Silla.io
 * @license    http://opensource.org/licenses/GPL-3.0 GNU General Public License, version 3.0 (GPLv3)
 */

namespace App\Configuration;

use Core;
use Core\Base;
use Aura;

/**
 * Class Routes.
 */
final class Routes extends Base\Routes
{
    /**
     * Setup routes.
     *
     * @example $this->routes->add();
     * @see     https://github.com/auraphp/Aura.Router
     *
     * @return void
     */
    public function setup()
    {
        $this->routes->addGet('home', '/');
        $this->routes->addGet(null, '/{controller}/{action}');
    }
}