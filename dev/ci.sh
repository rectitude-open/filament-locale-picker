#!/bin/bash
set -e

/home/wwwroot/filament-locale-picker/vendor/bin/pest
/home/wwwroot/filament-locale-picker/vendor/bin/pint
/home/wwwroot/filament-locale-picker/vendor/bin/phpstan analyse
