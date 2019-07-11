Based on the skeleton idea. The Wordpress-Composer startup structure.

Updates must be managed manually, because they are forcely prohibited by the specified plugin in the must used plugins directory.

rename `local-config-sample.php` to `local-config.php`

dev `composer install`

prod `composer install --no-ansi --no-dev --no-interaction --no-progress --no-scripts --optimize-autoloader`
