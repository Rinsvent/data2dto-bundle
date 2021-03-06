<?php

namespace Rinsvent\Data2DTOBundle\Service\Transformer\Request\Server;

use Rinsvent\Data2DTOBundle\Service\Service;

#[\Attribute]
class Server extends Service
{
    public function __construct(
        public string $property,
        public ?string $default = null,
        public array $tags = ['request_server']
    ) {
        parent::__construct($tags);
    }
}
