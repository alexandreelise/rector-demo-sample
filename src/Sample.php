<?php
declare(strict_types=1);
/**
 * @author        Alexandre ELISÉ <contact@alexandree.io>
 * @copyright (c) 2009 - present. Alexandre ELISÉ. All rights reserved.
 * @license       GPL-2.0-and-later GNU General Public License v2.0 or later
 * @link          https://alexandree.io
 */

namespace App;

/**
 * Sample
 *
 * @since 0.1.0
 */
final class Sample
{
	public function __invoke()
	{
	   echo \Acme\Tools\Util::hello();
	}
}
