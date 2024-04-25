# Kona
### A tiny Web Framework for PHP

# Installation
Just unpack files from this repo to your PHP/Apache/nginx server. Examples are inside!

Tested on PHP 8.3, PHP 7.x support not guaranteed, but you can try anyway!

# Examples
### Loading and displaying home page
assuming you are have theme `default`, with folder `home` and with `body.html` and `head.php` files.

```php
<?php
// index.php
require('./kona/kona.php');

$kona = new Kona();

// element, page, file type (optional for PHP files)
$head = $kona->load('head', 'home');
$body = $kona->load('body', 'home', 'html');

$kona->execute(
  $head,
  $body,

  // head attributes (optional)
  'class="js" data-head="true"'
);
```

```html
<!-- body.html -->
<p>Hello World!</p>
```

```php
<?php
// head.php
require_once('./kona/kona.php');

$kona = new Kona();

echo $kona->setUTF8();
echo $kona->setViewport();
echo $kona->setTitle('Home page');
```

More examples in the code of this repo!
