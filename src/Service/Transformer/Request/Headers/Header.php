<?php

namespace Rinsvent\Data2DTOBundle\Service\Transformer\Request\Headers;

use Rinsvent\Data2DTOBundle\Service\Service;

#[\Attribute]
class Header extends Service
{
    public function __construct(
        public string $property,
        public ?string $default = null,
        public array $tags = ['request_headers']
    ) {
        parent::__construct($tags);
    }
}
