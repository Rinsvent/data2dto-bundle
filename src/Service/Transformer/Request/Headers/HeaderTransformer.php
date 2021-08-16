<?php

namespace Rinsvent\Data2DTOBundle\Service\Transformer\Request\Headers;

use Rinsvent\Data2DTO\Transformer\Meta;
use Rinsvent\Data2DTOBundle\Service\Transformer\Request\AbstractRequest;

class HeaderTransformer extends AbstractRequest
{
    /**
     * @param Header $meta
     */
    public function transform(&$data, Meta $meta): void
    {
        $data = $this->request->headers->get($meta->property, $meta->default);
    }
}