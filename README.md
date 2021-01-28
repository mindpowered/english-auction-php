
englishauction
==============
Online auctions with ascending price and time limit

![Build Status](https://mindpowered.dev/assets/images/github-badges/build-passing.svg)

Contents
========

* [Source Code and Documentation](#source-code-and-documentation)
* [Licensing](#licensing)
* [Requirements](#requirements)
* [Installation](#installation)
* [Usage](#usage)
* [Support](#support)

# Source Code and Documentation
- Source Code: [https://github.com/mindpowered/english-auction-php](https://github.com/mindpowered/english-auction-php)
- Documentation: [https://mindpowered.github.io/english-auction-php](https://mindpowered.github.io/english-auction-php)

# Licensing
To obtain a version of this package under the MIT License, follow the instructions to [get a license][purchase]. The MIT License has no restrictions on commercial use and permits reuse within proprietary software.

# Requirements
- php >= 7
- php `mbstring` extension
- php `xml` extension


Third-party dependencies may have additional requirements.

# Installation

You can get englishauction using Composer. Composer manages dependencies for packages from Packagist and you can get it here: <https://getcomposer.org/> .

Create a composer.json file in the top-most directory of your project and add `mindpowered/englishauction` to the requirements:
```
{
        "require": {
                "mindpowered/englishauction" : "*"
        }
}
```
Now you can run the command to update composer: `composer update`. In order for composer to install the package dependencies you will need an archive manager such as zip installed. Composer requires use of the commands `zip` and `unzip`.


# Usage
```php
require __DIR__ . '/vendor/autoload.php';

use \mindpowered\englishauction\EnglishAuction;

$ea = new EnglishAuction();
$ea->GetOpenAuctions(0, 10, "start", true);

```


# Support
We are here to support using this package. If it doesn't do what you're looking for, isn't working, or you just need help, please [Contact us][contact].

There is also a public [Issue Tracker][bugs] available for this package.



[bugs]: https://github.com/mindpowered/english-auction-php/issues
[contact]: https://mindpowered.dev/support.html?ref=english-auction-php/
[docs]: https://mindpowered.github.io/english-auction-php/
[licensing]: https://mindpowered.dev/?ref=english-auction-php
[purchase]: https://mindpowered.dev/purchase/
