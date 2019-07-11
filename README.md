Based on the skeleton idea. The Wordpress-Composer startup structure.

Updates must be managed manually, because they are forcely prohibited by the specified plugin in the must used plugins directory.

Works only with single Wordpress installation.

TODO:

1. update to mode secure constants https://github.com/markjaquith/WordPress-Skeleton/issues/22
1. add these plugins
			'rewrite-rules-inspector/rewrite-rules-inspector.php',
			'wp-xhprof-profiler/xhprof-profiler.php'
			'wp-log-in-browser/wp-log-in-browser.php',
			

rename `local-config-sample.php` to `local-config.php`

dev `composer install`

prod `composer install --no-ansi --no-dev --no-interaction --no-progress --no-scripts --optimize-autoloader`
