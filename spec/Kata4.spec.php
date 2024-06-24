<?php

namespace Katas\Spec;

use Katas\Kata4;

/*
 * Return true if array is sorted and false otherwise.
 */
function isArraySorted($array): bool
{
	$i = 0;
	$total_elements = count($array);
	while ($total_elements > 1) {
		if ($array[$i] <= $array[$i + 1]) {
			$i++;
			$total_elements--;
		} else {
			return false;
		}
	}
	return true;
}

describe("->bubbleSort", function () {
	it("does not alter empty arrays", function () {
		$data = [];
		$data_sorted = Kata4::bubbleSort($data);
		expect(isArraySorted($data_sorted))->toBeTruthy();
		expect($data_sorted)->toHaveLength(0);
	});

	it("does not alter single element arrays", function () {
		$data = [0];
		$data_sorted = Kata4::bubbleSort($data);
		expect(isArraySorted($data_sorted))->toBeTruthy();
		expect($data_sorted)->toHaveLength(1);
	});

	it("does not alter arrays where all elements are identical", function () {
		$d0 = [0, 0, 0, 0, 0];
		$d1 = [1, 1, 1, 1, 1];
		$d2 = [-1, -1, -1, -1, -1];
		$d0_sorted = Kata4::bubbleSort($d0);
		$d1_sorted = Kata4::bubbleSort($d1);
		$d2_sorted = Kata4::bubbleSort($d2);
		expect(isArraySorted($d0_sorted))->toBeTruthy();
		expect(isArraySorted($d1_sorted))->toBeTruthy();
		expect(isArraySorted($d2_sorted))->toBeTruthy();
		expect($d0_sorted)->toHaveLength(5);
		expect($d1_sorted)->toHaveLength(5);
		expect($d2_sorted)->toHaveLength(5);
		foreach ($d0 as $value) {
			expect($value)->toBe(0);
		}
		foreach ($d1 as $value) {
			expect($value)->toBe(1);
		}
		foreach ($d2 as $value) {
			expect($value)->toBe(-1);
		}
	});

	it("correctly sorts reversed arrays", function () {
		$d0 = [5, 4, 3, 2, 1];
		$d1 = [-1, -2, -3, -4, -5];
		$d2 = [2, 1, 0, -1, -2];
		$d0_sorted = Kata4::bubbleSort($d0);
		$d1_sorted = Kata4::bubbleSort($d1);
		$d2_sorted = Kata4::bubbleSort($d1);
		expect(isArraySorted($d0_sorted))->toBeTruthy();
		expect(isArraySorted($d1_sorted))->toBeTruthy();
		expect(isArraySorted($d2_sorted))->toBeTruthy();
		expect($d0_sorted)->toHaveLength(5);
		expect($d1_sorted)->toHaveLength(5);
		expect($d2_sorted)->toHaveLength(5);
	});

	it("correctly sorts out of order arrays", function () {
		$d0 = [0, 5, 2, 4, 3, 1];
		$d1 = [0, -5, -2, -4, 100, -3, -1];
		$d0_sorted = Kata4::bubbleSort($d0);
		$d1_sorted = Kata4::bubbleSort($d1);
		expect(isArraySorted($d0_sorted))->toBeTruthy();
		expect(isArraySorted($d1_sorted))->toBeTruthy();
		expect($d0_sorted)->toHaveLength(6);
		expect($d1_sorted)->toHaveLength(7);
	});
});
