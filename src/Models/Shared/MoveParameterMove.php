<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace First\tic_tac_toe_backend\Models\Shared;


enum MoveParameterMove: string
{
    case Human = 'human';
    case Random = 'random';
    case Minimax = 'minimax';
}