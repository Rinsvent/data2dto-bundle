<?php

namespace Rinsvent\Data2DTOBundle\Service\Transformer\Request\Headers;

use Rinsvent\Data2DTO\Transformer\Meta;

class Header extends Meta
{
    public function __construct(
        public string $property,
        public ?string $default = null,
        public array $tags = ['request_headers']
    ) {
        parent::__construct(...func_get_args());
    }
}