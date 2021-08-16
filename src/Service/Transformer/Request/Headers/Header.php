<?php

namespace Rinsvent\Data2DTOBundle\Service\Transformer\Request\Headers;

use Rinsvent\Data2DTO\Transformer\Meta;

#[\Attribute]
class Header extends Meta
{
    public function __construct(
        public string $property,
        public ?string $default = null,
        public array $tags = ['request_headers']
    ) {
        parent::__construct($tags);
    }
}