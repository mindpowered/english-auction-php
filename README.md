
englishauction
==============

Contents
========

* [About](#about)
* [Requirements](#requirements)
* [Installation](#installation)
* [Configuration](#configuration)
* [Usage](#usage)
* [Licensing](#licensing)
* [Support](#support)

# About
A Timed Auction library starting at a low price and increasing until the auction ends.

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


# Configuration
You must configure the storage and retrieval of auctions and bids. Before we can make use of englishauction's functions, we have to create Callback functions for englishauction to use whenever it needs to use any persistent data regarding auctions and bids. A common way of storing persistent data is using SQL. Each setup function bridges the gap between your auction data and the englishauction package's functionality.

# Usage
You are using php


More examples to come

# Licensing
Additional [licensing options][licensing] are available.

# Support
For bug fixes, please raise an issue in the [Issue Tracker][bugs].

For feature requests, and general support, please [Contact us][contact].



[bugs]: https://github.com/mindpowered/english-auction-php/issues
[contact]: https://mindpowered.dev/support.html?ref=english-auction-php/
[docs]: https://mindpowered.github.io/english-auction-php/
[licensing]: https://mindpowered.dev/?ref=english-auction-php
