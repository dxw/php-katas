<?php

/**
 * Kata 1: min() function with Kahlan test suite.
 *
 * This Kata is the first one you will be solving on your own. Make sure that
 * you have read the README and completed Kata0 before you start!
 */
declare(strict_types=1);

namespace Katas;

final class Kata1
{
	/* min() should return the minimum of two given integer numbers.
	 *
	 * For example, min(1, 100) should return 1.
	 */
	public static function min(int $n1, int $n2): int
	{
		return $n1 < $n2 ? $n1 : $n2;
	}
}