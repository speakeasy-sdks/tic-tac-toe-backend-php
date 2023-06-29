<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace First\tic_tac_toe_backend\Utils;

class JSON
{
    public static function createSerializer(): \JMS\Serializer\Serializer
    {
        return \JMS\Serializer\SerializerBuilder::create()
            ->configureHandlers(function (\JMS\Serializer\Handler\HandlerRegistry $registry) {
                $registry->registerSubscribingHandler(new MixedJSONHandler());
                $registry->registerSubscribingHandler(new EnumHandler());
            })
            ->addDefaultHandlers()->build();
    }
}