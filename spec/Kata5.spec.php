<?php

namespace Katas\Spec;

use Katas\Kata5;

describe("->median", function () {
	it("returns the only element of a single element array", function () {
		$data = [0];
		expect(Kata5::median($data))->toBe(0);
	});

	it("returns the middle element of an odd sized array with identical elements", function () {
		$d0 = [1, 1, 1, 1, 1];
		$d1 = [0, 0, 0, 0, 0];
		$d2 = [-1, -1, -1, -1, -1];
		expect(Kata5::median($d0))->toBe(1);
		expect(Kata5::median($d1))->toBe(0);
		expect(Kata5::median($d2))->toBe(-1);
	});

	it("returns the middle element of an odd sized array with reverse-sorted elements", function () {
		$d0 = [5, 4, 3, 2, 1];
		$d1 = [-1, -2, -3, -4, -5];
		expect(Kata5::median($d0))->toBe(3);
		expect(Kata5::median($d1))->toBe(-3);
	});

	it("returns the middle element of an even sized array with sorted elements", function () {
		$d0 = [0, 1];
		$d1 = [1, 2, 3, 4];
		$d2 = [-4, -3, -2, -1];
		expect(Kata5::median($d0))->toBe(0);
		expect(Kata5::median($d1))->toBe(2);
		expect(Kata5::median($d2))->toBe(-3);
	});

	it("returns the middle element of an odd sized array with unsorted elements", function () {
		$d0 = [5, 2, 4, 3, 1];
		$d1 = [-5, -2, -4, -3, -1];
		expect(Kata5::median($d0))->toBe(3);
		expect(Kata5::median($d1))->toBe(-3);
	});
});
