<?php

/**
 * Kata 5: median() find the middle value in a numeric array.
 */
declare(strict_types=1);

namespace Katas;

use Katas\Kata4;

/**
 * Kata5.
 */
final class Kata5
{
	/**
	 * median() should return the middle value in an array. For example, if the
	 * array contains the following: [1, 2, 3, 4, 5], median() should return the
	 * value 3.
	 *
	 * The array: [0, 1] has median 0. Why? There are an even number of elements
	 * in the array, so the mathematical median should be (0 + 1) / 2 which is
	 * 0.5, and so not an int.
	 *
	 * median() will normally return the median value of the array that is
	 * passed to it.
	 *
	 * HINT: You might want to look at the PHP documentation on mathematical
	 * functions: https://www.php.net/manual/en/ref.math.php
	 *
	 * BIG HINT:You can use your code from the previous Kata to help you!
	 */
	public static function median(array $array): int
	{
		$arrayLength = count($array);
		$sum = array_sum($array);
		$median = intval($sum / $arrayLength);
		return $median;
	}
}