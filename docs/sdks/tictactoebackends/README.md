# TicTacToeBackends SDK

## Overview

Game Engine API for Tic Tac Toe: Game Engine API for Tic Tac Toe

### Available Operations

* [get](#get) - Root endpoint.
* [getVersion](#getversion) - Root endpoint.
* [putGames](#putgames) - Games endpoint. Creates the next game state from the previous game state.

## get

<br/>Returns the package name and version.<br/><br/>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \First\tic_tac_toe_backend\TicTacToeBackends;

$sdk = TicTacToeBackends::builder()
    ->build();

try {
    $response = $sdk->ticTacToeBackends->get();

    if ($response->body !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```


### Response

**[?\First\tic_tac_toe_backend\Models\Operations\GetResponse](../../models/operations/GetResponse.md)**


## getVersion

<br/>Returns the package name and version.<br/><br/>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \First\tic_tac_toe_backend\TicTacToeBackends;

$sdk = TicTacToeBackends::builder()
    ->build();

try {
    $response = $sdk->ticTacToeBackends->getVersion();

    if ($response->body !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```


### Response

**[?\First\tic_tac_toe_backend\Models\Operations\GetVersionResponse](../../models/operations/GetVersionResponse.md)**


## putGames

<br/>Accepts a GameState and Move.<br/><br/>Returns a Move including the before and after GameStates.<br/>

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \First\tic_tac_toe_backend\TicTacToeBackends;

$sdk = TicTacToeBackends::builder()
    ->build();

try {
'corrupti'

    $response = $sdk->ticTacToeBackends->putGames($request);

    if ($response->body !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                  | Type                                       | Required                                   | Description                                |
| ------------------------------------------ | ------------------------------------------ | ------------------------------------------ | ------------------------------------------ |
| `$request`                                 | [string](../../models//.md)                | :heavy_check_mark:                         | The request object to use for the request. |


### Response

**[?\First\tic_tac_toe_backend\Models\Operations\PutGamesResponse](../../models/operations/PutGamesResponse.md)**

