<?php

namespace Rinsvent\Data2DTOBundle\EventListener;

use Rinsvent\Data2DTO\Resolver\TransformerResolverStorage;
use Rinsvent\Data2DTOBundle\Service\ServiceResolver;
use Symfony\Component\HttpKernel\Event\RequestEvent;

class RequestListener
{
    public function __construct(
        private ServiceResolver $serviceResolver
    ) {}

    public function onKernelRequest(RequestEvent $event)
    {
        $storage = TransformerResolverStorage::getInstance();
        $storage->add(ServiceResolver::TYPE, $this->serviceResolver);
    }
}
