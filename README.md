# QueryList V4 Plugin - SimpleHttpClient
SimpleHttpClient
# Installation
```
composer require liesauer/ql-plugin-simplehttpclient
```
# Bind
* array `quickGet` ($url, $header = null, $cookie = '', $data = '', $options = null)
* array `quickPost` ($url, $header = null, $cookie = '', $data = '', $options = null)
# Usage
```php
use liesauer\QLPlugin\SimpleHttpClient;
use QL\QueryList;

require_once __DIR__ . '/vendor/autoload.php';

$ql = QueryList::getInstance();
$ql->use(SimpleHttpClient::class);

$response = $ql->quickGet('http://www.domain.com/');

var_dump($response);
```