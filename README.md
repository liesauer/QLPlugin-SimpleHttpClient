# ql-plugin-simplehttpclient

## Install
### Composer
`composer require liesauer/ql-plugin-simplehttpclient`

## Use
<pre><code>use liesauer\QLPlugin\SimpleHttpClient;
use QL\QueryList;

require_once __DIR__ . '/vendor/autoload.php';

$ql = QueryList::getInstance();
$ql->use(SimpleHttpClient::class);

$response = $ql->quickGet('http://www.domain.com/');

var_dump($response);
</code></pre>