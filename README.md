# first/tic-tac-toe-backend

<!-- Start SDK Installation -->
## SDK Installation

### Composer

To install the SDK first add the below to your `composer.json` file:

```json
{
    "repositories": [
        {
            "type": "github",
            "url": "https://github.com/speakeasy-sdks/tic-tac-toe-backend-php.git"
        }
    ],
    "require": {
        "first/tic-tac-toe-backend": "*"
    }
}
```

Then run the following command:

```bash
composer update
```
<!-- End SDK Installation -->

## SDK Example Usage
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

<!-- Start SDK Available Operations -->
## Available Resources and Operations

### [TicTacToeBackends SDK](docs/sdks/tictactoebackends/README.md)

* [get](docs/sdks/tictactoebackends/README.md#get) - Root endpoint.
* [getVersion](docs/sdks/tictactoebackends/README.md#getversion) - Root endpoint.
* [putGames](docs/sdks/tictactoebackends/README.md#putgames) - Games endpoint. Creates the next game state from the previous game state.
<!-- End SDK Available Operations -->

### Maturity

This SDK is in beta, and there may be breaking changes between versions without a major version update. Therefore, we recommend pinning usage
to a specific package version. This way, you can install the same version each time without breaking changes unless you are intentionally
looking for the latest version.

### Contributions

While we value open-source contributions to this SDK, this library is generated programmatically.
Feel free to open a PR or a Github issue as a proof of concept and we'll do our best to include it in a future release!

### SDK Created by [Speakeasy](https://docs.speakeasyapi.dev/docs/using-speakeasy/client-sdks)
