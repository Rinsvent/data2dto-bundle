<?php

namespace Rinsvent\Data2DTOBundle\Service;

use Rinsvent\Data2DTO\Transformer\Meta;

class UserAgentTransformer extends AbstractRequest
{
    /**
     * @param UserAgent $meta
     */
    public function transform(&$data, Meta $meta): void
    {
        $data = $this->request->headers->get('user_agent', $meta->default);
    }
}