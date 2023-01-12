<?php

declare(strict_types=1);

namespace App;

interface Sender
{
    /**
     * Sends data to some crm
     *
     * @param  Action  $action
     * @param  AbstractPayload  $payload
     *
     * @return int
     */
    public function send(Action $action, AbstractPayload $payload): int;
}