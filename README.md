# Avana Test

[![N|AVANA INDONESIA](https://avana.id/wp-content/themes/avana-id/assets/images/logo.webp)](https://avana.id/)

# Development Setup
* [php] - PHP using version 8.
* [composer] - Needed to install dependecies.
* [github] - Needed to get code for our Repositories.

## Test 1
menjalankan test 1 dengan command.
```sh
cd avana
php test1/index.php
```

## Test 2
merupakan package yang dibuat menggunakan laravel 8 sebagai framework ujicoba
github: https://github.com/meiichin/excel-validation
packagist: https://packagist.org/packages/avana/excel-validation

instalation:
```sh
composer require avana/excel-validation
```

example:
```php
<?php

namespace App\Http\Controllers;

use Avana\ExcelValidation\ExcelValidation;

class Test extends Controller
{
    public function test()
    {
        return ExcelValidation::validate(public_path('Type_A.xlsx'));
    }
}
```


## License

[MIT license](https://opensource.org/licenses/MIT).

[github]: <https://github.com/>
[php]: <https://www.php.net//>
[composer]: <https://getcomposer.org/>