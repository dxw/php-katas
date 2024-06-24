<?php

/**
 * Kata 0: max() function with Kahlan test suite.
 *
 * This Kata is intended to introduce you to this series of exercises.
 * Please read the README.md file for more details and a solution to this Kata.
 *
 * Credits: based on an example by Wayne Pollock <pollock@acm.org>
 */
declare(strict_types=1);

namespace Katas;

/**
 * Kata0 -- an example Kata with a solution specified in README.md.
 */
final class Kata0
{
	/**
	 * max() should return the maximum of two given integer numbers.
	 * For example, max(1, 100) should return 100.
	 */
	public static function max(int $n1, int $n2): int
	{
		return $n1 > $n2 ? $n1 : $n2;
	}
}
