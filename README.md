# PHP katas

![CI status](https://github.com/dxw/php-katas/actions/workflows/continuous-integration.yml/badge.svg)

This repository contains small exercises (katas) which can be used to practice
PHP coding. These are aimed at developers who are new to PHP.

## Getting started

Start by forking this repository into your own space on GitHub by pressing the
**Fork** button on the front page of the repository.

Clone the repository locally:

```shell
git clone git@github.com:YOUR-USERNAME/php-katas.git
cd php-katas
```

This repository follows the [Scripts to rule them all](https://github.com/github/scripts-to-rule-them-all) pattern. To get the project into an initial state,
including installing dependencies:

```shell
./script/setup
```

To run the available lints, first run `script/setup`, and then:

```shell
./script/test
```

## The katas

Each Kata is a simple class containing one documented static function, and a
set of unit tests. In order to complete each kata, you need to complete the code
in the function so that the unit tests all pass, and the function behaves as its
documentation describes.

### Running each kata

The katas here are not intended to be run as stand-alone programs.
Instead, they should be tested using [Kahlan](https://github.com/kahlan/kahlan)
unit test.

To run these, use the `script/run` script and pass it the file in `spec/` which
matches the kata you are working on.

For example, for `Kata0`, you would run:

```shell
❯ ./script/run spec/Kata0.spec.php
==> Running Kata0...
            _     _
  /\ /\__ _| |__ | | __ _ _ __
 / //_/ _` | '_ \| |/ _` | '_ \
/ __ \ (_| | | | | | (_| | | | |
\/  \/\__,_|_| |_|_|\__,_|_| |_|

The PHP Test Framework for Freedom, Truth and Justice.

src directory  : .../php-katas/src
spec directory : .../php-katas/spec/Kata0.spec.php

FFF                                                                 3 / 3 (100%)


->max
  ✖ it passes if max(n, m) == n where n > m > 0
    expect->toBe() failed in `.spec/Kata0.spec.php` line 9

    It expect actual to be identical to expected (===).

    actual:
      (integer) 0
    expected:
      (integer) 2

    expect->toBe() failed in `.spec/Kata0.spec.php` line 10

    It expect actual to be identical to expected (===).

    actual:
      (integer) 0
    expected:
      (integer) 2

->max
  ✖ it passes if max(n, n) == n
    expect->toBe() failed in `.spec/Kata0.spec.php` line 14

    It expect actual to be identical to expected (===).

    actual:
      (integer) 0
    expected:
      (integer) 2

    expect->toBe() failed in `.spec/Kata0.spec.php` line 16

    It expect actual to be identical to expected (===).

    actual:
      (integer) 0
    expected:
      (integer) -1

->max
  ✖ it passes if max(n, m) == n where 0 > n > m
    expect->toBe() failed in `.spec/Kata0.spec.php` line 20

    It expect actual to be identical to expected (===).

    actual:
      (integer) 0
    expected:
      (integer) -1

    expect->toBe() failed in `.spec/Kata0.spec.php` line 21

    It expect actual to be identical to expected (===).

    actual:
      (integer) 0
    expected:
      (integer) -1


Expectations   : 7 Executed
Specifications : 0 Pending, 0 Excluded, 0 Skipped

Passed 0 of 3 FAIL (FAILURE: 3) in 0.011 seconds (using 3MB)
```

The output tells us several things.
Firstly, three tests were run, and they all failed.

Secondly, for each test that failed, we can see the expected, and actual
test results.

We are also told _why_ the test was written and what was being tested. For
example `it passes if max(n, m) == n where n > m > 0`.

For the first two tests described above, the output tells us that the function
should have returned `2` but actually returned `0`.

## Completing each kata

The katas themselves can be found in the `src/` directory. Each Kata has a
single function for you to write, with a brief, informal, specification
described in its comments.

For each kata, you should:

1. Create a new branch, for example `git checkout -b solution/kata0`.
1. Complete the kata, following the advice below.
1. Commit your changes using Git.
1. Push your changes.
1. Create a pull request from your feature branch (e.g. `solution/kata0`) to
   the `main` branch in your fork.
1. Request code review for your pull request.
1. Once your code has been reviewed, merge your branch with a merge commit.

## Completing `Kata0`

For example, in `src/Kata0.php` you will see:

```php
final class Kata0
{
	/**
	 * max() should return the maximum of two given integer numbers.
	 * For example, max(1, 100) should return 100.
	 */
	public static function max(int $n1, int $n2): int
	{
		// TODO: Complete this function!
		return 0;
	}
}
```

This function should return the maximum of two arguments. Currently it returns
a default, random result and running the unit tests (see above) tells us that
this does not meet the specification.

Your task is to edit the code until it meets the specification and passes the
unit tests.

For `Kata0` your solution might be:

```php
final class Kata0
{
	/**
	 * max() should return the maximum of two given integer numbers.
	 * For example, max(1, 100) should return 100.
	 */
	public static function max(int $n1, int $n2): int
	{
		if ($n1 > $n2) {
			return $n1;
		}
			return $n2;
	}
}
```

and the tests should give the following output:

```shell
❯ ./script/run spec/Kata0.spec.php
==> Running Kata0...
            _     _
  /\ /\__ _| |__ | | __ _ _ __
 / //_/ _` | '_ \| |/ _` | '_ \
/ __ \ (_| | | | | | (_| | | | |
\/  \/\__,_|_| |_|_|\__,_|_| |_|

The PHP Test Framework for Freedom, Truth and Justice.

src directory  : .../php-katas/src
spec directory : .../php-katas/spec/Kata0.spec.php

...                                                                 3 / 3 (100%)



Expectations   : 7 Executed
Specifications : 0 Pending, 0 Excluded, 0 Skipped

Passed 3 of 3 PASS in 0.006 seconds (using 3MB)

===> Linting shell scripts...
Checking ./script/bootstrap
Checking ./script/test
Checking ./script/setup
Checking ./script/run
Checking ./.shellcheck.sh
OK
===> Linting PHP...
PHP CS Fixer 3.12.0 Oliva by Fabien Potencier and Dariusz Ruminski.
PHP runtime: 7.4.32
Loaded config default from ".../php-katas/.php-cs-fixer.php".
Using cache file ".php-cs-fixer.cache".
SSSSSSSSS                                                                                                                                                                                                                                                         9 / 9 (100%)
Legend: .-no changes, F-fixed, S-skipped (cached or empty file), I-invalid file syntax (file ignored), E-error
Target PHP version: 7.4 (inferred from composer.json)
Scanning files...
Analyzing files...


------------------------------

       No errors found!

------------------------------

Checks took 0.01 seconds and used 4.672MB of memory
No files analyzed
Psalm was able to infer types for 100% of the codebase
===> Check for 100% test coverage...
Total: 100.00% (2/2)
```

which shows that all tests in the suite passed.

Note that as well as running the unit tests, this time a number of other
tests have been run. For example `===> Linting PHP...`.

These tests check that your PHP code is formatted according to our standard
conventions, and that the unit tests have covered (tested) all of your code.

### Fixing poorly formatted code

If your code is not well formatted, it will fail the lint.
For example:

```shell
❯ ./script/run spec/Kata0.spec.php
==> Running Kata0...
            _     _
  /\ /\__ _| |__ | | __ _ _ __
 / //_/ _` | '_ \| |/ _` | '_ \
/ __ \ (_| | | | | | (_| | | | |
\/  \/\__,_|_| |_|_|\__,_|_| |_|

The PHP Test Framework for Freedom, Truth and Justice.

src directory  : .../php-katas/src
spec directory : .../php-katas/spec/Kata0.spec.php

...                                                                 3 / 3 (100%)



Expectations   : 7 Executed
Specifications : 0 Pending, 0 Excluded, 0 Skipped

Passed 3 of 3 PASS in 0.008 seconds (using 3MB)

===> Linting shell scripts...
Checking ./script/bootstrap
Checking ./script/test
Checking ./script/setup
Checking ./script/run
Checking ./.shellcheck.sh
OK
===> Linting PHP...
PHP CS Fixer 3.12.0 Oliva by Fabien Potencier and Dariusz Ruminski.
PHP runtime: 7.4.32
Loaded config default from ".../php-katas/.php-cs-fixer.php".
Using cache file ".php-cs-fixer.cache".
SSSSSSSSF                                                                                                                                                                                                                                                         9 / 9 (100%)
Legend: .-no changes, F-fixed, S-skipped (cached or empty file), I-invalid file syntax (file ignored), E-error
   1) src/Kata0.php (indentation_type)
      ---------- begin diff ----------
--- .../php-katas/src/Kata0.php
+++ .../php-katas/src/Kata0.php
@@ -24,7 +24,7 @@
 	public static function max(int $n1, int $n2): int
 	{
 		if ($n1 > $n2) {
-		    return $n1;
+			return $n1;
 		}
 		return $n2;

      ----------- end diff -----------


Checked all files in 0.010 seconds, 14.000 MB memory used
```

In this case the error was that we mixed tabs with spaces.

Most formatting errors can be fixed automatically by running
[`php-cs-fixer`](https://github.com/FriendsOfPHP/PHP-CS-Fixer):

```shell
❯ ./vendor/bin/php-cs-fixer fix
Loaded config default from ".../php-katas/.php-cs-fixer.php".
Using cache file ".php-cs-fixer.cache".
   1) src/Kata0.php

Fixed all files in 0.013 seconds, 14.000 MB memory used
```

If your code cannot be fixed automatically, the error report should give you a
good idea of what to do next.
