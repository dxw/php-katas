<?php

namespace Katas\Spec;

use Katas\Kata0;

describe("->max", function () {
	it("passes if max(n, m) == n where n > m > 0", function () {
		expect(Kata0::max(1, 2))->toBe(2);
		expect(Kata0::max(2, 1))->toBe(2);
	});

	it("passes if max(n, n) == n", function () {
		expect(Kata0::max(2, 2))->toBe(2);
		expect(Kata0::max(0, 0))->toBe(0);
		expect(Kata0::max(-1, -1))->toBe(-1);
	});

	it("passes if max(n, m) == n where 0 > n > m", function () {
		expect(Kata0::max(-2, -1))->toBe(-1);
		expect(Kata0::max(-1, -2))->toBe(-1);
	});
});
