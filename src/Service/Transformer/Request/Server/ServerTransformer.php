<?php

namespace Rinsvent\Data2DTOBundle\Service\Transformer\Request\Server;

use Rinsvent\Data2DTO\Transformer\Meta;
use Rinsvent\Data2DTOBundle\Service\Transformer\Request\AbstractRequest;

class ServerTransformer extends AbstractRequest
{
    /**
     * @param Server $meta
     */
    public function transform(&$data, Meta $meta): void
    {
        $data = $this->request->server->get($meta->property, $meta->default);
    }
}