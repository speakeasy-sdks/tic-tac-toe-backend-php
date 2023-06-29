<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace First\tic_tac_toe_backend\Models\Shared;


class MoveAfterStatePossibleMoves
{
	
    public ?MoveAfterStatePossibleMovesAfterState $afterState = null;
    
	
    public ?MoveAfterStatePossibleMovesBeforeState $beforeState = null;
    
	
    public ?int $cellIndex = null;
    
	
    public ?MoveAfterStatePossibleMovesMark $mark = null;
    
	public function __construct()
	{
		$this->afterState = null;
		$this->beforeState = null;
		$this->cellIndex = null;
		$this->mark = null;
	}
}
