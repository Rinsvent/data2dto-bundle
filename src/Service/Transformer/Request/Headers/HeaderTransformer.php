<?php

namespace Rinsvent\Data2DTOBundle\Service;

use Rinsvent\Data2DTO\Transformer\Meta;

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