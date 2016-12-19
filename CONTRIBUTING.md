# Contributing

If you're interested in getting involved with Phire then here are some guidelines, if you're unsure what might be expected!

## Contents

* [Changes](#changes)
    * [Minor](#minor)
    * [Major](#major)
* [Finding Issues](#finding-issues)
    * [Reporting Issues](#reporting-issues)
* [Commenting Rules](#commenting-rules)

## Changes

Any changes that you make should be forked and submitted with a pull request.

Changes within PHP files are checked by StyleCI for formatting, any changes made that brake one or more rules will be highlighted in the latest StyleCI analysis.

### Minor Changes

If you make a minor change, for example:

* Change how a method may work internally, but it still
    * **Returns** the same cast type
    * **Accepts** the same number of arguments
    * **Accepts** the same argument cast types
    * **Uses** the same properties (if any) from within a class, interface, trait, etc...
* Update a Markdown
    * readme.md
    * contributing.md
    * contributors.md
    * etc...

Fork this repository - as normal - and make your changes. You should test these changes locally before submitting them as a pull request, it will save yourself and others a lot of wasted time tracking down problems, and updating pull requests. **If your changes were not code based, there is no reason these tests should fail, so don't panic!**

Make sure that any PHPDoc blocks around methods that you modify are updated accordingly, should you modify any of this behaviour. It helps other developers understand what that method does - if the PHPDoc block is wrong, then it will get confusing for all of us.

If your changes mean that any PHPUnit tests would incorrectly or unnecessarily fail, please update those tests to match the new conditions. If you're unsure of how to do this, [check out the docs](https://phpunit.de/manual/current/en/index.html) for PHPUnit.

### Major Changes

If you make a major change, for example:

* Change a method name
* A method now more, fewer, or new arguments
* A method now has a different return type
* Create a new set of functionality, for example

The same applies for minor changes, all PHPDoc blocks, PHPUnit must reflect any new methods, interfaces, classes or anything else that is added, and any documentation that may now be incorrect **must** be updated.

## Finding Issues

If you're using this project and find a something isn't working the way that you might expect, or something doesn't work at all, it can be reported with a [GitHub issue](https://github.com/phireframework/phire/issues/new).

### Reporting Issues

Please report any issues via the GitHub issue reporter. [Report a new issue](https://github.com/phireframework/phire/issues/new).

## Commenting Rules

Be:
* **Respectful**
* **Helpful**
* **Nice**

Everyone is learning, pass on your knowledge if someone is unsure - because you have been in that position before.