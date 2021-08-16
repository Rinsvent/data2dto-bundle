<?php

namespace Rinsvent\Data2DTOBundle\Service;

use Rinsvent\Data2DTO\Transformer\Meta;

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