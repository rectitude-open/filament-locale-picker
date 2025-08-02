#!/bin/sh
set -e
cd /home/wwwroot/filament-locale-picker || exit
chown -R www-data:www-data /home/wwwroot/filament-locale-picker && \
find /home/wwwroot/filament-locale-picker -type f -exec chmod 644 {} \; && \
find /home/wwwroot/filament-locale-picker -type d -exec chmod 755 {} \; && \
chmod -R +x /home/wwwroot/filament-locale-picker/vendor/bin/ && \
chmod -R +x /home/wwwroot/filament-locale-picker/dev/
