<?php
declare(strict_types=1);


namespace Acme\Tools;

/**
 * Util
 *
 * @since 0.1.0
 */
final class Util
{
	public static function hello()
	{
		$deadCode = new DeadCode();
		$deadCode->noop();
		
		return 'Hi Rector Team!';
	}
}
