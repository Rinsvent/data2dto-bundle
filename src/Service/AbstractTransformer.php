<?php

namespace Rinsvent\Data2DTOBundle\Service;

use Rinsvent\Data2DTO\Transformer\TransformerInterface;

abstract class AbstractTransformer implements TransformerInterface
{
    public static function getLocatorKey()
    {
        return static::class;
    }
}
