<!-- Start SDK Example Usage -->
```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \First\tic_tac_toe_backend\TicTacToeBackends;

$sdk = TicTacToeBackends::builder()
    ->build();

try {
    $response = $sdk->get();

    if ($response->body !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```
<!-- End SDK Example Usage -->