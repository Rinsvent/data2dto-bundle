<?php

namespace Rinsvent\Data2DTOBundle\Service\Transformer\Request\Headers;

use Rinsvent\Data2DTO\Transformer\Meta;

class UserAgentTransformer extends HeaderTransformer
{
    /**
     * @param UserAgent $meta
     */
    public function transform(&$data, Meta $meta): void
    {
        $data = $this->request->headers->get('user_agent', $meta->default);
    }
}