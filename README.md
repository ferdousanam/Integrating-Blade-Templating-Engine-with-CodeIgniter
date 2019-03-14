******************************  
## Installation Instructions:  
******************************  
  
 1. Move the `composer.json` file inside `/application` directory.  
 2. Configure the `/application/config.php` file  
```php  
 $config['composer_autoload'] = TRUE;
 ```
 3. Open terminal in `/application` directory and run:  
```bash  
$ composer require coolpraz/php-blade
```  
&emsp;&emsp;Documentation: [https://packagist.org/packages/coolpraz/php-blade](https://packagist.org/packages/coolpraz/php-blade)
 
 4. To use blade templating engine create `MY_Controller.php` in `/application/core/MY_Controller.php`  
```php  
<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
  
use Coolpraz\PhpBlade\PhpBlade;  
class MY_Controller extends CI_Controller {  
   protected $views;  
   protected $cache;  
   protected $blade;  
   public function __construct() {  
      parent::__construct();  
      $this->views = APPPATH . 'views';  
      $this->cache = APPPATH . 'cache';  
      $this->blade = new PhpBlade($this->views, $this->cache);  
   }  
}
```  
 
 5. Ready to use Blade Tempalting Engine now.

## Contributing  
Md. Ferdous Anam
