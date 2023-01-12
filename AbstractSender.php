<?php

declare(strict_types=1);

namespace App;

/**
 * Class AbstractSender
 *
 * @package App
 */
abstract class AbstractSender
{
    public function __construct(
        protected readonly string $url,
        protected readonly string $user,
        protected readonly string $password,
    ) {
    }

    /**
     * Sends data to some crm
     *
     * @param  Action  $action
     * @param  AbstractPayload  $payload
     *
     * @return int
     */
    abstract public function send(Action $action, AbstractPayload $payload): int;
}