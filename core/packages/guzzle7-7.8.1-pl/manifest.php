<?php return array (
  'manifest-version' => '1.1',
  'manifest-attributes' => 
  array (
    'license' => 'MIT License

Copyright (c) 2020

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
',
    'readme' => 'Guzzle 7
--------

Installs the common Guzzle package into MODX, which is used for sending HTTP requests.

The package will on each install the latest release of Guzzle 7. To update to a newer version of Guzzle, reinstall the package in the MODX package manager. Guzzle 7 requires at least PHP 7.2.

If the package detects Guzzle is already available, it does not load the autoloader to avoid conflicts. It also does not load the autoloader on MODX3, as that ships with Guzzle 7 out of the box (since alpha4).

To learn how to use this package in your own packages to avoid dependency conflicts, see https://github.com/modmore/guzzle7
',
    'changelog' => 'Guzzle7 v7.8.1-pl
-----------------
Released on 2024-04-24

- Fix logic on checking ClientInterface to make sure dependencies aren\'t loaded when already available [#5]

Guzzle7 v7.8.0-pl
-----------------
Released on 2023-09-12

- Update guzzle to ^7.8
- Update shipped composer to v2.6.2

Guzzle7 v7.3.1-pl
-----------------
Released on 2021-10-13

- Update shipped composer for installation to v2.1.9. This fixes an issue installing dependencies on environments without `proc_open()`.

Guzzle7 v7.3.0-pl
-----------------
Released on 2021-08-17

- Change the way we check for and "pre-load" Guzzle into memory. We\'re now first attempting to load the ClientInterface, Client, HandlerStack and Utils class to determine if we should provide Guzzle. If so, we include the autoloader and load those classes again.
- Remove MODX3-specific check. Rather, rely on class detection to see if Guzzle should be loaded or not.
- Moving forward, this package will follow Guzzle minor version numbering.
    - The major/minor version (currently 7.3) will match the minor version of Guzzle (so we\'ll release an update when 7.4 is released), while the patch version and release index will be specific to this MODX package. This way, dependant packages could indicate they require at least a certain minimum of Guzzle.
    - The latest Guzzle release is still installed like before during package installation. Re-install the package to update to a new Guzzle patch release.

Guzzle7 v1.0.1-pl
-----------------
Released on 2021-08-03

- Fix composer resolver failing on uninstall

Guzzle7 v1.0.0-pl
-----------------
Released on 2021-08-03

- First release
',
  ),
  'manifest-vehicles' => 
  array (
    0 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modNamespace',
      'guid' => 'bc2b1f33bd1f2b37dd620642c9fb8702',
      'native_key' => 'guzzle7',
      'filename' => 'modNamespace/326b53f1677b40042ede17538ecdea9d.vehicle',
      'namespace' => 'guzzle7',
    ),
    1 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOFileVehicle',
      'class' => 'xPDOFileVehicle',
      'guid' => 'fa7aa43e762571590dd3ce2129a50088',
      'native_key' => 'fa7aa43e762571590dd3ce2129a50088',
      'filename' => 'xPDOFileVehicle/75fd1a5b944238672f251d6f4c87dcc3.vehicle',
    ),
  ),
);