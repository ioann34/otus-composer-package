# ivan-sorochinskiy/hw3

## Требования

```
- PHP 8.4
```

## Установка 

```sh
composer require ivan-sorochinskiy/hw3
```

## Использование

```php
use IvanSorochinskiy\Hw3\Str;

$str = new Str();

echo $str->toLower('ПрИвЕт!');
echo $str->toUpper('ПрИвЕт!');
echo $str->toLatin('Иван Сорочинский');
```
