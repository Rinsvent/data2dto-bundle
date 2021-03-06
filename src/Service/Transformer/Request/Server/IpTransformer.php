<?php

namespace Rinsvent\Data2DTOBundle\Service\Transformer\Request\Server;

use Rinsvent\Data2DTO\Transformer\Meta;

class IpTransformer extends ServerTransformer
{
    /**
     * @param Ip $meta
     */
    public function transform(&$data, Meta $meta): void
    {
        $data = $this->request->getClientIp();
    }
}