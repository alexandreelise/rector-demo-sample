<?php
declare(strict_types=1);
/**
 * @author        Alexandre ELISÉ <contact@alexandree.io>
 * @copyright (c) 2009 - present. Alexandre ELISÉ. All rights reserved.
 * @license       GPL-2.0-and-later GNU General Public License v2.0 or later
 * @link          https://alexandree.io
 */

namespace App\Tests;

use App\Sample;
use PHPUnit\Framework\TestCase;

/**
 * SampleTest
 * @coversDefaultClass \App\Sample
 * @since 0.1.0
 */
class SampleTest extends TestCase
{
	/**
	 * @covers ::__invoke
	 * @return void
	 * @since 0.1.0
	 */
	public function test__invoke()
	{
		//Given: I have a sample
		$sample = new Sample();
		
		//When: I use __invoke
		$actual = $sample();
		
		//Then: I should get "Hi Rector Team"
		$expected = 'Hi Rector Team';
		$this->assertSame($expected, $actual);
	}
}
