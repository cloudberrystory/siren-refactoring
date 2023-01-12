<?php

declare(strict_types=1);

namespace App;

final class BazSender implements Sender
{

    public function __construct(
        protected readonly string $url,
        protected readonly string $user,
        protected readonly string $password,
    ) {
    }

    /**
     * Sends data to the Baz crm
     *
     * @param  Action  $action
     * @param  AbstractPayload  $payload
     *
     * @return int
     */
    public function send(Action $action, AbstractPayload $payload): int
    {
        //@todo Do not implement a logic for send specifically. Imagine that it's here.

        return 200;
    }
}
