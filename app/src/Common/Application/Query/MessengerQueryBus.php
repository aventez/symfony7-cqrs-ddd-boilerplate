<?php

namespace App\Common\Application\Query;

use Symfony\Component\Messenger\HandleTrait;
use Symfony\Component\Messenger\MessageBusInterface;

final class MessengerQueryBus implements QueryBus
{
    use HandleTrait {
        handle as handleQuery;
    }

    public function __construct(
        MessageBusInterface $queryBus
    ) {
        $this->messageBus = $queryBus;
    }

    public function handle(Query $query): mixed
    {
        return $this->handleQuery($query);
    }
}