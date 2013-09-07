Laravel Blitline
================

Blitline Provider for Lavel 4


**Installation**

1. Register at `http://www.blitline.com/` and get your application id
2. `composer require peach-schnapps/blitline dev-master`
3. Add `'PeachSchnapps\Blitline\BlitlineServiceProvider', // blitline` under `providers` in `app/config/app.php`
4. Publish package config to app/config/packages with `php artisan config:publish peach-schnapps/blitline`
5. Add your application id to `app/config/packages/peach-schnapps/blitline/config.php`


**Usage**
```
$Blit = new Blitline;
$src = 'http://p.twimg.com/Atb2B0MCAAADLk6.jpg';
$Blit->load($src);
$Blit->do_resize_to_fill(256, 256);
$Blit->do_sharpen();

$results = $Blit->process();
	
if ($results->success()) {
	foreach($results->get_images() as $name => $url) {
		echo "Processed: {$name} at {$url}\n";
	}
} else {
	print_r($results->get_errors());
}
```

More Usage Example & Documentation at https://github.com/minioak/blitline_php
