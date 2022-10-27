<?php

namespace Katas\Spec;

use Katas\Kata2;

describe("->gcd", function () {
	it("correctly calculates gcd(n, m) when {n, m} > 0", function () {
		expect(Kata2::gcd(12, 18))->toBe(6);
		expect(Kata2::gcd(100, 35))->toBe(5);
		expect(Kata2::gcd(15, 45))->toBe(15);
		expect(Kata2::gcd(18, 12))->toBe(6);
		expect(Kata2::gcd(35, 100))->toBe(5);
		expect(Kata2::gcd(45, 15))->toBe(15);
	});

	it("passes if gcd(n, m) == n when n == m", function () {
		expect(Kata2::gcd(2, 2))->toBe(2);
		expect(Kata2::gcd(12, 12))->toBe(12);
	});

	it("correctly calculates gcd(n, m) when n and m are both prime", function () {
		expect(Kata2::gcd(5, 19))->toBe(1);
		expect(Kata2::gcd(19, 5))->toBe(1);
		expect(Kata2::gcd(2, 20))->toBe(2);
		expect(Kata2::gcd(20, 2))->toBe(2);
	});

	it("passes if gcd(n, m) == 0 when n == m == 0", function () {
		expect(Kata2::gcd(0, 0))->toBe(0);
	});

	it("throws an InvalidArgumentException if exactly one argument is zero", function () {
		$closure = function () {
			Kata2::gcd(10, 0);
		};
		expect($closure)->toThrow(new \InvalidArgumentException());
		$closure = function () {
			Kata2::gcd(0, 10);
		};
		expect($closure)->toThrow(new \InvalidArgumentException());
	});

	it("throws an InvalidArgumentException if exactly one argument is negative", function () {
		$closure = function () {
			Kata2::gcd(10, -1);
		};
		expect($closure)->toThrow(new \InvalidArgumentException());
		$closure = function () {
			Kata2::gcd(-1, 10);
		};
		expect($closure)->toThrow(new \InvalidArgumentException());
	});

	it("throws an InvalidArgumentException if both arguments are negative", function () {
		$closure = function () {
			Kata2::gcd(-1, -1);
		};
		expect($closure)->toThrow(new \InvalidArgumentException());
	});

	it("throws an InvalidArgumentException if one argument is negative and one is zero", function () {
		$closure = function () {
			Kata2::gcd(-1, 0);
		};
		expect($closure)->toThrow(new \InvalidArgumentException());
		$closure = function () {
			Kata2::gcd(0, -1);
		};
		expect($closure)->toThrow(new \InvalidArgumentException());
	});
});
