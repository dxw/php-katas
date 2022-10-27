<?php

/**
 * Kata 2: gcd() by Dijkstra's algorithm with Kahlan test suite.
 */
declare(strict_types=1);

namespace Katas;

/**
 * Kata2.
 */
final class Kata2
{
	/**
	 * gcd() should return the greatest common divisor of two numbers.
	 *
	 * The greatest common divisor of two numbers is the largest number that
	 * divides both numbers with no remainder. For example:
	 *
	 * gcd(12, 18) = 6, since 12 = 2 x 6 and 18 = 3 x 6
	 * gcd(100, 35) = 5, since 100 = 5 x 20 and 35 = 5 x 7
	 * gcd(15, 45) = 15, since 15 = 1 x 15 and 45 = 15 x 3
	 * gcd(5, 19) = 1, since 5 = 1 x 5 and 19 = 1 x 19
	 *
	 *
	 * For this kata, you should use the "Dijkstra's algorithm" to find the gcd of
	 * the two arguments. The algorithm works like this:
	 *
	 *    if (n1 == n2) then n1
	 *    else if n1 is greater than n2 call gcd(n1 - n2, n2)
	 *    else call gcd(n1, n2 - n1)
	 *
	 * Note that gcd() expects *BOTH* arguments to be positive integers. If
	 * either argument is not a positive integer, the method should throw the
	 * exception InvalidArgumentException.
	 */
	public static function gcd(int $n1, int $n2): int
	{
		// TODO: Complete this function!
		return 0;
	}
}
