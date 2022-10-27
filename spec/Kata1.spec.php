<?php

namespace Katas\Spec;

use Katas\Kata1;

describe("->min", function () {
	it("passes if min(n, m) == m where n > m > 0", function () {
		expect(Kata1::min(1, 2))->toBe(1);
		expect(Kata1::min(2, 1))->toBe(1);
	});

	it("passes if min(n, n) == n", function () {
		expect(Kata1::min(2, 2))->toBe(2);
		expect(Kata1::min(0, 0))->toBe(0);
		expect(Kata1::min(-1, -1))->toBe(-1);
	});

	it("passes if min(n, m) == m where 0 > n > m", function () {
		expect(Kata1::min(-2, -1))->toBe(-2);
		expect(Kata1::min(-1, -2))->toBe(-2);
	});
});
